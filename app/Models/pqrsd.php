<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pqrsd
 * 
 * @property int $idPqrsd
 * @property string $Motivo
 * @property string $Titulo
 * @property string $Texto_pqrst
 * @property string $E_mail
 * @property string $Estado
 * @property string $Fecha_registro
 * @property string|null $Fecha_modificacion
 * @property int|null $Contacto
 * 
 * @property Contacto|null $contacto
 *
 * @package App\Models
 */
class Pqrsd extends Model
{
	protected $table = 'pqrsd';
	protected $primaryKey = 'idPqrsd';
	public $timestamps = false;

	protected $casts = [
		'Contacto' => 'int'
	];

	protected $fillable = [
		'Motivo',
		'Titulo',
		'Texto_pqrst',
		'E_mail',
		'Estado',
		'Fecha_registro',
		'Fecha_modificacion',
		'Contacto'
	];

	public function contacto()
	{
		return $this->belongsTo(Contacto::class, 'Contacto');
	}
}
