<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Foundation\Auth\User as Authenticatable;

class Folder extends Eloquent
{
    use Notifiable;
    protected $table ='folders';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','user_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    //tabel tujuan
    public function file(){
        return $this->hasMany('File','activitie_id');
    }
    
//tabel primary
    public function user(){
        return $this->belongsTo('User','user_id');
    }
    public function admin(){
        return $this->belongsTo('Admin','admin_id');
    }
    public function activitie(){
        return $this->belongsTo('Activitie','activitie_id');
    }
}
