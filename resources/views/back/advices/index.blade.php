@extends('back.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>Gestion des Conseils</h1>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                            <p class="alert alert-success">
                                {{Session::get('message')}}
                            </p>
                        @endif
                        <p class="lead">Ici vous pouvez consulter la liste de vos conseils, gérer ces derniers et en créer de nouveaux.</p>
                        <table class="table table-striped table-bordered table-condensed">
                            <tr>
                                <th>Titre</th>
                                <th>Contenu</th>
                                <th>Statut</th>
                                <th>Création</th>
                                <th>Édition</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($posts as $post)
                            <tr>
                                <td class="col-md-2">{{ str_limit($post->title, $limit = 60, $end = '...') }}</td>
                                <td class="col-md-3">{!! str_limit($post->content, $limit = 60, $end = '...') !!} </td>
                                <td class="col-md-1">
                                    @if ($post->published === 1)
                                        en ligne
                                    @else
                                        hors ligne
                                    @endif
                                </td>
                                <td class="col-md-1">{{ $post->created_at->format('d/m/Y') }}</td>
                                <td class="col-md-1">{{ $post->updated_at->format('d/m/Y') }}</td>
                                <td class="col-md-3">
                                    <div class="mdp-bo-advices-buttons">
                                        <a href="{{ route('admin.conseils.edit', $post->id) }}" data-toggle="tooltip" title="Editer l'article" class="btn btn-info"><span class="glyphicon glyphicon-pencil"></span></a>

                                        <a href="{{ url('conseils') }}" data-toggle="tooltip" title="Prévisualiser l'article" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></a>

                                        {!! Form::open([
                                            'url' => route('admin.conseils.update', $post->id),
                                            'method' => 'PUT'
                                            ])
                                        !!}
                                            @if ($post->published === 1)
                                                <input type="hidden" name="publication" value="0"/>
                                                <button
                                                        class="btn btn-warning"
                                                        type="submit"
                                                        data-toggle="tooltip"
                                                        title="Dépublier le conseil"
                                                        data-confirm="delete"
                                                        data-text="Voulez-vous vraiment dépublier ce conseil ? Il ne sera plus visible sur le site, mais vous pourrez le remettre en ligne à tout moment."
                                                        data-confirm-button="Oui"
                                                        data-cancel-button="Mince, non !"
                                                        data-placement="top">
                                                    <span class="glyphicon glyphicon-open"></span>
                                                </button>
                                            @else
                                                <input type="hidden" name="publication" value="1"/>
                                                <button
                                                        class="btn btn-success"
                                                        type="submit"
                                                        data-toggle="tooltip"
                                                        title="Mettre en ligne"
                                                        data-confirm="delete"
                                                        data-text="Ce conseil sera visible sur le site si vous le publiez maintenant. Etes-vous certain de vouloir effectuer cette action ?"
                                                        data-confirm-button="Oui"
                                                        data-cancel-button="Mince, non !"
                                                        data-placement="top">
                                                    <span class="glyphicon glyphicon-save"></span>
                                                </button>
                                            @endif
                                            {!! Form::close() !!}

                                            {!! Form::open([
                                                        'url' => route('admin.conseils.destroy', $post->id),
                                                        'method' => 'DELETE'
                                                        ])
                                            !!}
                                            <button
                                                    class="btn btn-danger"
                                                    type="submit"
                                                    data-toggle="tooltip"
                                                    title="Supprimer le conseil"
                                                    data-confirm="delete"
                                                    data-text="Voulez-vous vraiment supprimer ce conseil ? Cette action est définitive."
                                                    data-confirm-button="Oui"
                                                    data-cancel-button="Mince, non !"
                                                    data-placement="top">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </button>
                                        {!! Form::close() !!}
                                    </div>

                                    <div class="clearfix"></div>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                        <a class="btn btn-default pull-right" href="{{ route('admin.conseils.create') }}" role="button">Ecrire un nouveau conseil</a>
                            <div class="clearfix"></div>
                        <nav class="mdp-bo-advices-pagination">
                            <ul class="pagination pagination-lg">
                                {{ $posts->links() }}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection