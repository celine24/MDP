<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller as Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Post;

class ActuController extends Controller
{
    public function index()
    {
        $posts = Post::where('category_id', '3')->orderBy('created_at', 'desc')->get();
        return view('back.actu.index', compact('posts'));
    }


    public function create(Request $request)
    {
        $posts = Post::published()->where('category_id', '!=', '3')->orderBy('created_at', 'desc')->get();
        return view('back.actu.create', compact('posts'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:posts',
            'content' => 'required',
            'link',
            'displayed_link',
            'published'
        ]);

        if($validator->fails()) {
            return redirect(route('admin.actu.create'))->withErrors($validator);
        }

        else {
            $post = Post::create($request->all());
            if($request->get('category_id') === '3')
            {
                if($request->get('external_link') !== '') {
                    $post->link = $request->get('external_link');
                }
            }
            $post->save();
            return redirect(route('admin.actu.index'))->with('message', 'Félicitations ! Votre actualité a bien été créée :)');
        }
    }


    public function edit($id)
    {
        $actu = Post::find($id);
        $posts = Post::published()->where('category_id', '!=', '3')->orderBy('created_at')->get();
        return view('back.actu.edit', compact('actu', 'posts'));
    }


    public function update($id, Request $request)
    {
        $post = Post::findOrFail($id);

        if ($request->has('publication'))
        {
            $post->published = $request->get('publication');
            if ($post->published === "1") {
                $message = "Votre actualité est désormais en ligne.";
            }
            else {
                $message = "Votre actualité est désormais hors ligne.";
            }
            $post->update($request->all());
            return redirect(route('admin.actu.index'))->with('message', $message);
        }
        else
        {
            if($request->get('published') !== '1')
            {
                $post->published = '0';
            }
            if($request->get('displayed_link') !== '1')
            {
                $post->displayed_link = '0';
            }
            $post->update($request->all());
            return redirect(route('admin.actu.index'))->with('message', 'Félicitations ! Votre actualité vient d\'être éditée :)');
        }
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('back.actu.show', compact('post'));
    }
    
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect(route('admin.actu.index'))->with('message', 'L\'actualité a bien été supprimée.');
    }
}