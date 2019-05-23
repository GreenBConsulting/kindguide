<?php namespace App\Models;
// generated from /resources/views/vendor/survloop/admin/db/export-laravel-model-gen.blade.php

use Illuminate\Database\Eloquent\Model;

class KGTCCAuditItems extends Model
{
    protected $table      = 'KG_TCCAuditItems';
    protected $primaryKey = 'TAudItmID';
    public $timestamps    = true;
    protected $fillable   = 
    [    
		'TAudItmAuditID', 
		'TAudItmItemID', 
		'TAudItmStatus', 
		'TAudItmNotes', 
    ];
    
    // END SurvLoop auto-generated portion of Model
    
}
