<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avis extends Model
{
    use HasFactory;
    protected $primaryKey = null;
    public $incrementing = false;
    
    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class, 'idE','codeE');
    }
    
    public function formation()
    {
        return $this->belongsTo(Formation::class, 'idf');
    }
}
