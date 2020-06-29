@extends('template.app')

@section('content')
 <!-- START MAIN -->
 <main>
    <div id="container-main">

        <!-- CARROUSEL -->
        <div id="slideshow">
            <div id="sContent">
                <img src="https://picsum.photos/960/497" alt="Massage">
                <img src="https://picsum.photos/960/497" alt="Beauty">
                <img src="http://picsum.photos/960/497" alt="Lithotherapy">
            </div>
        </div>

        <!-- 1ST TEXT BLOCK -->
        <h1>L'Univers de Freyja</h1>
        <h2></h2>

        <!-- BLOCK TEXT - PHOTO -->
        <div class="container-photo-text">
            <img src="https://picsum.photos/960/497" alt="Photo massage">
            <div class="text-courant-decale">
                <h3>Massage energétique</h3>
                <p>Massage détente, qui tends à stimuler ou à relaxer. Cela permet de faire circuler le sang et les énergies.<br><br></p>
                <div class="en-savoir-plus"><a href="massage.html">En savoir +</a></div>
            </div>
        </div>

        <div class="container-photo-text">
            <div class="texte-courant-decale-inverse">
                <h3>Lithotherapie</h3>
                <p>Tout savoir sur les pierres et leurs vertues.</p>
                <div class="en-savoir-plus"><a href="lithotherapy.html">En savoir +</a></div>
            </div>
            <img src="https://picsum.photos/960/497" alt="Photo lithotherapie">
        </div>

        <div class="container-photo-text">
            <img src="https://picsum.photos/960/497" alt="Photo bougie">
            <div class="text-courant-decale">
                <h3>Bougies</h3>
                <p>Venez découvrir des cires pour bougie aux senteur ennivrantes.</p>
                <div class="en-savoir-plus"><a href="candles.html">En savoir +</a></div>
            </div>
        </div>

        <div class="container-photo-text">
            <div class="texte-courant-decale-inverse">
                <h3>Produits de beauté</h3>
                <p>Découvrez la gamme de produits qui fera de vous une Déesse.</p>
                <div class="en-savoir-plus"><a href="wellbeing.html">En savoir +</a></div>
            </div>
            <img src="https://picsum.photos/960/497" alt="Photo lithotherapie">
        </div>

        <div class="container-photo-text">
            <img src="https://picsum.photos/960/497" alt="Photo massage">
            <div class="text-courant-decale">
                <h3>Bien-être</h3>
                <p>Venez découvrir comment être Naturellement Bien avec Myriam.<br><br></p>
                <div class="en-savoir-plus"><a href="beauty.html">En savoir +</a></div>
            </div>
        </div>

    </div>
</main>
<!-- END MAIN -->
@endsection
