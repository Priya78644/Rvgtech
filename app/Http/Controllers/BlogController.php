<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
class BlogController extends Controller
{
    public function index()
    {
        $blogs= Blog::all();
        return view('dashboard.blog.index', compact('blogs'));
    }
    // Show the form for creating a new resource.
    public function create()
    {
        $categories = Category::all(); // Fetch all categories to display in the form
        return view('dashboard.blog.create', compact('category'));
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        // Validate request data
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);

        // Create a new post with the validated data
        Blog::create($request->all());
        return redirect()->route('blog.index')->with('success', 'Blog created successfully.');
    }


}
