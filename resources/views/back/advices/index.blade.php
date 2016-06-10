@extends('back.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h1>Gestion des Conseils</h1></div>



                    <div class="panel-body">
                        <p>Bienvenue sur le panneau d'administration de Ma Douce Parenthèse ! Vous pouvez gérer vous-même votre contenu en vous référant à la liste suivante :</p>
                        <table class="table table-striped">
                            <tr>
                                <th>Titre</th>
                                <th>Contenu</th>
                                <th>Statut</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td>1 conseil</td>
                                <td>1 conseil</td>
                                <td>1 conseil</td>
                                <td>
                                    <button type="button" class="btn btn-info"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
                                    <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
                                    <button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                    <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
                                </td>
                            </tr>
                        </table>

                        <nav>
                            <ul class="pagination pagination-lg">
                                <li>
                                    <a href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>

                    </div>
                </div>
                <a class="btn btn-default pull-right" href="{{ route('admin.conseils.create') }}" role="button">Nouveau Conseil</a>
            </div>
        </div>
    </div>
@endsection