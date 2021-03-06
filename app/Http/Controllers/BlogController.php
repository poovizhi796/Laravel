<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Blog::latest()->paginate(3);
        // $datas = Blog::paginate(3);
        return view('Blog.index', compact(['datas']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);
        // $objBlog = new Blog;
        // $objBlog->title = $request->title;
        // $objBlog->description = $request->description;
        // $objBlog->save();
        Blog::create($request->all());
        return redirect()->route('blog.index')->with("success", "successfully Inserted");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::find($id);
        return view('Blog.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $oneRow = Blog::find($id);
        return view('Blog.edit', compact(['oneRow']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Blog::find($id)->update($request->all());
        return redirect()->route('blog.index')->with('success', 'Successfully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Blog::where('id', $id)->delete();  //this also good method , using where condition
        // $result = Blog::find($id)->delete(); // this also right
        $result = Blog::find($id);
        if ($result!= null) {
            $result->delete();
            return redirect()->route('blog.index')->with('success', 'Removed Record Successfully!');
        } else {
            return redirect()->route('blog.index')->with('danger', 'Wrong ID');
        }
        
    }
}
