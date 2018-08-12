<?php

namespace Sistac;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    //

     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'activity';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','idPersonalAsignado','idAsignador','tarea','ticketReferencia','fechaInicioTarea'];

    public $timestamps = true;
    /**
     * The attributes excluded from the model's JSON form.
     *
     // @var array
     */
   // protected $hidden = ['password', 'remember_token'];
}

