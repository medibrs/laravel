<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;
    protected $table='classes';
    protected $primaryKey='idc';
    protected $fillable=['libelle', 'nombreMax'];

    public function formation(){
        return $this->belongsTo(Formation::class,'idf','idf');

    }

    public function etudiants(){
        return $this->hasMany(Etudiant::class, 'idclasse','idc');
    }
}
