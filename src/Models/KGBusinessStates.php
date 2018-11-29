<?php namespace App\Models;
// generated from /resources/views/vendor/survloop/admin/db/export-laravel-model-gen.blade.php

use Illuminate\Database\Eloquent\Model;

class KGBusinessStates extends Model
{
    protected $table      = 'KG_BusinessStates';
    protected $primaryKey = 'BusStatID';
    public $timestamps    = true;
    protected $fillable   = 
    [    
		'BusStatBusID', 
		'BusStatState', 
    ];
    
    // END SurvLoop auto-generated portion of Model
    
}
