@extends('back.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <p class="mdp-bo-return"><a href="{{ url('admin/conseils') }}">- retour à la liste des conseils</a></p>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>Prévisualisation du Conseil</h1>
                    </div>
                    <div class="panel-body">
                        <section class="mdp-bo-article" id="{{ $post->id }}">
                            <header>
                                <h2>{{ $post->title }}</h2>
                            </header>
                            <main>
                                <p>
                                    {!! $post->content !!}
                                </p>
                            </main>
                            <footer>
                                <p class="mdp-article-date">posté le <span class="mdp-bold">{{ $post->created_at->format('d/m/Y') }}</span>.</p>
                            </footer>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection