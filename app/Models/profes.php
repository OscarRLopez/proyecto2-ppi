<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class profes
 * @package App\Models
 * @version November 7, 2020, 1:54 am UTC
 *
 * @property string $Name
 * @property string $Email
 * @property integer $Score
 */
class profes extends Model
{
    //use SoftDeletes;

    public $table = 'profes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Name',
        'Email',
        'Score'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Name' => 'string',
        'Email' => 'string',
        'Score' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Name' => 'required|string|max:255',
        'Email' => 'required|string|max:255',
        'Score' => 'required|integer'
    ];

    
}
