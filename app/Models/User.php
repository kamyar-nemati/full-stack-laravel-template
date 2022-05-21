<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The connection name for the model.
     *
     * @var string|null
     */
    protected $connection = 'mysql';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The model's attributes.
     *
     * @var array
     */
    protected $attributes = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
    ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var string[]|bool
     */
    protected $guarded = [
        'id',
        'password',
        'remember_token',
        'created_at',
        'updated_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        //
    ];

    /*
    |--------------------------------------------------------------------------
    | Relationship
    |--------------------------------------------------------------------------
    |
    | You may define your model standard relationships here onwards.
    |
    */

    //

    /*
    |--------------------------------------------------------------------------
    | Custom Relationship
    |--------------------------------------------------------------------------
    |
    | You may define customized relationships for your model here onwards.
    |
    */

    //

    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    | You may define Scopes for your model here onwards.
    |
    */

    //

    /*
    |--------------------------------------------------------------------------
    | Custom Functions
    |--------------------------------------------------------------------------
    |
    | You may define customized functions for your model here onwards.
    |
    */

    //

    /*
    |--------------------------------------------------------------------------
    | Enumerates
    |--------------------------------------------------------------------------
    |
    | You may define public enumerate constants for your model here onwards.
    |
    */

    //
}
