<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    protected $table = "works";

    protected $fillable = ["title", "sumary", "chapter_max"];

    public function user() {
        return $this->belongTo(User::class);
    }
}
