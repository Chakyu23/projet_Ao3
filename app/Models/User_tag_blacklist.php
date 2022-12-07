<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_tag_blacklist extends Model
{
    use HasFactory;

    protected $table = "user_tag_blacklist";

    public function user() {
        return $this->belongTo(User::class);
    }
    public function tag() {
        return $this->belongTo(Tag::class);
    }
}
