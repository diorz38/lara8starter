<?php

namespace Modules\Main\Entities;

use Illuminate\Database\Eloquent\Model;

class DataKeluarga extends Model
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
    protected $table = 'data_keluarga';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'nkk';

    public $incrementing = false;

    protected $keyType = 'string';


    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nkk',
        'nik_kepala',
        'tgl_daftar',
        'kelas_sosial',
        'tgl_cetak_kk',
        'alamat',
        'sls_id'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['tgl_daftar','tgl_cetak_kk'];

    /**
     * Get the user for this model.
     *
     * @return App\Models\User
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
    /**
     * Get the user for this model.
     *
     * @return \Modules\Main\Entities\DataPenduduk
     */
    public function kepala()
    {
        return $this->belongsTo('Modules\Main\Entities\DataPenduduk','nik_kepala','nik');
    }

    /**
     * Get the comments for the User.
     */
    public function anggota()
    {
        return $this->hasMany('Modules\Main\Entities\DataPenduduk','nkk','nkk');
    }
}
