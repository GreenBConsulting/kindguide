<?php namespace App\Models;
// generated from /resources/views/vendor/survloop/admin/db/export-laravel-model-gen.blade.php

use Illuminate\Database\Eloquent\Model;

class KGCertifications extends Model
{
    protected $table      = 'KG_Certifications';
    protected $primaryKey = 'CertID';
    public $timestamps    = true;
    protected $fillable   = 
    [    
		'CertVersionAB', 
		'CertName', 
		'CertSubmissionProgress', 
		'CertIPaddy', 
		'CertTreeVersion', 
		'CertUniqueStr', 
		'CertUserID', 
		'CertIsMobile', 
		'CertImage', 
    ];
    
    // END SurvLoop auto-generated portion of Model
    
}
