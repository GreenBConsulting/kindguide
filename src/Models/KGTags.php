<?php namespace App\Models;
// generated from /resources/views/vendor/survloop/admin/db/export-laravel-model-gen.blade.php

use Illuminate\Database\Eloquent\Model;

class KGTags extends Model
{
    protected $table      = 'KG_Tags';
    protected $primaryKey = 'TagID';
    public $timestamps    = true;
    protected $fillable   = 
    [    
		'TagItemID', 
		'TagType', 
		'TagName', 
    ];
    
    // END SurvLoop auto-generated portion of Model
    
}
