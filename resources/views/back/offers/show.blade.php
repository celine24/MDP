@extends('back.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <p class="mdp-bo-return"><a href="{{ url('admin/offres') }}">- retour à la liste des offres</a></p>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>Prévisualisation de l'Offre</h1>
                    </div>
                    <div class="panel-body">
                        <section class="mdp-bo-article" id="{{ $post->id }}">
                            <header>
                                <h3 class="mdp-h3">{{ $post->title }}</h3>
                            </header>
                            <main>
                                <p>
                                    {!! $post->content !!}
                                </p>
                            </main>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection