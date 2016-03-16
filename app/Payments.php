<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    //
    protected $payments='payments';
    protected $fillable=['title','content'];
}
