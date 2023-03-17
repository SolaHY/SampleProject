<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booklist;

class BooklistController extends Controller
{
    public function showList() {
        return view('booklist');
    }
}
