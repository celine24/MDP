@if ((count($news) > 0))
<!-- pour voir commenter afficher les données d'un include (sidebar par exemple), AppServiceProvider, fonction boot())-->
<section class="mdp-sidebar-news">
    <header>
        <h1>Actualités</h1>
    </header>
    <main>
        <ul>
            @foreach ($news as $new)
            <li>
                <span class="mdp-bold">• {{ $new->created_at->format('d/m/Y') }} - </span>
                {{ $new->content }}
                @if ($new->displayed_link === 1)
                    - <a href="{{ $new->link }}" class="mdp-bold" target="_blank">en savoir plus</a>
                @endif
            </li>
            @endforeach
        </ul>
    </main>
</section>
@endif