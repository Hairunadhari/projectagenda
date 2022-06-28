<?php

namespace App\Models;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Agenda extends Model
{
    protected $table="agendas";
    protected $primaryKey="id";
    protected $fillable=['id','teacher_id','matapelajaran','materipelajaran','jenispembelajaran','linkpembelajaran','absensi','foto','kelas','keterangan','mulai','selesai'];

    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }

}
