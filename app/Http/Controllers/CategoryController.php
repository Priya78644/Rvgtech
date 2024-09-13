<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function index()
    {
        $categories= Category::all();
        return view('dashboard.category.index', compact('categories'));
    }
    public function create(){
        return view('dashboard.category.create');
    }
    public function store(Request $request){
        Category::create($request->all());
        return redirect('category');
    }
    public function edit(Category $category)
    {
        return view('dashboard.category.edit', compact('category'));
    }
    public function delete(Category $category){
        $category->delete();
        return back()->with('success', 'deleted successfully');
    }
    public function update(Request $request, Category $category){
        $category->update($request->all());
        return redirect('category')->with('success', 'updated successfully');
    }
}
