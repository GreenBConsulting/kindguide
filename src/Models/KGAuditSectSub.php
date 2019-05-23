<?php namespace App\Models;
// generated from /resources/views/vendor/survloop/admin/db/export-laravel-model-gen.blade.php

use Illuminate\Database\Eloquent\Model;

class KGAuditSectSub extends Model
{
    protected $table      = 'KG_AuditSectSub';
    protected $primaryKey = 'AudSecSubID';
    public $timestamps    = true;
    protected $fillable   = 
    [    
		'AudSecSubSectionID', 
		'AudSecSubOrder', 
		'AudSecSubName', 
		'AudSecSubDomain', 
    ];
    
    // END SurvLoop auto-generated portion of Model
    
}
