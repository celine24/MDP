<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller as Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Post;

class AdvicesController extends Controller
{
    public function index()
    {
        $posts = Post::where('category_id', '1')->orderBy('created_at', 'desc')->paginate(10);
        return view('back.advices.index', compact('posts'));
    }

    public function create()
    {
        return view('back.advices.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:posts',
            'content' => 'required',
            'published'
        ]);

        if($validator->fails()) {
            return redirect(route('admin.conseils.create'))->withErrors($validator);
        }

        else {
            $post = Post::create($request->all());
            $post->save();
            $post = Post::find($post->id);
            $post->link = $post->link . $post->id;
            $post->save();
            return redirect(route('admin.conseils.index'))->with('message', 'Félicitations ! Votre conseil a bien été créé :)');
        }
    }
    
    public function edit($id)
    {
        $post = Post::find($id);
        return view('back.advices.edit', compact('post'));
    }

    public function update($id, Request $request)
    {
        $post = Post::findOrFail($id);

        if ($request->has('publication'))
        {
            $post->published = $request->get('publication');
            if ($post->published === "1") {
                $message = "Votre conseil est désormais en ligne.";
            }
            else {
                $message = "Votre conseil est désormais hors ligne.";
            }
            $post->update($request->all());
            return redirect(route('admin.conseils.index'))->with('message', $message);
        }
        else
        {
            if($request->get('published') !== '1')
            {
                $post->published = '0';
            }
            $post->update($request->all());
            return redirect(route('admin.conseils.index'))->with('message', 'Félicitations ! Votre conseil vient d\'être édité :)');
        }
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('back.advices.show', compact('post'));
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect(route('admin.conseils.index'))->with('message', 'Le conseil "' . $post->title . '" a bien été supprimé.');
    }
}