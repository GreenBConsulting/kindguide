<?php namespace App\Models;
// generated from /resources/views/vendor/survloop/admin/db/export-laravel-model-gen.blade.php

use Illuminate\Database\Eloquent\Model;

class KGAuditItemBullets extends Model
{
    protected $table      = 'KG_AuditItemBullets';
    protected $primaryKey = 'AudItmBltID';
    public $timestamps    = true;
    protected $fillable   = 
    [    
		'AudItmBltItemID', 
		'AudItmBltDetails', 
		'AudItmBltOrder', 
    ];
    
    // END SurvLoop auto-generated portion of Model
    
}
