@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h1>Ma Douce Parenthèse, Panneau d'Administration</h1></div>

                    <div class="panel-body">
                        <p>Bienvenue sur le panneau d'administration de Ma Douce Parenthèse ! Vous pouvez gérer vous-même votre contenu en vous référant à la liste suivante :</p>
                        <ul>
                            <li>Gérez vos <a href="{{ url('/admin/actu') }}">actualités</a></li>
                            <li>Gérez vos <a href="{{ url('/admin/tarifs') }}">tarifs</a></li>
                            <li>Gérez vos <a href="{{ url('/admin/offres') }}">offres promotionnelles</a></li>
                            <li>Gérez vos <a href="{{ url('/admin/conseils') }}">conseils</a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection