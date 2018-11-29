<?php namespace App\Models;
// generated from /resources/views/vendor/survloop/admin/db/export-laravel-model-gen.blade.php

use Illuminate\Database\Eloquent\Model;

class KGBook extends Model
{
    protected $table      = 'KG_Book';
    protected $primaryKey = 'BookID';
    public $timestamps    = true;
    protected $fillable   = 
    [    
		'BookVersionAB', 
		'BookName', 
		'BookSubmissionProgress', 
		'BookIPaddy', 
		'BookTreeVersion', 
		'BookUniqueStr', 
		'BookUserID', 
		'BookIsMobile', 
    ];
    
    // END SurvLoop auto-generated portion of Model
    
}
