<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasFactory;
    protected $keyType = 'string';
    protected $primaryKey = 'user_id';
    protected $table = 'user';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $guarded = ['user_id'];


    public function hasRole($role_name)
    {
        return User::where('role', $role_name)->where('user_id', auth()->user()->user_id)->exists();
    }
}
