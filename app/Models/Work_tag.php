<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work_tag extends Model
{
    use HasFactory;

    protected $table = "work_tag";

    public function work() {
        return $this->belongTo(Work::class);
    }
    
    public function tag() {
        return $this->belongTo(Tag::class);
    }
}
