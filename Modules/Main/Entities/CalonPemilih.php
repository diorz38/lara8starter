<?php

namespace Modules\Main\Entities;

use Illuminate\Database\Eloquent\Model;

class CalonPemilih extends Model
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
    protected $table = 'daftar_penduduk';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'no_tps',
        'no_dps',
        'nama',
        'jkel',
        'tempat_lahir',
        'tgl_lahir',
        'status_kawin',
        'nik',
        'dusun',
        'rt',
        'rw',
        'desa',
        'syarat',
        'status'
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
    protected $casts = ['syarat', 'status'];

        /**
     * Set the syarat.
     *
     * @param  string  $value
     * @return void
     */
    public function setSyaratAttribute($value)
    {
        $this->attributes['syarat'] = json_encode($value);
    }

    /**
     * Get syarat in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getSyaratAttribute($value)
    {
        return json_decode($value) ?: [];
    }
    /**
     * Get the user for this model.
     *
     * @return App\Models\User
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }

}
