<?php include_once('session.php'); $_SESSION['page'] = "accueil.php" ?>



    
<section class="container-fluid" id="menu-container">
    <div class="col-xs-6 col-xs-offset-3">
        <button class="btn visible-xs" data-toggle="collapse" data-target="#menu" id="coll-menu">
            <span class="glyphicon glyphicon-th-list"></span>
        </button>
    </div>
    <div class="col-xs-12 row collapse in" id="menu">
        <div class="col-sm-4 col-xs-12">
            <button class="btn btn-menu" id="cartes_util">Mes cartes</button>
        </div>
        <div class="col-sm-4 col-xs-12">
            <button class="btn btn-menu" id="nouv_cartes">Nouvelles cartes</button>
        </div>
        <div class="col-sm-4 col-xs-12">
            <button class="btn btn-danger" id="deconnexion">Déconnexion</button>
        </div>
        <script>
            $("#cartes_util").click(function() {
                charger("cartes_util.php");
            });
        </script>
        <script>
            $("#deconnexion").click(function() {
                charger("deconnexion.php");
            });
        </script>
    </div>
</section>
<section class="container-fluid">
    <div class="col-sm-10 col-sm-offset-1">
        <div id="cardsCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#cardsCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#cardsCarousel" data-slide-to="1"></li>
                <li data-target="#cardsCarousel" data-slide-to="2"></li>
                <li data-target="#cardsCarousel" data-slide-to="3"></li>
            </ol>

            <div class="carousel-inner">
                <div class="item active">
                    <img src="cards/card1.png" alt="carte 1">
                </div>
                <div class="item">
                    <img src="cards/card1.png" alt="carte 2">
                </div>
                <div class="item">
                    <img src="cards/card1.png" alt="carte 3">
                </div>
                <div class="item">
                    <img src="cards/card1.png" alt="carte 4">
                </div>
            </div>

            <a class="left carousel-control" href="#cardsCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Précédent</span>
            </a>
            <a class="right carousel-control" href="#cardsCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Suivant</span>
            </a>
        </div>
    </div>
</section>