<?php
namespace KindGuide\Controllers;

use DB;
use Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

use App\Models\User;

use KindGuide\Controllers\KindGuideReport;

use SurvLoop\Controllers\SurvFormTree;

class KindGuide extends SurvFormTree
{
    
    public $classExtension         = 'KindGuide';
    public $treeID                 = 1;
    
    // Initializing a bunch of things which are not [yet] automatically determined by the software
    protected function initExtra(Request $request)
    {
        // Establishing Main Navigation Organization, with Node ID# and Section Titles
        $this->majorSections = [];
        return true;
    }
        
    // Initializing a bunch of things which are not [yet] automatically determined by the software
    protected function loadExtra()
    {
        return true;
    }
    
    protected function customNodePrint($nID = -3, $tmpSubTier = [], $nIDtxt = '', $nSffx = '', $currVisib = 1)
    {
        $ret = '';
        if ($nID == 262) {
            if (isset($this->v["tokenUser"]) && $this->v["tokenUser"]) {
                $ret = $this->processTokenAccess();
            } else {
                $ret = '<div class="w100" style="padding: 20px;"><center>' 
                    . $this->getMfaForm('(sent to you by email)', 'Start Survey') . '</center></div>';
            }
        } elseif ($nID == 129) {
            if (isset($this->sessData->dataSets["Business"]) && sizeof($this->sessData->dataSets["Business"]) > 0
                && isset($this->sessData->dataSets["Business"][0]->BusStatus)) {
                $this->sessData->dataSets["Business"][0]->BusStatus 
                    = $GLOBALS["SL"]->def->getID('Business Survey Status', 'Complete');
                $this->sessData->dataSets["Business"][0]->save();
            }
        } elseif ($nID == 348) {
            return $this->printConsumerSurveySocialLinks();
        } elseif ($nID == 349) {
//            if (isset($this->sessData->dataSets["BusinessInvites"]) && !isset($this->sessData->dataSets["BusinessInvites"][0]->
        }
        return $ret;
    }
    
    
    protected function printConsumerSurveySocialLinks()
    {
        $share = [
            'https://app.thekind.guide/start/consumers',
            '"I\'m Kind, are you?!" Help #KeepItGreen by completing this quick cannabis consumer survey from '
                . '@KindGuide420!',
            'btn btn-xl btn-primary'
            ];
        return '<div class="row"><div class="col-4 taC">' . $GLOBALS["SL"]->twitShareBtn($share[0], $share[1], 
            '#StillADrugWar #StillAMovement', $share[2])
            . '</div><div class="col-4 taC">' . $GLOBALS["SL"]->faceShareBtn($share[0], $share[1], $share[2])
            . '</div><div class="col-4 taC">' . $GLOBALS["SL"]->linkedinShareBtn($share[0], $share[1], $share[2])
            . '</div></div>';
    }
    
}
