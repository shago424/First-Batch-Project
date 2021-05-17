<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;
class History extends Model
{
    protected $table = "histories";

    public function user(){
    	return $this->belongsTo(User::class,'created_by', 'id');
    }
}
