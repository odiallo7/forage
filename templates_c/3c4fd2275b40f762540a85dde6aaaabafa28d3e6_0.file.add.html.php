<?php
/* Smarty version 3.1.30, created on 2018-09-24 18:55:16
  from "C:\xampp\htdocs\forage\view\compteur\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ba916f4599248_18647587',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c4fd2275b40f762540a85dde6aaaabafa28d3e6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\forage\\view\\compteur\\add.html',
      1 => 1537808113,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba916f4599248_18647587 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Gestion Clients</title>
	<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
	<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/samane.css"/>
</head>

	 <div class="nav navbar navbar-default navbar-fixed-top">
      <ul class="nav navbar-nav">
        <!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
compteur/index">Accueil Compteur</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
compteur/add">Ajouter Un Compteur</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
compteur/liste">Consommation des Compteurs</a></li>
      </ul>
    </div>

<body>
	<div class="col-md-6 col-xs-12 col-md-offset-3" style="margin-top:100px; ">
			<div class="panel panel-info">
				<div class="panel-heading">Raccordement de compteur Client!</div>
				<div class="panel-body">
					<form method="post" action="">
						<div class="form-group">
							<label class="control-label">Numéro Compteur</label>
							<input class="form-control" type="text" name="idCompteur" id="idCompteur"/>
						</div>
						<div class="form-group">
							<label class="control-label">Compteur Consommation </label>
							<input class="form-control" type="text" name="compteur" id="compteur"/>
						</div>						
						<div class="form-group">
							<label class="control-label">Etat du Compteur</label>
							<input class="form-control" type="boolean" name="etatCompteur" id="etatCompteur"/>
						</div>
						<div class="form-group">
							<label class="control-label"> Numéro du Client </label>
							<input class="form-control" type="text" name="idClient" id="idClient"/>
						</div>
						<div class="form-group">
							<input class="btn btn-success" type="submit" name="valider" value="Envoyer"/>
							<a class="btn btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
compteur/index">Annuler </a>
						</div>
					</form>
				</div>
			</div>
		</div>
</body>
</html><?php }
}
