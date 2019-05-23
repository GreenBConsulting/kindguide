<?php namespace App\Models;
// generated from /resources/views/vendor/survloop/admin/db/export-laravel-model-gen.blade.php

use Illuminate\Database\Eloquent\Model;

class KGAuditItems extends Model
{
    protected $table      = 'KG_AuditItems';
    protected $primaryKey = 'AudItmID';
    public $timestamps    = true;
    protected $fillable   = 
    [    
		'AudItmVersionAB', 
		'AudItmSubSectionID', 
		'AudItmSubmissionProgress', 
		'AudItmIPaddy', 
		'AudItmTreeVersion', 
		'AudItmUniqueStr', 
		'AudItmUserID', 
		'AudItmIsMobile', 
		'AudItmOrder', 
		'AudItmStandard', 
		'AudItmCategory', 
    ];
    
    // END SurvLoop auto-generated portion of Model
    
}
