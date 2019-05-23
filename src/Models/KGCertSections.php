<?php namespace App\Models;
// generated from /resources/views/vendor/survloop/admin/db/export-laravel-model-gen.blade.php

use Illuminate\Database\Eloquent\Model;

class KGCertSections extends Model
{
    protected $table      = 'KG_CertSections';
    protected $primaryKey = 'CrtSctID';
    public $timestamps    = true;
    protected $fillable   = 
    [    
		'CrtSctCertificationID', 
		'CrtSctSectionID', 
		'CrtSctOrder', 
    ];
    
    // END SurvLoop auto-generated portion of Model
    
}
