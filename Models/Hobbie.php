<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hobbie extends Model
{
    protected $fillable = [
    			'pessoa_id', 
    			'hobbie'];

    public $timestamps = false;

      public function pessoas(){


	   	return $this->belongsTo(Pessoa::class,'pessoa_id');
    }
}
