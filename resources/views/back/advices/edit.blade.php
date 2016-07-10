@extends('back.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h1>Éditer le conseil</h1></div>



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

                        {!! Form::hidden('category_id',1) !!}
                        {!! Form::hidden('link','/conseils#') !!}

                        <div class="form-group">
                            {!! Form::label('title',
                                            'Titre du conseil')
                            !!}

                            {!! Form::text('title',
                                            null,
                                            ['class' => 'form-control',
                                            'maxlength' => '255',
                                            'placeholder' => 'Entrez ici le titre de votre conseil (255 caractères maximun)',
                                            'required']
                            )!!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('content',
                                            'Contenu du conseil')
                            !!}

                            {!! Form::textarea('content',
                                                null,
                                                ['class' => 'form-control',
                                                'id' => 'ck-editor',
                                                'placeholder' => 'Entrez le contenu du conseil ici...',
                                                'size' => '30x20',
                                                'required']
                            )!!}
                        </div>

                        <div class="mdp-form-inline">

                            <div class="form-group">
                                <div class="checkbox checkbox-success pull-right">
                                    {!! Form::checkbox('published', '1', Input::old('published'), ['id' => 'checkbox1', 'class' => 'checkbox checkbox-success']) !!}

                                    {!! Form::label('checkbox1','Mettre en ligne ?') !!}
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
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



