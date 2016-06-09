<?php include_once('session.php'); $_SESSION['page'] = "echanges.php" ?>

<div class="title"><h1>Échanger</h1></div>
<script>
    $(".title").click(function() {
        charger("cartes_util.php");
    });
</script>
<div class="default-frame">
    <section class="container-fluid">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <table class="table" id="swap-table">
                <thead>
                    <tr>
                        <th>Votre carte:</th>
                        <th>Proposition:</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="col-xs-5 col-sm-5 col-md-5">
            <img src="cards/card1.png" alt="votre carte" id="carte_propre">
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <span class="glyphicon glyphicon-transfer" id="transfert"></span>
        </div>
        <div class="col-xs-5 col-sm-5 col-md-5">
            <img src="cards/card10.png" alt="votre carte" id="carte_proposition">
        </div>
    </section>
</div>
<section class="container-fluid" style="margin-top: 7vh">
    <div class="col-xs-3 col-sm-3 col-md-3 col-xs-offset-3 col-sm-offset-3 col-md-offset-3">
        <button class="btn btn-success" id="swap-btn"><span class="glyphicon glyphicon-ok"></span></button>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3">
        <button class="btn btn-danger" id="no_swap-btn"><span class="glyphicon glyphicon-remove"></span></button>
    </div>
</section>