<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class SupportTicket extends Model
{
    use CrudTrait;
    protected $guarded=['id'];
    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
