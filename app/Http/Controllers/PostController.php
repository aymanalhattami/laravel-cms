<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Storage;
//use DB;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $allPosts = Post::all();
//        $allPosts = Post::orderBy('created_at', 'desc')->get();
//        $allPosts = DB::select("SELECT * FROM posts");
        $allPosts = Post::orderBy('created_at', 'desc')->paginate(6);
        return view('posts.index', compact('allPosts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the input data
        $this->validate($request, [
            'subject' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'body' => 'required',
            'post_image' => 'image|nullable|max:1024'
        ]);

        //use to upload the image
        if($request->hasFile('post_image')){
            $fileNameWithExtension = $request->file('post_image')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExtension, PATHINFO_FILENAME);
            $extention = $request->file('post_image')->getClientOriginalExtension();
            $fileNameStore = $fileName . '_' . time() . '.' . $extention;
            $path = $request->file('post_image')->storeAs('public/post_image', $fileNameStore);
        }else{
            $fileNameStore = 'noImage.jpg';
        }

        $post = new Post();//object of the Post Model
        $post->subject = $request->input('subject');
        $post->first_name = $request->input('first_name');
        $post->last_name = $request->input('last_name');
        $post->body = $request->input('body');
        $post->user_id = auth()->user()->id;
        $post->post_image = $fileNameStore;
        $post->save();

        return redirect('/posts')->with('success', 'Done Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $thePost = Post::find($id);
        return view('posts.show', compact('thePost'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $thePost = Post::find($id);
        if(auth()->user()->id !== $thePost->user_id)
            return redirect('/posts')->with('error', 'You Are Not Authorized to Edit');

        return view('posts.edit', compact('thePost'));
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
        $this->validate($request, [
            'subject' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'body' => 'required'
        ]);

        if($request->hasFile('post_image')){
            $fileNameWithExtension = $request->file('post_image')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExtension, PATHINFO_FILENAME);
            $extention = $request->file('post_image')->getClientOriginalExtension();
            $fileNameStore = $fileName . '_' . time() . '.' . $extention;
            $path = $request->file('post_image')->storeAs('public/post_image', $fileNameStore);
        }

        $post = Post::find($id);//object of the Post Model
        $post->subject = $request->input('subject');
        $post->first_name = $request->input('first_name');
        $post->last_name = $request->input('last_name');
        $post->body = $request->input('body');
        if($request->hasFile('post_image')){
            $post->post_image = $fileNameStore;
        }
        $post->save();

        return redirect('/posts')->with('success', 'Done Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);//object of the Post Model
        if(auth()->user()->id !== $post->user_id)
            return redirect('/posts')->with('error', 'You Are Not Authorized to Edit');

        if($post->post_image != 'noImage.jpg')
            Storage::delete('public/post_image/' . $post->post_image);

        $post->delete();

        return redirect('/posts')->with('success', 'Done Successfully');
    }
}