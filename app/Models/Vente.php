<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vente extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'ID_AUTO';
    protected $table = 'vente';
    protected $fillable = ['DATE_VENTE', 'MONTANT_TTC', 'UserId'];
    //public $timestamps = true;

}
