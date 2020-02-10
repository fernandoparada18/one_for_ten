<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Patrol
 * @package App\Models
 * @version February 10, 2020, 12:41 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection patrols
 * @property string name
 * @property string id_card
 * @property string address
 * @property string phone
 * @property string email
 */
class Patrol extends Model
{
    use SoftDeletes;

    public $table = 'patrols';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'id_card',
        'address',
        'phone',
        'email',
        'chief_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'chief_id' => 'integer',
        'name' => 'string',
        'id_card' => 'string',
        'address' => 'string',
        'phone' => 'string',
        'email' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'id_card' => 'required',
        'address' => 'required',
        'phone' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function chief()
    {
        return $this->belongsTo(\App\Models\Chief::class);
    }
}
