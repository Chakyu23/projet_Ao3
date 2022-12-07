<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = "comments";

    protected $fillable = ["content"];

    public function chapter() {
        return $this->belongTo(Chapter::class);
    }

    public function user() {
        return $this->belongTo(User::class);
    }
}
