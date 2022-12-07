<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $table = "tags";

    protected $fillale = ["name"];

    public function tag_type(){
        return $this->belongTo(Tag_Type::class);
    }

    public function user() {
        return $this->belongTo(User::class);
    }
}
