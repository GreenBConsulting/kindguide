<?php namespace App\Models;
// generated from /resources/views/vendor/survloop/admin/db/export-laravel-model-gen.blade.php

use Illuminate\Database\Eloquent\Model;

class KGConsumerPurchase extends Model
{
    protected $table      = 'KG_ConsumerPurchase';
    protected $primaryKey = 'ConPurchID';
    public $timestamps    = true;
    protected $fillable   = 
    [    
		'ConPurchConID', 
		'ConPurchWhatKinds', 
    ];
    
    // END SurvLoop auto-generated portion of Model
    
}
