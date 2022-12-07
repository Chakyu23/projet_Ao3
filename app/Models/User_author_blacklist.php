<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_author_blacklist extends Model
{
    use HasFactory;

    protected $table = "user_author_blacklist";

    public function user_main() {
        return $this->belongTo(User::class, "user_main_id");
    }

    public function user() {
        return $this->belongTo(User::class);
    }
}
