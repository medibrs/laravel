<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    protected $table="formations";
    protected $primarykey="idf";
    protected $fillable=['idf','Titre', 'NbreHeure'];

    public function classes(){
       return $this->hasMany(Classe::class,'idformation','idf');
    }
    
    public function avis(){
        return $this->belongsToMany(Etudiant::class, 'avis', 'idE' , 'idf')
        ->withPivot('points');
    }
    public function etudiants()
    {
        return $this->belongsToMany(Etudiant::class, 'avis', 'idf', 'idE')
            ->withPivot('points');
    }

    public function pointsTotal()
    {
        return Avis::where('idf', $this->idf)->sum('points');
    }
    
}


