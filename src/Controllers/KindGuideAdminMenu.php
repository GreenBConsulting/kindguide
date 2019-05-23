<?php
/**
  * CannabisScoreAdminMenu is responsible for building the menu inside the dashboard area for all user types.
  *
  * Open Police Complaints
  * @package  flexyourrights/openpolice
  * @author  Morgan Lesko <wikiworldorder@protonmail.com>
  * @since 0.0
  */
namespace KindGuide\Controllers;

use SurvLoop\Controllers\Admin\AdminMenu;

class KindGuideAdminMenu extends AdminMenu
{
    public function loadAdmMenu($currUser = null, $currPage = '')
    {
        $this->currUser = $currUser;
        $this->currPage = $currPage;
        $treeMenu = [$this->admMenuLnk('/dashboard', 'Dashboard', '<i class="fa fa-home" aria-hidden="true"></i>')];
        if ($this->currUser->hasRole('administrator|staff|databaser|brancher|partner')) {
            $treeMenu[] = $this->admMenuLnk('/tcc-sustainability-standards', 'TCC Audit', 
                '<i class="fa fa-check-square-o" aria-hidden="true"></i>');
            if (!$this->currUser->hasRole('volunteer|partner')) {
                return $this->addAdmMenuBasics($treeMenu);
            }
        }
        return $treeMenu;
    }
    
}