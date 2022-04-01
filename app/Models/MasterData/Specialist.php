<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Specialist extends Model
{
    use SoftDeletes;

    //declare table
    public $table = 'specialist';

    //declare field must type date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'upated_at',
        'deleted_at',
    ];

    //declare fillable
    protected $fillable = [
        'name',
        'price',
        'created_at',
        'upated_at',
        'deleted_at',
    ];

     //one to many
     public function doctor()
     {
         // 2 parameters (path modal, field foreign key,)
         return $this-> HasMany('App\Models\Operational\Doctor','specialist_id');
     }
}
