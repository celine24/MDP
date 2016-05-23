<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ma Douce Parenthèse</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/normalize-css/normalize.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/front/style.css') }}"/>
</head>
<body>
@include('front.components.header')

<div class="mdp-main-container">

    <div id="wrapper">


    </div>

</div>

@include('front.components.footer')

<script type="text/javascript" src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/navbar.js') }}"></script>
</body>
</html>