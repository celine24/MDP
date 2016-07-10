@extends('back.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <p class="mdp-bo-return"><a href="{{ url('admin/actu') }}">- retour à la liste des actualités</a></p>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>Prévisualisation de l'Actualité</h1>
                    </div>
                    <div class="panel-body mdp-bo-bcg-preview">
                        <section class="mdp-bo-actu" id="{{ $post->id }}">
                            <header>
                                <h1>Actualités</h1>
                            </header>
                            <main>
                                <ul>
                                    <li>
                                        <span class="mdp-bold">• {{ $post->created_at->format('d/m/Y') }} - </span>
                                        {!! $post->content !!}
                                        @if ($post->displayed_link === 1)
                                            - <a href="{{ $post->link }}" class="mdp-bold" target="_blank">en savoir plus</a>
                                        @endif
                                    </li>
                                </ul>
                            </main>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection