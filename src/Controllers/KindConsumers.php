<?php
namespace KindGuide\Controllers;

//use App\Models\KGCertifications;
use KindGuide\Controllers\KindUtils;

class KindConsumers extends KindUtils
{   
    protected function printSocialLinks($share)
    {
        return '<div class="row"><div class="col-4 taC">' . $GLOBALS["SL"]->twitShareBtn($share[0], $share[1], 
            '#StillADrugWar #StillAMovement', $share[2])
            . '</div><div class="col-4 taC">' . $GLOBALS["SL"]->faceShareBtn($share[0], $share[1], $share[2])
            . '</div><div class="col-4 taC">' . $GLOBALS["SL"]->linkedinShareBtn($share[0], $share[1], $share[2])
            . '</div></div>';
    }
    
    protected function printConsumerSurveySocialLinks()
    {
        $share = [
            'https://app.thekind.guide/start/consumers',
            '"I\'m Kind, are you?!" Help #KeepItGreen by completing this quick cannabis consumer survey from '
                . '@KindGuide420!',
            'btn btn-xl btn-primary'
            ];
        return $this->printSocialLinks($share);
    }
    
    protected function printNonprofitSocialLinks()
    {
        $share = [
            'https://app.thekind.guide/cannabis-community-nonprofit-directory',
            '"I\'m Kind, are you?!" Help #KeepItGreen by adding to a nationwide database of Every. Single. Cannabis '
            . 'affiliated nonprofit or community support organization. @KindGuide420!',
            'btn btn-sm btn-secondary w100'
            ];
        return $this->printSocialLinks($share);
    }
    
}
