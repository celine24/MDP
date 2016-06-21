@extends('back.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h1>Créer une nouvelle offre</h1></div>



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

                                {!! Form::open(['route' => ['admin.offres.store'], 'id' => 'form-main', 'class' => 'center-block']) !!}

                                <!--{{-- {!! Form::hidden('user_id',$auth_id) !!} --}}-->
                                {!! Form::hidden('category_id',2) !!}

                                <div class="form-group">
                                    {!! Form::label('title',
                                                    'Titre de l\'offre')
                                    !!}

                                    {!! Form::text('title',
                                                    null,
                                                    ['class' => 'form-control',
                                                    'maxlength' => '255',
                                                    'placeholder' => 'Entrez ici le titre de votre offre (255 caractères maximun)',
                                                    'required']
                                    )!!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('content',
                                                    'Contenu de l\'offre')
                                    !!}

                                    {!! Form::textarea('content',
                                                        null,
                                                        ['class' => 'form-control',
                                                        'id' => 'ck-editor',
                                                        'placeholder' => 'Entrez le contenu de l\'offre ici...',
                                                        'size' => '30x20',
                                                        'required']
                                    )!!}
                                </div>

                                <div class="mdp-form-inline">

                                    <div class="form-group">
                                        <div class="checkbox checkbox-success pull-right">
                                            {!! Form::checkbox('published', '1', false, ['id' => 'checkbox1', 'class' => 'checkbox checkbox-success']) !!}

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



