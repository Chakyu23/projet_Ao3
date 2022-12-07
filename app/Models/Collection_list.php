<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection_list extends Model
{
    use HasFactory;

    protected $table = "collection_list";

    public function work() {
        return $this->belongTo(Work::class);
    }

    public function collection() {
        return $this->belongTo(Collection::class);
    }
}
