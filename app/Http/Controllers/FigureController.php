<?php

namespace App\Http\Controllers;

use App\Models\Figure;
use App\Models\FigureCategory;
use Illuminate\Http\Request;
use App\Filters\FigureFilter;
use App\Filters\FigureCategoryFilter;
// use Illuminate\Http\Request;
class FigureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, FigureFilter $filter, FigureCategoryFilter $categoryFilter)
    {
        // dd($request->input('category'));
        $categories = FigureCategory::all();
        $figures = Figure::filter($filter)->paginate(10);

        return view('Figure/index', compact('figures',  'categories'));

    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $figure = Figure::find($id);
        return view('Figure/show', compact('figure'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
