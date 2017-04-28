<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Hobbie;
class Pessoa extends Model
{

	protected $table = 'pessoas';
    protected $fillable = ['name','email','cidade','estado'];

    public $timestamps = false;


    public function hobbies(){

    	return $this->hasMany(Hobbie::class,'pessoa_id');
    }
}
