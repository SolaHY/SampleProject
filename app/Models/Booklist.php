<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Booklist extends Model
{
    use HasFactory;

    public function getList() {
        $booklists = DB::table('booklists')->get();

        return $booklists;
    }
}
