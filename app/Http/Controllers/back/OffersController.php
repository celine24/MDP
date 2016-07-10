<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller as Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Post;

class OffersController extends Controller
{
    public function index()
    {
        $posts = Post::where('category_id', '2')->orderBy('created_at', 'desc')->get();
        return view('back.offers.index', compact('posts'));

    }


    public function create(Request $request)
    {
        return view('back.offers.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:posts',
            'content' => 'required',
            'published'
        ]);

        if($validator->fails()) {
            return redirect(route('admin.offres.create'))->withErrors($validator);
        }

        else {
            $post = Post::create($request->all());
            $post->save();
            return redirect(route('admin.offres.index'))->with('message', 'Félicitations ! Votre offre a bien été créée :)');
        }
    }


    public function edit($id)
    {
        $post = Post::find($id);
        return view('back.offers.edit', compact('post'));
    }


    public function update($id, Request $request)
    {
        $post = Post::findOrFail($id);

        if ($request->has('publication'))
        {
            $post->published = $request->get('publication');
            if ($post->published === "1") {
                $message = "Votre offre est désormais en ligne.";
            }
            else {
                $message = "Votre offre est désormais hors ligne.";
            }
            $post->update($request->all());
            return redirect(route('admin.offres.index'))->with('message', $message);
        }
        else
        {
            if($request->get('published') !== '1')
            {
                $post->published = '0';
            }
            $post->update($request->all());
            return redirect(route('admin.offres.index'))->with('message', 'Félicitations ! Votre offre vient d\'être éditée :)');
        }
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('back.offers.show', compact('post'));
    }

    public function destroy($id)
    {

    }
}