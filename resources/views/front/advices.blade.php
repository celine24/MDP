@extends('front.layouts.template')
@section('title', 'Conseils')
@section('content')
    <section class="mdp-advices">
        <header><h1>Mes Conseils</h1></header>
        <main>
            <p>Régulièrement, je poste dans cette rubrique afin de vous livrer mes précieux conseils et astuces beauté. Votre confort et votre bien-être sont ma priorité !
            </p>
            @foreach ($posts as $post)
            <section class="mdp-advices-article">
                <header>
                    <h2>{{ $post->title }}</h2>
                </header>
                <main>
                    <p>
                        {!! $post->content !!}
                    </p>
                </main>
                <footer>
                    <p class="mdp-advices-date">posté le <span class="mdp-bold">{{ $post->created_at->format('d/m/Y') }}</span>.</p>
                    <div class="mdp-advices-separator"></div>
                </footer>
            </section>
            @endforeach
        </main>
    </section>
@endsection