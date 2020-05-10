<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{
    protected $guarded = [];

    public function user(){
       return $this->belongsTo(User::class);
    }

    public function profileImage(){
        return   ($this->image) ? $this->image : '/profile/hOUaeMN856MIb9cNKFuIRpwXrgW2x2MwR8CuS4oi.jpeg';
    }

    public function followers(){
        return $this->belongsToMany(User::class);
    }
}
