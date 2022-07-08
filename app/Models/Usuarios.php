<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'email',
        'password',
        "fk_empleado"
    ];
    protected $hidden   = ["created_at", "updated_at"];

    public function empleado(){
        return $this->belongsTo(Empleado::class,'fk_empleado','id');
    }
    
}
