<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
    use SoftDeletes;

    //declare table
    public $table = 'doctor';

    //declare field must type date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'upated_at',
        'deleted_at',
    ];

    //declare fillable
    protected $fillable = [
        'specialist_id',
        'name',
        'fee',
        'photo',
        'created_at',
        'upated_at',
        'deleted_at',
    ];

     //one to many
     public function specialist()
     {
         // 2 parameters (path modal, field foreign key, field primary key from table has many / has one)
         return $this-> belongsTo('App\Models\MasterData\Specialist','specialist_id', 'id');
     }

      //one to many
      public function appointment()
      {
          // 2 parameters (path modal, field foreign key, field primary key from table has many / has one)
          return $this-> hasMany('App\Models\Operational\Appointment','doctor_id');
      }
}
