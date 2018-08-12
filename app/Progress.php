<?php

namespace Sistac;

use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    
    //

     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'progress';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','idTarea','porcentaje','comentario','fechComentario'];

    public $timestamps = true;
    /**
     * The attributes excluded from the model's JSON form.
     *
     // @var array
     */
   // protected $hidden = ['password', 'remember_token'];

}
