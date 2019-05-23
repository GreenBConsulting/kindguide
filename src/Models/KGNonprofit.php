<?php namespace App\Models;
// generated from /resources/views/vendor/survloop/admin/db/export-laravel-model-gen.blade.php

use Illuminate\Database\Eloquent\Model;

class KGNonprofit extends Model
{
    protected $table      = 'KG_Nonprofit';
    protected $primaryKey = 'NonID';
    public $timestamps    = true;
    protected $fillable   = 
    [    
		'NonStatus', 
		'NonUserID', 
		'NonName', 
		'NonWebsite', 
		'NonTaxStatus', 
		'NonIsEmployee', 
		'NonEmail', 
		'NonVersionAB', 
		'NonSubmissionProgress', 
		'NonIPaddy', 
		'NonTreeVersion', 
		'NonUniqueStr', 
		'NonIsMobile', 
    ];
    
    // END SurvLoop auto-generated portion of Model
    
}
