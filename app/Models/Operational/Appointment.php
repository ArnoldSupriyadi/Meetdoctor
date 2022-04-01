<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use function PHPSTORM_META\map;

class Appointment extends Model
{
    use SoftDeletes;

    //declare table
    public $table = 'appointment';

    //declare field must type date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'upated_at',
        'deleted_at',
    ];

    //declare fillable
    protected $fillable = [
        'doctor_id',
        'user_id',
        'consultation_id',
        'level',
        'date',
        'time',
        'status',
        'created_at',
        'upated_at',
        'deleted_at',
    ];

    public function doctor()
    {
        // 2 parameters (path modal, field foreign key, field primary key from table has many / has one)
        return $this-> belongsTo('App\Models\Operational\Doctor','doctor_id', 'id');
    }

    public function consultation()
    {
        // 2 parameters (path modal, field foreign key, field primary key from table has many / has one)
        return $this-> belongsTo('App\Models\MasterData\Consultation','consultation_id', 'id');
    }

    public function user()
    {
        // 2 parameters (path modal, field foreign key, field primary key from table has many / has one)
        return $this-> belongsTo('App\Models\User','user_id', 'id');
    }

    public function transaction()
    {
        // 2 parameters (path modal, field foreign key)
        return $this-> hasOne('App\Models\Operational\Transaction','appointment_id');
    }
}
