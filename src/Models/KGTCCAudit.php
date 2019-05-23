<?php namespace App\Models;
// generated from /resources/views/vendor/survloop/admin/db/export-laravel-model-gen.blade.php

use Illuminate\Database\Eloquent\Model;

class KGTCCAudit extends Model
{
    protected $table      = 'KG_TCCAudit';
    protected $primaryKey = 'TccStdAudID';
    public $timestamps    = true;
    protected $fillable   = 
    [    
		'TccStdAudCertificationID', 
		'TccStdAudUserID', 
		'TccStdAudFarmName', 
		'TccStdAudSubmissionProgress', 
		'TccStdAudTreeVersion', 
		'TccStdAudVersionAB', 
		'TccStdAudIsMobile', 
		'TccStdAudUniqueStr', 
		'TccStdAudIPaddy', 
    ];
    
    // END SurvLoop auto-generated portion of Model
    
}
