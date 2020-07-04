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

    <!-- START FOOTER -->
    <footer>
        <div id="container-footer">
            <div class="text-footer">
                <p>
                    <a href="contact.html">Contact</a> - <span class="color-gold">Partagez :</span>
                </p>
                <div class="logos-reseaux" id="logos-reseaux">
                    <a href="https://www.facebook.com/universdefreyja/" target="blank" title="Facebook"><img src="image/logo_facebook" alt="Logo Facebook"></a>
                    <a href="#" targrt="blank" title="Instagram"><img src="images/logo_instagram" alt="Logo Instagram"></a>
                </div>
                <p>
                    <a href="politique_confidentialité.html">Politique de confidentialité</a> - <a href="plan_du_site.html">Plan du site</a>
                </p>

                <p class="copyright">
                    Copyright | L'Univers de Freyja | 2020 <i class="far far fa-copyright"></i>
                </p>
            </div>
        </div>
    </footer>

    <!-- JS -->
    <script src="./assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>
@endsection
