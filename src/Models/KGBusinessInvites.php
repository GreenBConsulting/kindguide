<?php namespace App\Models;
// generated from /resources/views/vendor/survloop/admin/db/export-laravel-model-gen.blade.php

use Illuminate\Database\Eloquent\Model;

class KGBusinessInvites extends Model
{
    protected $table      = 'KG_BusinessInvites';
    protected $primaryKey = 'BusInvID';
    public $timestamps    = true;
    protected $fillable   = 
    [    
		'BusInvBusinessID', 
		'BusInvUserID', 
		'BusInvName', 
		'BusInvLocation', 
		'BusInvIsCustomer', 
		'BusInvContact', 
		'BusInvNotes', 
		'BusInvSubmissionProgress', 
		'BusInvIPaddy', 
		'BusInvVersionAB', 
		'BusInvTreeVersion', 
		'BusInvUniqueStr', 
		'BusInvIsMobile', 
    ];
    
    // END SurvLoop auto-generated portion of Model
    
}
