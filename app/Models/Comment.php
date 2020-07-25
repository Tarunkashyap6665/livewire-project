<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Comment extends Model
{
    use CrudTrait;
    protected $guarded=['id'];
    public function creator(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function getImagePathAttribute(){
        return Storage::disk('public')->url('images/'.$this->image);
    }
}

