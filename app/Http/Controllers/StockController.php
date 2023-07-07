<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use App\Models\Category;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index()
    {
        // $stocks = Stock::where('id', auth()->user()->id)
        //     ->orderBy('created_at', 'desc')
        //     ->get();
        $stocks = Stock::all()->take(10);
        return view('stock.index', compact('stocks'));
    }

    public function store(Request $request, Stock $stock)
    {
        $request->validate([
            'title' => 'required|max:255',
        ]);
        $stock = Stock::create([
            'title'   => ucfirst($request->title),
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->route('Stock.index')->with('success', 'Stock created successfully!');
    }

    public function create()
    {
        return view('stock.create');
    }

    public function edit(Stock $stock)
    {
        if(auth()->user()->id == $stock->user_id)
        {
            // dd($stock);
            return view('stock.edit', compact('stock'));
        }else{
            // abort(403);
            // abort(403, 'Not authorized')
            return redirect()->route('stock.index')->with('danger','You are not authorized to edit this stock!');
        }
    }

    public function update(Request $request, Stock $stock)
    {
        $request->validate([
            'title' => 'required|max:255',
        ]);

        // Practical
        // $stock->title = $request->title;
        // $stock->save();

        // Elequent Way - Readble
        $stock->update([
            'title' => ucfirst($request->title),
        ]);
        return redirect()->route('stock.index')->with('success', 'Stock update successfully');

    }
}
