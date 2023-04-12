<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facilitate extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    public function ticket(){
        return $this->belongsTo(Ticket::class, 'ticket_cat_id', 'id');
    }
}
