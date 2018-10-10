<?php
/* Smarty version 3.1.30, created on 2018-10-10 18:34:30
  from "C:\xampp\htdocs\forage\view\compteur\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bbe2a168f5a37_45336936',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c4fd2275b40f762540a85dde6aaaabafa28d3e6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\forage\\view\\compteur\\add.html',
      1 => 1539189005,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbe2a168f5a37_45336936 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Compteur</title>
		<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/samane.css"/>

		<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/favicon.ico">
		
	</head>
	<body>S
		<div class="nav navbar navbar-default navbar-fixed-top">
			<ul class="nav navbar-nav">
				<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compteur/index">Accueil </a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compteur/add">Ajour d'un Compteur</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compteur/liste">Liste des Compteurs</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compteur/saveconso">Enregistrer Consommation</a></li>
			</ul>
		</div>
		<div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:150px;">
			<div class="panel panel-info">
				<div class="panel-heading">AJOUT D'UN COMPTEUR CLIENT</div>
				<div class="panel-body">			
							
					<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compteur/add">
						<div class="form-group">
							<label class="control-label">ID Compteur</label>
							<input class="form-control" type="text" name="idCompteur" id="idCompteur"/>
						</div>
						<!-- <div class="form-group">
							<label class="control-label">Index du Compteur</label>
							<input class="form-control" type="text" name="indexCompteur" id="indexCompteur"/>
						</div>
						<div class="form-group">
							<label class="control-label">Consommation</label>
							<input class="form-control" type="text" name="conso" id="conso"/>
						</div> -->
						<!-- <div class="form-group">
							<label class="control-label">Etat</label>
							<input class="form-control" type="text" name="etatCompteur" id="etatCompteur"/>
						</div> -->
						<div class="form-group">
						    <label for="control-label"> Etat du Compteur</label>
						    <select id="etatCompteur" name="etatCompteur" class="form-control">
						        <option value="">-------------</option>						      	
						      		<option value="1"> Marche</option>
						      		<option value="0"> Arret</option>						      	
						    </select>
						  </div>
						<div class="form-group">
							<label class="control-label">Client</label>
							<input class="form-control" type="text" name="idClient" id="idClient"/>
						</div>
						<div class="form-group">
							<input class="btn btn-success" type="submit" name="valider" value="Envoyer"/>
							<a class="btn btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compteur/index">Annuler </a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html><?php }
}
