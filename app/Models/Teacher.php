<?php

namespace App\Models;

use App\Models\Agenda;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Teacher extends Model
{
   protected $table="teacher";
   protected $primaryKey="id";
   protected $fillable=['id','teacher'];

   public function agenda(){
    return $this->hasMany(Agenda::class);
}

}
