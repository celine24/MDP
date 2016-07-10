@extends('back.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h1>Éditer l'actualité</h1></div>



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

                        {!! Form::model($actu, ['route' => ['admin.actu.update', $actu->id], 'method' => 'patch', 'id' =>
                        'form-main', 'class' => 'center-block']) !!}

                        {!! Form::hidden('category_id',3) !!}

                        <div class="form-group">
                            {!! Form::label('title',
                                            'Titre de l\'actu')
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
                            {!! Form::label('link',
                                            'Article de référence')
                            !!}
                            <select name="link" class="form-control">
                                <option value="">Aucun</option>
                                @foreach($posts as $post)
                                    @if ($post->link == $actu->link)
                                    <option selected value="{{$post->link}}">{{$post->category->name . ' : ' . $post->title }}</option>
                                    @else
                                    <option value="{{$post->link}}" >{{$post->category->name . ' : ' . $post->title }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            {!! Form::label('content',
                                            'Contenu de l\'actualité')
                            !!}

                            {!! Form::text('content',
                                                null,
                                                ['class' => 'form-control',
                                                'placeholder' => 'Entrez le contenu de l\'actualité ici (255 caractères maximun)',
                                                'required']
                            )!!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('external_link',
                                            'Ajouter un lien externe')
                            !!}
                            {!! Form::url('external_link',
                                           null,
                                           ['class' => 'form-control',
                                           'placeholder' => 'Entrez le lien vers lequel pointera votre actu (laissez le champ vide si vous voulez utiliser le lien par défaut).']
                            )!!}
                        </div>
                        <div class="mdp-form-inline">
                            <div class="form-group">
                                <div class="checkbox checkbox-success pull-right">
                                    {!! Form::checkbox('published', '1', Input::old('published'), ['id' => 'checkbox1', 'class' => 'checkbox checkbox-success']) !!}
                                    {!! Form::label('checkbox1','Mettre en ligne ?') !!}
                                </div>
                                <div class="checkbox checkbox-success pull-right">
                                    {!! Form::checkbox('displayed_link', '1', Input::old('displayed_link'), ['id' => 'checkbox2', 'class' => 'checkbox checkbox-success']) !!}
                                    {!! Form::label('checkbox2','Afficher le lien ?') !!}
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





