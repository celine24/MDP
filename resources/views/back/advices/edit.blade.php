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

                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops !</strong> Il y'a un problème avec les données envoyées !<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        {!! Form::model($post, ['route' => ['admin.conseils.update', $post->id], 'method' => 'patch', 'id' =>
                        'form-main', 'class' => 'center-block']) !!}

                    <!--{{-- {!! Form::hidden('user_id',$auth_id) !!} --}}-->

                        <div class="form-group">
                            {!! Form::label('title',
                                            'Titre de l\'article')
                            !!}

                            {!! Form::text('title',
                                            null,
                                            ['class' => 'form-control',
                                            'maxlength' => '100',
                                            'placeholder' => 'Entrez ici le titre de votre article (20 caractères maximun)',
                                            'required']
                            )!!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('content',
                                            'Contenu de l\'article')
                            !!}

                            {!! Form::textarea('content',
                                                null,
                                                ['class' => 'form-control',
                                                'id' => 'ckeditor',
                                                'placeholder' => 'Entrez le resume ici...',
                                                'size' => '30x3',
                                                'required']
                            )!!}
                        </div>

                        <div class="mdp-form-inline">

                            <div class="form-group">
                                <div class="checkbox checkbox-success pull-right">
                                    @if ($post->published === 1)
                                        {!! Form::checkbox('published', 0, false, ["id" => "checkbox", "class" => "checkbox checkbox-success"]) !!}
                                        {!! Form::label('checkbox','Dépublier ?') !!}
                                    @else
                                        {!! Form::checkbox('published', 1, false, ["id" => "checkbox", "class" => "checkbox checkbox-success"]) !!}
                                        {!! Form::label('checkbox','Mettre en ligne ?') !!}
                                    @endif
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        {!! Form::submit('Envoyer',
                                        ['required',
                                        'name' => 'envoyer',
                                        'class' => 'btn btn-default pull-right']
                        )!!}

                        {!! Form::close() !!}
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection