<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'direccion',
        'telefono'
    ];
    protected $hidden   = ["created_at", "updated_at"];
    public $table = 'empleados';

    public function usuarios(){
        return $this->belongsTo(Usuarios::class,'id','fk_empleado');
    }
    
}
