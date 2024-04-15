<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Persona
 * 
 * @property int $id
 * @property string $identificacion
 * @property string $nombres
 * @property string $apellidos
 * @property string $estado
 * @property string $created_at
 * @property string|null $updated_at
 * 
 * @property Collection|Proveedore[] $proveedores
 * @property Collection|Usuario[] $usuarios
 *
 * @package App\Models
 */
class Persona extends Model
{
	protected $table = 'personas';
	protected $primaryKey = 'id';
	public $timestamps = false;

	protected $fillable = [
        'identificacion',
		'nombres',
		'apellidos',
		'estado',
		'created_at',
		'updated_at'
    ];

	public function proveedores()
	{
		return $this->hasMany(Proveedore::class, 'persona');
	}

	public function usuarios()
	{
		return $this->hasMany(Usuario::class, 'persona_id');
	}
}
