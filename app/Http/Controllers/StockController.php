<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Models\Category;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index()
    {
        $stocks = Todo::with('category')->where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->get();
        // dd($todos);
        return view('stock.index');
    }
}
