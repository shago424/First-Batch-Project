<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Principal extends Model
{
    protected $table ="principals";

    public function user(){
    	return $this->belongsTo(User::class, 'created_by' ,'id');
    }
}
