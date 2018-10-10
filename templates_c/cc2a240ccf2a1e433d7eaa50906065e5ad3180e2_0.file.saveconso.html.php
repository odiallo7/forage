<?php
/* Smarty version 3.1.30, created on 2018-10-08 19:24:00
  from "C:\xampp\htdocs\forage\view\compteur\saveconso.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bbb92b07d3307_65580084',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc2a240ccf2a1e433d7eaa50906065e5ad3180e2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\forage\\view\\compteur\\saveconso.html',
      1 => 1539019436,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbb92b07d3307_65580084 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Enregistrer Conso</title>
		<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/samane.css"/>
		<style>
			h1{ 
				color: #40007d;
			}
		</style>
	</head>
	<body>
		<img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/logo.jpg" class="resize" />
		<div class="nav navbar navbar-default navbar-fixed-top">
			<ul class="nav navbar-nav">
				<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compteur/index">Accueil Compteur</a></li>
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
				<div class="panel-heading">ENREGISTREMENT CONSOMMATION</div>
				<div class="panel-body">			
							
					<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compteur/saveconso">
						<div class="form-group">
							<label class="control-label">ID Compteur</label>
							<input class="form-control" type="text" name="idCompteur" id="idCompteur"/>
						</div>
						<div class="form-group">
							<label class="control-label">Consommation</label>
							<input class="form-control" type="text" name="indexCompteur" id="indexCompteur"/>
						</div>						
						<div class="form-group">
							<input class="btn btn-success" type="submit" name="valider" value="Envoyer"/>
							<input class="btn btn-danger" type="reset" name="annuler" value="Annuler"/>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html><?php }
}
