<?php
namespace KindGuide\Controllers;

use App\Models\SLEmails;
use KindGuide\Controllers\KindConsumers;

class KindBusinesses extends KindConsumers
{
    protected function ajaxSendBusTok(Request $request)
    {
        $this->survLoopInit($request);
        $currEma = SLEmails::find(1);
        if ($currEma && isset($currEma->EmailSubject) && $request->has('n261fld') && trim($request->n261fld) != '') {
            $emaSubj = $this->emailRecordSwap($currEma->EmailSubject);
            $emaCont = $this->emailRecordSwap($this->sendEmailBlurbs($currEma->EmailBody));
            $emaTo = [
                [
                    $request->n261fld,
                    ''
                ]
            ];
            $this->sendEmail($emaCont, $emaSubj, $emaTo, [], [], $this->postEmailFrom());
            $this->logEmailSent($emaCont, $emaSubj, $emaTo, 1, 16, $this->coreID, $this->v["uID"]);
        }
        return '<script type="text/javascript"> setTimeout("window.parent.document.getElementById(\'emailAccessResult'
            . '\').innerHTML=\'Token Email Initiated\'", 10); </script>';
    }
    
    protected function printMfaInstruct()
    {
        if (isset($this->v["tokenUser"]) && $this->v["tokenUser"]) {
            return view('vendor.openpolice.nodes.1780-mfa-instructions', [
                "user" => $this->v["tokenUser"],
                "mfa"  => $this->processTokenAccess(false)
            ])->render();
        }
        return '';
    }
    
}
