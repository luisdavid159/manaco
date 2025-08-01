<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';
    protected $fillable = ['nombre', 'descripcion'];    
    // Puedes agregar más propiedades o métodos según sea necesario
    // Por ejemplo, si necesitas relaciones con otros modelos, puedes definirlas aquí
    // public function productos()
}
