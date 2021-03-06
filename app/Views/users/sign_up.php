<?php $this->layout('layout', ['title' => 'sign_up']) ?>

<?php $this->start('main_content') ?>

<div class="container">
	<h2>Inscription</h2>

	<!-- Affichage des messages d'erreurs et de success -->
	<?php if(array_key_exists('errors',$_SESSION)): ?>
	<div class="alert alert-danger">
	<?= implode('<br>', $_SESSION['errors']); ?>
	</div>
	<?php endif; ?>
	<?php if(array_key_exists('success',$_SESSION)): ?>
	<div class="alert alert-success">
	Votre inscription est validée !
	</div>
	<?php endif;?>

	<form class="form-horizontal" method="POST" action="<?= $this->url('users_sign_up') ?>">
		<fieldset>
			<!-- Nom -->
			<div class="form-group">
			  <div class="col-sm-offset-4 col-sm-4">
			    <div class="input-group">
			      <span class="input-group-addon span-bold">Nom</span>
			      <input id="lastname" name="lastname" class="form-control" placeholder="Votre nom" type="text" value="<?= $lastname ?>">
			    </div>
			  </div>
			</div>

			<!-- Prénom -->
			<div class="form-group">
			  <div class="col-sm-offset-4 col-sm-4">
			    <div class="input-group">
			      <span class="input-group-addon span-bold">Prénom</span>
			      <input id="firstname" name="firstname" class="form-control" placeholder="Votre prénom" type="text" value="<?= $firstname ?>">
			    </div>
			  </div>
			</div>

			<!-- Pseudo -->
			<div class="form-group">
			  <div class="col-sm-offset-4 col-sm-4">
			    <div class="input-group">
			      <span class="input-group-addon span-bold">Pseudo</span>
			      <input id="nickname" name="nickname" class="form-control" placeholder="Votre pseudo" type="text" value="<?= $nickname ?>">
			    </div>
			  </div>
			</div>

			<!-- Email -->
			<div class="form-group">
			  <div class="col-sm-offset-4 col-sm-4">
			    <div class="input-group">
			      <span class="input-group-addon span-bold">Email</span>
			      <input id="email" name="email" class="form-control" placeholder="Votre adresse email" type="text" value="<?= $email ?>">
			    </div>
			  </div>
			</div>

			<!-- Date de naissance-->
			<div class="form-group">
			  <div class="col-sm-offset-4 col-sm-4">
			    <div class="input-group">
			      <span class="input-group-addon span-bold">Date de naissance</span>
			      <input id="birthdate" name="birthdate" class="form-control" type="date"value="<?= $birthdate ?>" >
			    </div>
			  </div>
			</div>

			<!-- Téléphone -->
			<div class="form-group">
			  <div class="col-sm-offset-4 col-sm-4">
			    <div class="input-group">
			      <span class="input-group-addon span-bold">Téléphone</span>
			      <input id="phonenumber" name="phonenumber" class="form-control" placeholder="Votre numéro de mobile" type="tel" value="<?= $phonenumber ?>">
			    </div>
			    <small class="help-block">*facultatif</small>
			  </div>
			</div>

			<!-- Mot de passe -->
			<div class="form-group">
			  <div class="col-sm-offset-4 col-sm-4">
			    <div class="input-group">
			      <span class="input-group-addon span-bold">Mot de passe</span>
			      <input id="password" name="password" class="form-control" placeholder="Votre mot de passe" type="password" >
			    </div>
			  </div>
			</div>

			<!-- Confirmation -->
			<div class="form-group">
			  <div class="col-sm-offset-4 col-sm-4">
			    <div class="input-group">
			      <span class="input-group-addon span-bold">Confirmation</span>
			      <input id="passwordConfirm" name="passwordConfirm" class="form-control"  placeholder="Votre mot de passe" type="password" >
			    </div>
			  </div>
			</div>

			<!-- reCaptcha API -->
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-4">
						<div class="g-recaptcha" name="recaptcha" data-sitekey="6LeprRQUAAAAANaL1d0A7ywc8Sl6ldhbmzrGZBH6"></div>
				</div>
			</div>

			<!-- Button -->
			<div class="form-group">
			  <div class="col-sm-offset-4 col-sm-4">
			    <button id="envoyer" name="envoyer" class="btn btn-primary">Envoyer</button>
			  </div>
			</div>
		</fieldset>
	</form>
</div>

<?php
	 // on nettoie les données précédentes
	unset($_SESSION['inputs']);
	unset($_SESSION['success']);
	unset($_SESSION['errors']);
?>

<?php $this->stop('main_content') ?>
