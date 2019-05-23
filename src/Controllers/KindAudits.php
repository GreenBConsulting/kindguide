<?php
namespace KindGuide\Controllers;

use App\Models\KGCertifications;
use App\Models\KGCertSections;
use App\Models\KGAuditSect;
use App\Models\KGAuditSectSub;
use App\Models\KGAuditItems;
use App\Models\KGAuditItemBullets;
use App\Models\KGAuditItemCompliance;
use KindGuide\Controllers\KindBusinesses;

class KindAudits extends KindBusinesses
{
    protected function printAuditOverview($nID, $certID = 1)
    {
        $auditPrint = new AuditPrint($certID);
        $auditPrint->loadAudit();
        
        // For prototyping, we're all editing the same audit
        $this->sessData->loadCore($GLOBALS["SL"]->coreTbl, 1);

        return view('vendor.kindguide.nodes.493-audit-overview', [
            "nID"  => $nID,
            "doms" => $auditPrint->doms
        ])->render() . view('vendor.kindguide.nodes.493-audit-overview-css', [
            "nID"  => $nID,
            "doms" => $auditPrint->doms
        ])->render() . view('vendor.kindguide.nodes.493-audit-overview-js', [
            "nID"  => $nID,
            "doms" => $auditPrint->doms
        ])->render();
    }
    
    protected function printAuditOverviewOpts($nID)
    {
        return view('vendor.kindguide.nodes.493-audit-overview-options', [
            "nID"  => $nID
        ])->render();
    }
    
    protected function printCertSkinStyles($nID, $certID = 1)
    {
        return view('vendor.kindguide.nodes.495-cert-skin-css', [
            "nID"    => $nID,
            "certID" => $certID
        ])->render() . view('vendor.kindguide.nodes.495-cert-skin-js', [
            "nID"    => $nID,
            "certID" => $certID
        ])->render();
    }
    
    
    // IMPORT PROCESS - MAYBE ONE-TIME
    protected function printAuditImport($nID)
    {
        if ($GLOBALS["SL"]->REQ->has('sub')
            //&& $GLOBALS["SL"]->REQ->has('auditID') && intVal($GLOBALS["SL"]->REQ->get('auditID')) > 0
            && $GLOBALS["SL"]->REQ->has('importCsv') && trim($GLOBALS["SL"]->REQ->get('importCsv')) != '') {
            $lines = $GLOBALS["SL"]->mexplode("\n", trim($GLOBALS["SL"]->REQ->get('importCsv')));
            if (sizeof($lines) > 0) {
                $cleaned = new AuditImport;
                foreach ($lines as $i => $line) {
                    if (trim($line) != '' && strpos($line, ',') !== false) {
                        $cleaned->addLine($line);
                    }
                }
            }
            $cleaned->runDatabaseImport();
        }
        $certs = KGCertifications::orderBy('CertName', 'asc')
            ->get();
        return view('vendor.kindguide.nodes.486-audit-import-tools', [
            "nID"   => $nID,
            "certs" => $certs
        ])->render();
    }
    
}

class AuditPrint
{
    public $certID        = 1;
    public $doms          = [];
    public $currSect      = 0;
    
    public function __construct($certID = 1)
    {
        $this->certID = $certID;
    }
    
    public function loadAudit($domDefSet = 'TCC Standards Audit Domains')
    {
        $set = $this->loadAuditDomainColors($domDefSet);
        if ($set->isNotEmpty()) {
            foreach ($set as $def) {
                $this->doms[] = new AuditDomain($this->certID, $def, $this->currSect);
                $this->currSect += sizeof($this->doms[sizeof($this->doms)-1]->sections);
                
            }
        }
        return true;
    }
    
    // Associate Definition ID numbers with the name and color of each Domain within an Audit
    protected function loadAuditDomainColors($domDefSet = 'TCC Standards Audit Domains')
    {
        $GLOBALS["SL"]->x["auditDomains"] = [];
        $set = $GLOBALS["SL"]->def->getSet($domDefSet, true);
        if ($set->isNotEmpty()) {
            foreach ($set as $def) {
                $GLOBALS["SL"]->x["auditDomains"][$def->DefID] = [
                    $def->DefValue,      // english name
                    $def->DefDescription // hexidecimal color
                ];
            }
        }
        return $set;
    }
    
    protected function getAuditImportLineDepth($cols = [])
    {
        if ($cols[0] == '' && $cols[1] != '') {
            return 0;
        }
        if ($cols[0] != '') {
            if (strpos($cols[0], '•') !== false || strpos($cols[1], '•') !== false) {
                return -1;
            }
            $dot1 = strpos($cols[0], '.');
            if ($dot1 > 0) {
                $dot2 = strpos($cols[0], '.', $dot1+1);
                if ($dot2 > 0) {
                    $dot3 = strpos($cols[0], '.', $dot2+1);
                    if ($dot3 > 0) {
                        return 3;
                    }
                    return 2;
                }
                return 1;
            } elseif (preg_match('/^[0-9]+$/', $cols[0])) {
                return 1;
            }
        }
        return -2;
    }
    
}

class AuditDomain
{
    public $name     = '';
    public $color    = '';
    public $defID    = 0;
    public $sectIDs  = [];
    public $sections = [];
    protected $curr  = -1;
    
    public function __construct($certID, $def, $currSect)
    {
        $this->defID    = $def->DefID;
        $this->name     = $def->DefValue;
        $this->color    = $def->DefDescription;
        $this->sections = $this->sectIDs = [];
        $allSects = KGCertSections::where('CrtSctCertificationID', $certID)
            //->orderBy('CrtSctOrder', 'asc')
            ->get();
        if ($allSects->isNotEmpty()) {
            foreach ($allSects as $sect) {
                $chk = KGAuditSectSub::where('AudSecSubSectionID', $sect->CrtSctSectionID)
                    ->where('AudSecSubDomain', $this->defID)
                    ->first();
                if ($chk && isset($chk->AudSecSubSectionID)) {
                    $this->sectIDs[] = $chk->AudSecSubSectionID;
                }
            }
            $allSects = KGAuditSect::whereIn('AudSecID', $this->sectIDs)
                ->orderBy('AudSecOrder', 'asc')
                ->get();
            if ($allSects->isNotEmpty()) {
                foreach ($allSects as $i => $sect) {
                    $this->sections[] = new AuditSection($sect->AudSecID, $sect->AudSecName, ($currSect+$i));
                }
            }
        }
        return true;
    }
    
    public function addCsvLine($cols = [])
    {
        $this->sections = [];
        if (isset($cols[1])) {
            $this->name = $cols[1];
        }
        return true;
    }
    
    public function addSection($cols = [])
    {
        $this->curr++;
        $this->sections[$this->curr] = new AuditSection();
        $this->sections[$this->curr]->addCsvLine($cols);
        return true;
    }
    
    public function addSubSection($cols = [])
    {
        if ($this->curr >= 0 && isset($this->sections[$this->curr])) {
            $this->sections[$this->curr]->addSubSection($cols);
        }
        return true;
    }
    
    public function addItem($cols = [])
    {   
        if ($this->curr >= 0 && isset($this->sections[$this->curr])) {
            $this->sections[$this->curr]->addItem($cols);
        }
        return true;
    }
}

class AuditSection
{
    public $ref     = '';
    public $name    = '';
    public $subs    = [];
    protected $curr = -1;
    
    public function __construct($sectID = -1, $sectName = '', $sectInd = 0)
    {
        $this->subs = [];
        if ($sectID > 0) {
            $currSect = KGAuditSect::find($sectID);
            if ($currSect && isset($currSect->AudSecName)) {
                $this->ref  = '' . (1+$sectInd) . '.';
                $this->name = $currSect->AudSecName;
                $subs = KGAuditSectSub::where('AudSecSubSectionID', $sectID)
                    ->orderBy('AudSecSubOrder', 'asc')
                    ->get();
                if ($subs->isNotEmpty()) {
                    foreach ($subs as $i => $sub) {
                        $this->subs[] = new AuditSubSection($sub->AudSecSubID, $sub->AudSecSubName, $i);
                    }
                }
            }
        }
    }
    
    public function addCsvLine($cols = [])
    {
        $this->subs = [];
        if (isset($cols[1])) {
            $this->name = $cols[1];
        }
        return true;
    }
    
    public function addSubSection($cols = [])
    {
        $this->curr++;
        $this->subs[$this->curr] = new AuditSubSection();
        $this->subs[$this->curr]->addCsvLine($cols);
        return true;
    }
    
    public function addItem($cols = [])
    {
        if ($this->curr >= 0 && isset($this->subs[$this->curr])) {
            $this->subs[$this->curr]->addItem($cols);
        }
        return true;
    }
}

class AuditSubSection
{
    public $ref     = '';
    public $name    = '';
    public $items   = [];
    protected $curr = -1;
    
    public function __construct($subID = -1, $subName = '', $subInd = 0)
    {
        $this->name = $subName;
        $this->ref  = '' . (1+$subInd) . '.';
        $this->items = [];
        if ($subID > 0) {
            $items = KGAuditItems::where('AudItmSubSectionID', $subID)
                ->orderBy('AudItmOrder', 'asc')
                ->get();
            if ($items->isNotEmpty()) {
                foreach ($items as $i => $item) {
                    $this->items[] = new AuditItem($item->AudItmID, $item, $i);
                }
            }
        }
    }
    
    public function addCsvLine($cols = [])
    {
        $this->items = [];
        if (isset($cols[1])) {
            $this->name = $cols[1];
        }
        return true;
    }
    
    public function addItem($cols = [])
    {
        $this->curr++;
        $this->items[$this->curr] = new AuditItem();
        $this->items[$this->curr]->addCsvLine($cols);
        return true;
    }
    
    public function addBullet($cols = [])
    {
        if ($this->curr >= 0 && isset($this->items[$this->curr])) {
            $this->items[$this->curr]->addBullet($cols);
        }
        return true;
    }
}

class AuditItem
{
    public $id       = -1;
    public $ref      = '';
    public $name     = '';
    public $category = '';
    public $foundIn  = [];
    public $bullets  = [];
    protected $curr  = -1;
    
    public function __construct($itemID = -1, $item = [], $itemInd = 0)
    {
        if (isset($item->AudItmStandard)) {
            $this->id       = $item->AudItmID;
            $this->name     = $item->AudItmStandard;
            $this->ref  = '' . chr(65+$itemInd) . '.';
            $this->category = $item->AudItmCategory;
            $this->bullets = $this->foundIn = [];
            if ($itemID > 0) {
                $chk = KGAuditItemBullets::where('AudItmBltItemID', $itemID)
                    ->orderBy('AudItmBltOrder', 'asc')
                    ->get();
                if ($chk->isNotEmpty()) {
                    foreach ($chk as $bullet) {
                        $this->bullets[] = $bullet->AudItmBltDetails;
                    }
                }
                $chk = KGAuditItemCompliance::where('AudItmCmpItemID', $itemID)
                    ->get();
                if ($chk->isNotEmpty()) {
                    foreach ($chk as $found) {
                        $this->foundIn[] = $found->AudItmCmpFoundIn;
                    }
                }
            }
        }
    }
    
    public function getCatName()
    {
        return $GLOBALS["SL"]->def->getVal('TCC Standards Audit Item Categories', $this->category);
    }
    
    public function getFoundIns()
    {
        $ret = '';
        if (sizeof($this->foundIn) > 0) {
            foreach ($this->foundIn as $f => $found) {
                $ret .= (($f > 0) ? ', ' : '') 
                    . $GLOBALS["SL"]->def->getVal('TCC Standards Audit Compliance Found', $found);
            }
        }
        return $ret;
    }
    
    public function addCsvLine($cols = [])
    {
        if (isset($cols[1])) {
            $this->name = $cols[1];
        }
        if (isset($cols[2])) {
            $this->addCheckBullets($cols[2]);
        }
        $this->logCats($cols, 3);
        return true;
    }
    
    public function addBullet($cols = [])
    {
        if (strpos($cols[0], '•') !== false) {
            $this->addCheckBullets($cols[0]);
            $this->logCats($cols, 1);
        } elseif (strpos($cols[1], '•') !== false) {
            $this->addCheckBullets($cols[1]);
            $this->logCats($cols, 2);
        }
        return true;
    }
    
    protected function logCats($cols = [], $pos = 1)
    {
        if (isset($cols[$pos]) && trim($cols[$pos]) != '') {
            $this->category = trim($cols[$pos]);
        }
        if (isset($cols[(1+$pos)]) && trim($cols[(1+$pos)]) != '') {
            $this->foundIn = $GLOBALS["SL"]->mexplode('/', str_replace("\n", "", $cols[(1+$pos)]));
            if (sizeof($this->foundIn) > 0) {
                foreach ($this->foundIn as $i => $found) {
                    if (trim($found) != '') {
                        $this->foundIn[$i] = trim($found);
                    }
                }
            }
        }
        return true;
    }
    
    public function addCheckBullets($str = '')
    {
        $new = $GLOBALS["SL"]->mexplode('•', $str);
        if (sizeof($new) > 0) {
            foreach ($new as $i => $b) {
                if (trim($b) != '') {
                    $newStr = trim(str_replace('•', '', $b));
                    if (!in_array($newStr, $this->bullets)) {
                        $this->bullets[] = $newStr;
                    }
                }
            }
        }
        return true;
    }
}

// IMPORT PROCESS - MAYBE ONE-TIME
class AuditImport
{
    public $doms          = [];
    public $hadFirstLine  = false;
    public $currentDomain = '';
    protected $curr       = -1;
    
    public function addLine($line = '')
    {
        if ($line == '') {
            return false;
        }
        $cols = explode(',', $line);
        if (sizeof($cols) > 0) {
            foreach ($cols as $j => $cell) {
                $cols[$j] = str_replace(';|;', ',', trim($cell));
            }
            $depth = $this->getAuditImportLineDepth($cols);
            if ($depth == 0) {
                $this->curr++;
                $this->doms[] = new AuditDomain();
                $this->doms[$this->curr]->addCsvLine($cols);
            } elseif ($depth == 1) {
                $this->doms[$this->curr]->addSection($cols);
            } elseif ($depth == 2) {
                $this->doms[$this->curr]->addSubSection($cols);
            } elseif ($depth == 3) {
                $this->doms[$this->curr]->addItem($cols);
            }
        }
        return true;
    }
    
    public function runDatabaseImport()
    {
        $sectCnt = 0;
        if (sizeof($this->doms) > 0) {
            foreach ($this->doms as $d => $dom) {
                $domDefID = $GLOBALS["SL"]->def->getID('TCC Standards Audit Domains', $dom->name);
                if (sizeof($dom->sections) > 0) {
                    foreach ($dom->sections as $s => $sect) {
                        $sectRow = new KGAuditSect;
                        $sectRow->AudSecCertificationID = 1;
                        $sectRow->AudSecOrder           = $sectCnt;
                        $sectRow->AudSecName            = $sect->name;
                        $sectRow->save();
                        $sectCnt++;
                        $subCnt = 0;
                        if (sizeof($sect->subs) > 0) {
                            foreach ($sect->subs as $s => $sub) {
                                $subRow = new KGAuditSectSub;
                                $subRow->AudSecSubSectionID = $sectRow->AudSecID;
                                $subRow->AudSecSubOrder     = $subCnt;
                                $subRow->AudSecSubName      = $sub->name;
                                $subRow->AudSecSubDomain    = $domDefID;
                                $subRow->save();
                                $subCnt++;
                                if (sizeof($sub->items) > 0) {
                                    foreach ($sub->items as $i => $item) {
                                        $itemRow = new KGAuditItems;
                                        $itemRow->AudItmSubSectionID = $subRow->AudSecSubID;
                                        $itemRow->AudItmOrder        = $i;
                                        $itemRow->AudItmStandard     = $item->name;
                                        $itemRow->AudItmCategory     
                                            = $GLOBALS["SL"]->def->getID('TCC Standards Audit Item Categories', $item->category);
                                        $itemRow->save();
                                        if (sizeof($item->bullets) > 0) {
                                            foreach ($item->bullets as $b => $bullet) {
                                                $bulRow = new KGAuditItemBullets;
                                                $bulRow->AudItmBltItemID  = $itemRow->AudItmID;
                                                $bulRow->AudItmBltOrder   = $b;
                                                $bulRow->AudItmBltDetails = $bullet;
                                                $bulRow->save();
                                            }
                                        }
                                        if (sizeof($item->foundIn) > 0) {
                                            foreach ($item->foundIn as $f => $found) {
                                                $foundRow = new KGAuditItemCompliance;
                                                $foundRow->AudItmCmpItemID  = $itemRow->AudItmID;
                                                $foundRow->AudItmCmpFoundIn 
                                                    = $GLOBALS["SL"]->def->getID('TCC Standards Audit Compliance Found', $found);
                                                $foundRow->save();
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
            $this->copyAuditSectToCertSect(1);
        }
        return true;
    }
    
    public function copyAuditSectToCertSect($certID = 0)
    {
        if ($certID > 0) {
            KGCertSections::where('CrtSctCertificationID', $certID)
                ->delete();
            $chk = KGAuditSect::where('AudSecCertificationID', $certID)
                ->orderBy('AudSecOrder', 'asc')
                ->get();
            if ($chk->isNotEmpty()) {
                foreach ($chk as $i => $sect) {
                    $row = new KGCertSections;
                    $row->CrtSctCertificationID = $certID;
                    $row->CrtSctSectionID       = $sect->AudSecID;
                    $row->CrtSctOrder           = $sect->AudSecOrder;
                    $row->save();
                }
            }
        }
        return true;
    }
    
    protected function getAuditImportLineDepth($cols = [])
    {
        if ($cols[0] == '' && $cols[1] != '') {
            return 0;
        }
        if ($cols[0] != '') {
            if (strpos($cols[0], '•') !== false || strpos($cols[1], '•') !== false) {
                return -1;
            }
            $dot1 = strpos($cols[0], '.');
            if ($dot1 > 0) {
                $dot2 = strpos($cols[0], '.', $dot1+1);
                if ($dot2 > 0) {
                    $dot3 = strpos($cols[0], '.', $dot2+1);
                    if ($dot3 > 0) {
                        return 3;
                    }
                    return 2;
                }
                return 1;
            } elseif (preg_match('/^[0-9]+$/', $cols[0])) {
                return 1;
            }
        }
        return -2;
    }
    
}
