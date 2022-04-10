<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PermissionRole extends Model
{
    use SoftDeletes;

    //declare table
    public $table = 'permission_role';

    //declare field must type date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'upated_at',
        'deleted_at',
    ];

    //declare fillable
    protected $fillable = [
        'permission_id',
        'role_id',
        'created_at',
        'upated_at',
        'deleted_at',
    ];

    //one to many 
    public function permission()
    {

        return $this->belongsTo('App\Models\ManagementAccess\Permission','permission_id','id');

    }

    public function role()
    {
        //3 parameter
        return $this->belongsTo('App\Models\ManagementAccess\Role','role_id','id');

    }
}
