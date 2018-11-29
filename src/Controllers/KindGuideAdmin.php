<?php
namespace KindGuide\Controllers;

use DB;
use Auth;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\SLDefinitions;

use KindGuide\Controllers\KindGuideReport;
use SurvLoop\Controllers\AdminSubsController;

class KindGuideAdmin extends AdminSubsController
{
    public $classExtension     = 'KindGuideAdmin';
    public $treeID             = 1;
    
    public function initPowerUser($uID = -3)
    {
        if (!$this->v["user"] || intVal($this->v["user"]->id) <= 0
            || !$this->v["user"]->hasRole('administrator|staff|databaser|brancher|volunteer')) {
            return redirect('/');
        }
        return [];
    }
    
    protected function initExtra(Request $request)
    {
        $this->CustReport = new KindGuideReport($request);
        
        
        return true;
    }
    
    public function loadAdmMenu()
    {
        $treeMenu = [];
        if ($this->v["user"]->hasRole('administrator|staff|databaser|brancher|volunteer')) {
            $treeMenu[] = $this->admMenuLnk('javascript:;', 'Businesses', 
                '<i class="fa fa-building-o" aria-hidden="true"></i>', 1, [
                $this->admMenuLnk('javascript:;', 'All Businesses'),
                $this->admMenuLnk('javascript:;', 'Manage Invites')
                ]);
            $treeMenu[] = $this->admMenuLnk('javascript:;', 'Consumers', 
                '<i class="fa fa-usd mL3" aria-hidden="true"></i>', 1, [
                $this->admMenuLnk('javascript:;', 'Raw Consumer Data'),
                $this->admMenuLnk('javascript:;', 'Consumer Analysis')
                ]);
            if (!$this->v["user"]->hasRole('volunteer')) return $this->addAdmMenuBasics($treeMenu);
        }
        return $treeMenu;
    }
    
}
