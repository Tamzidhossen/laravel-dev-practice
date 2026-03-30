<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "Index";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "Create";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "Store";
    }

    /**
     * Display the specified resource.
     */

    // public function show(Category $category) New Method eta database chara kaj kore na
    public function show(string $id)    //Old Method
    {
        return "Show";
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(Category $category)
    public function edit(string $id)
    {
        return "Edit";
    }

    /**
     * Update the specified resource in storage.
     */
    //public function update(Request $request, Category $category)
    public function update(string $id)
    {
        return "Update";
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(Category $category)
    public function destroy(string $id)
    {
        return "Destroy";
    }
}
