<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    protected $table="etudiants";
    protected $primaryKey="codeE";


    protected $fillable=['codeE','nom' , 'prenom' , 'adresse', 'dateNaissance'];
    public function classe(){
        return $this->belongsTo(Classe::class,'idclasse','idc');
    }
    public function avis(){
        return $this->belongsToMany(Formation::class, 'avis' , 'idE','idf')
             ->withPivot('points');
    }
    public function formations(){
        return $this->belongsToMany(Formation::class, 'avis', 'idE','idf')
             ->withPivot('points');
    }
    
}
