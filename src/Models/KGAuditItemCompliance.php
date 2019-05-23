<?php namespace App\Models;
// generated from /resources/views/vendor/survloop/admin/db/export-laravel-model-gen.blade.php

use Illuminate\Database\Eloquent\Model;

class KGAuditItemCompliance extends Model
{
    protected $table      = 'KG_AuditItemCompliance';
    protected $primaryKey = 'AudItmCmpID';
    public $timestamps    = true;
    protected $fillable   = 
    [    
		'AudItmCmpItemID', 
		'AudItmCmpFoundIn', 
    ];
    
    // END SurvLoop auto-generated portion of Model
    
}
