<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work_like extends Model
{
    use HasFactory;

    public function work() {
        return $this->belongTo(Work::class);
    }

    public function user() {
        return $this->belongTo(User::class);
    }
}
