<?php namespace App\Models;
// generated from /resources/views/vendor/survloop/admin/db/export-laravel-model-gen.blade.php

use Illuminate\Database\Eloquent\Model;

class KGConsumerRoles extends Model
{
    protected $table      = 'KG_ConsumerRoles';
    protected $primaryKey = 'ConRolsID';
    public $timestamps    = true;
    protected $fillable   = 
    [    
		'ConRolsConID', 
		'ConRolsRole', 
    ];
    
    // END SurvLoop auto-generated portion of Model
    
}
