<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use SoftDeletes;

    //declare table
    public $table = 'transaction';

    //declare field must type date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'upated_at',
        'deleted_at',
    ];

    //declare fillable
    protected $fillable = [
        'appointment_id',
        'fee_doctor',
        'fee_specialist',
        'fee_hospital',
        'sub_total',
        'vat',
        'total',
        'created_at',
        'upated_at',
        'deleted_at',
    ];

    public function appointment()
    {
        // 2 parameters (path modal, field foreign key, field primary key from table has many / has one)
        return $this-> belongsTo('App\Models\Operational\Appointment','appointment_id', 'id');
    }
}
