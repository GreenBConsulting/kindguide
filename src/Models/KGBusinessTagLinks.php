<?php namespace App\Models;
// generated from /resources/views/vendor/survloop/admin/db/export-laravel-model-gen.blade.php

use Illuminate\Database\Eloquent\Model;

class KGBusinessTagLinks extends Model
{
    protected $table      = 'KG_BusinessTagLinks';
    protected $primaryKey = 'BusTagLnkID';
    public $timestamps    = true;
    protected $fillable   = 
    [    
		'BusTagLnkBusID', 
		'BusTagLnkTagID', 
    ];
    
    // END SurvLoop auto-generated portion of Model
    
}
