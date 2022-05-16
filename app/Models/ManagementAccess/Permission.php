<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission extends Model
{
    use SoftDeletes;

    //declare table
    public $table = 'permission';

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

    //many to many
    public function role()
    {
        return $this->belongsToMany('App\Models\ManagementAccess\Role');
    }

    //one to many
    public function permission_role() {

        return $this->hasMany('App\Models\ManagementAccess\Permission', 'permission_id');

    }
}
