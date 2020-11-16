<?php

namespace Modules\Main\Entities;

use Illuminate\Database\Eloquent\Model;

class DataSls extends Model
{

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'data_sls';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $keyType = 'string';


    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'rw',
        'rt',
        'dusun'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];

    /**
     * Get the user for this model.
     *
     * @return \Modules\Main\Entities\CalonPemilih
     */
    public function pemilih()
    {
        return $this->hasMany('Modules\Main\Entities\DataPenduduk','sls_id');
    }
    public function keluarga()
    {
        return $this->hasMany('Modules\Main\Entities\DataKeluarga','sls_id');
    }

}
