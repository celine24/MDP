@extends('front.layouts.template')
@section('title', 'Contact')
@section('content')
    <section class="mdp-contact">
        <header><h1>Me Contacter</h1></header>
        <main>
            <p>Je vous accueille sur <span class="mdp-italic">rendez-vous</span> du <span class="mdp-bold">lundi au samedi de 9h à 19h</span> (<span class="mdp-italic">nocturne possible</span>), dans un espace pensé pour vous et dédié à votre bien-être. </p>
            <h2>Me joindre par téléphone</h2>
            <p><span class="mdp-contact-phone">02 - 43 - 44 - 96 - 24</span> ou <span class="mdp-contact-phone">06 - 37 - 32 - 97 - 57</span></p>
            <h2>Me joindre par mail</h2>
            <form class="mdp-contact-form">
                <input type="text" name="" placeholder="Votre Nom" />
                <input type="text" name="" placeholder="Votre Prénom" />
                <input type="email" name="" placeholder="Votre adresse mail" />
                <textarea placeholder="Votre message"></textarea>
                <input type="submit" value="Envoyer" />
            </form>
            <h2>Me situer</h2>
            <address>
                Ma Douce Parenthèse<br>
                23 Grande Rue<br>
                72 360 Verneil-le-Chétif
            </address>
            <div class="mdp-contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10734.374661941176!2d0.295067!3d47.731135!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e2bfae44195039%3A0xa75ac4dd72e81126!2s23+Gr+Grande+Rue%2C+72360+Verneil-le-Ch%C3%A9tif%2C+France!5e0!3m2!1sfr!2sfr!4v1464536365479" frameborder="0" allowfullscreen></iframe>
            </div>
        </main>
    </section>
@endsection