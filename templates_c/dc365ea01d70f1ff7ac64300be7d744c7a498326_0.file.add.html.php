<?php
/* Smarty version 3.1.30, created on 2018-09-23 17:55:35
  from "C:\xampp\htdocs\forage\view\village\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ba7b777e3f0d6_57628497',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc365ea01d70f1ff7ac64300be7d744c7a498326' => 
    array (
      0 => 'C:\\xampp\\htdocs\\forage\\view\\village\\add.html',
      1 => 1537718099,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba7b777e3f0d6_57628497 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ajout d'un nouveau Village</title>
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

 <div class="nav navbar navbar-default navbar-fixed-top">
      <ul class="nav navbar-nav">
        <!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Village/index">Accueil Village</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Village/add">Ajouter un nouveau Village</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Village/liste">Liste des Villages clients</a></li>
      </ul>
    </div>

<body>
	<div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:150px;">
			<div class="panel panel-info">
				<div class="panel-heading">Ajout d'un Village !</div>
				<div class="panel-body">
					<form method="post" action="">
						<div class="form-group">
							<label class="control-label">Numéro Village</label>
							<input class="form-control" type="text" name="idVillage" id="idVillage"/>
						</div>
						<div class="form-group">
							<label class="control-label">Nom Village</label>
							<input class="form-control" type="text" name="nomVillage" id="nomVillage"/>
						</div>
						<div class="form-group">
							<label class="control-label">Nom du Chef</label>
							<input class="form-control" type="text" name="nomChef" id="nomChef"/>
						</div>
						<div class="form-group">
							<label class="control-label">Prénom du Chef</label>
							<input class="form-control" type="text" name="prenomChef" id="prenomChef"/>
						</div>
						<div class="form-group">
							<label class="control-label">Téléphone du Chef</label>
							<input class="form-control" type="text" name="telephoneChef" id="telephoneChef"/>
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
