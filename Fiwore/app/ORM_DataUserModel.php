<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ORM_DataUserModel extends Model
{
    protected $table = 'userdata';
    protected $guarded = ['id'];
}
