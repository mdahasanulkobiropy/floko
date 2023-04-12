<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function items(){
        return $this->hasMany(Facilitate::class, 'ticket_cat_id','id');
    }
}
