<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $titulo
 * @property $precio
 * @property $desarrollador
 * @property $descripcion
 * @property $fecha_lanzamiento
 * @property $plataforma
 * @property $genero
 * @property $valoracion
 * @property $clave
 * @property $imagen
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'titulo' => 'required',
		'precio' => 'required',
		'desarrollador' => 'required',
		'descripcion' => 'required',
		'fecha_lanzamiento' => 'required',
		'plataforma' => 'required',
		'genero' => 'required',
		'valoracion' => 'required',
		'clave' => 'required',
		'imagen' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['titulo','precio','desarrollador','descripcion','fecha_lanzamiento','plataforma','genero','valoracion','clave','imagen'];



}
