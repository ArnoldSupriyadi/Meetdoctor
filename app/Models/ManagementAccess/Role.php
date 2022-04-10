<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use SoftDeletes;

    //declare table
    public $table = 'role';

    //declare field must type date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'upated_at',
        'deleted_at',
    ];

    //declare fillable
    protected $fillable = [
        'title',
        'created_at',
        'upated_at',
        'deleted_at',
    ];

    //one to many
    public function role() {

        return $this->hasMany('App\Models\ManagementAccess\RoleUser', 'role_id');

    }

    public function permission_role() {

        return $this->hasMany('App\Models\ManagementAccess\Permission', 'role_id');

    }
}
