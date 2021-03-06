<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $fillable = ['fecha_hora', 'medico_id', 'paciente_id', 'location_id','fecha_fin'];

    public function medico()
    {
        return $this->belongsTo('App\Medico');
    }

    public function paciente()
{
    return $this->belongsTo('App\Paciente');
}

    public function location()
    {
        return $this->belongsTo('App\Location');
    }
}
