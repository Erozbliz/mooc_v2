<?php
/*
	Chapitre où l'eleve envoie son CV par mail au prof
*/


$idMooc;
$idChap;

if (isset($_GET['idM']) && isset($_GET['idC'])) {
	$idMooc = $_GET['idM'];
	$idChap = $_GET['idC'];	
}else{
	$valid = 0;
	echo'erreur';
}
?>
<div class="row">
	<div class="row">
		<div class="col-md-6 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<?php
						//nomChapitre($idMooc,$bdd,$idChap); //voir requeteMooc.php (viens du include dans mooc.php)
					?>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Settings 1</a>
								</li>
								<li><a href="#">Settings 2</a>
								</li>
							</ul>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">


					<!-- Send email -->
					<h4>Envoi du travail
					</h4>

                    <form class="form-horizontal form-label-left" enctype="multipart/form-data" action="_model/send_attachement.php" method="post" id="myform3" novalidate>
                        <div class="item form-group">
                            <label for="password" class="control-label col-md-3">Nom</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="oldPassword" type="text" name="name" required="required">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label for="password" class="control-label col-md-3">Message</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="newPassword" type="email" name="email" data-validate-length-range="4" class="form-control col-md-7 col-xs-12" required="required">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label for="password" class="control-label col-md-3">Pièces jointes</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="file" name="my_file" >
                            </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                <button id="send" type="submit" class="btn btn-success">Confirmer</button>
                            </div>
                        </div>
                    </form>
				</div>
			</div>
		</div>
	</div>
</div>

