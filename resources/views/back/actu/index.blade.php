@extends('back.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>Gestion des Actualités</h1>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                            <p class="alert alert-success">
                                {{Session::get('message')}}
                            </p>
                        @endif
                        <p class="lead">Ici vous pouvez consulter la liste de vos actualités, gérer ces dernières à partir des articles déjà postés ou en créer de nouvelles.</p>
                        @if(count($posts) > 0)
                        <table class="table table-striped table-bordered table-condensed">
                            <tr>
                                <th>Titre</th>
                                <th>Contenu</th>
                                <th>Création</th>
                                <th>Édition</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($posts as $post)
                            <tr>
                                <td class="col-md-2">{{ str_limit($post->title, $limit = 60, $end = '...') }}</td>
                                <td class="col-md-4">{!! str_limit($post->content, $limit = 60, $end = '...') !!} </td>
                                <td class="col-md-1">{{ $post->created_at->format('d/m/Y') }}</td>
                                <td class="col-md-1">{{ $post->updated_at->format('d/m/Y') }}</td>
                                <td class="col-md-2">
                                    <div class="mdp-bo-advices-buttons">
                                        <a href="{{ route('admin.actu.edit', $post->id) }}" title="Editer l'actu" class="btn btn-info"><span class="glyphicon glyphicon-pencil"></span></a>

                                        <a href="{{ route('admin.actu.show', $post->id) }}" title="Prévisualiser l'actu" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></a>

                                        {!! Form::open([
                                            'url' => route('admin.actu.update', $post->id),
                                            'method' => 'PUT'
                                            ])
                                        !!}
                                            @if ($post->published === 1)
                                                <input type="hidden" name="publication" value="0"/>
                                                <button
                                                        class="btn btn-warning"
                                                        type="submit"
                                                        data-toggle="tooltip"
                                                        title="Dépublier l'actu"
                                                        data-confirm="delete"
                                                        data-text="Voulez-vous vraiment dépublier cette actu ? Elle ne sera plus visible sur le site, mais vous pourrez la remettre en ligne à tout moment."
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
                                                        data-text="Cette actu sera visible sur le site si vous la publiez maintenant. Etes-vous certain de vouloir effectuer cette action ?"
                                                        data-confirm-button="Oui"
                                                        data-cancel-button="Mince, non !"
                                                        data-placement="top">
                                                    <span class="glyphicon glyphicon-save"></span>
                                                </button>
                                            @endif
                                            {!! Form::close() !!}

                                            {!! Form::open([
                                                        'url' => route('admin.actu.destroy', $post->id),
                                                        'method' => 'DELETE'
                                                        ])
                                            !!}
                                            <button
                                                    class="btn btn-danger"
                                                    type="submit"
                                                    data-toggle="tooltip"
                                                    title="Supprimer l'actu"
                                                    data-confirm="delete"
                                                    data-text="Voulez-vous vraiment supprimer cette actu ? Cette action est définitive."
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
                        @else
                        <p>Aucune actualité pour l'instant.</p>
                        @endif
                        <a class="btn btn-default pull-right" href="{{ route('admin.actu.create') }}" role="button">Ecrire une nouvelle actu</a>
                        <div class="clearfix"></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection