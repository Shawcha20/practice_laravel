<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dbmodel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected  $table='dbtable';
    protected $primarykey='user_id';
}
