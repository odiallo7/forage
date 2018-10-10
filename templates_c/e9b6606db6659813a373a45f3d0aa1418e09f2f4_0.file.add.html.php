<?php
/* Smarty version 3.1.30, created on 2018-10-10 14:41:24
  from "C:\xampp\htdocs\forage\view\client\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bbdf374d91a88_21352107',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9b6606db6659813a373a45f3d0aa1418e09f2f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\forage\\view\\client\\add.html',
      1 => 1539175014,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbdf374d91a88_21352107 (Smarty_Internal_Template $_smarty_tpl) {
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
	<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/favicon.ico">
</head>

	 <div class="nav navbar navbar-default navbar-fixed-top">
      <ul class="nav navbar-nav">
        <!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Client/index">Accueil Client</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Client/add">Ajouter Un Client</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Client/liste">Liste des clients</a></li>
      </ul>
    </div>

<body>
	<div class="col-md-6 col-xs-12 col-md-offset-3" style="margin-top:100px; ">
			<div class="panel panel-info">
				<div class="panel-heading">Abonnement d'un Client !</div>
				<div class="panel-body">
					<form method="post" action="">
						<div class="form-group">
							<label class="control-label">Numéro Client</label>
							<input class="form-control" type="text" name="idClient" id="idClient"/>
						</div>
						<div class="form-group">
							<label class="control-label">Nom </label>
							<input class="form-control" type="text" name="nomClient" id="nomClient"/>
						</div>
						<div class="form-group">
							<label class="control-label">Prénom </label>
							<input class="form-control" type="text" name="prenomClient" id="prenomClient"/>
						</div>
						<div class="form-group">
							<label class="control-label">Téléphone</label>
							<input class="form-control" type="text" name="telephoneClient" id="telephoneClient"/>
						</div>
						<div class="form-group">
						    <label for="control-label"> Village de Résidence</label>
						    <select id="idVillage" name="idVillage" class="form-control">
						        <option value="">-------------</option>
						      	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['villages']->value, 'village');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['village']->value) {
?>
						      		<option value="<?php echo $_smarty_tpl->tpl_vars['village']->value['idVillage'];?>
"> <?php echo $_smarty_tpl->tpl_vars['village']->value['nomVillage'];?>
</option>
						      	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

						    </select>
						  </div>

						 <div class="form-group">
						     <label for="control-label"> Abonnement</label>
						     <select id="numero" name="numero" class="form-control">
						         <option value="">-------------</option>
						       	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['abonnements']->value, 'abonnement');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['abonnement']->value) {
?>
						       		<option value="<?php echo $_smarty_tpl->tpl_vars['abonnement']->value['numero'];?>
"> <?php echo $_smarty_tpl->tpl_vars['abonnement']->value['description'];?>
</option>						 
						       	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

						     </select>
						   </div>  
						<div class="form-group">
							<label class="control-label">Date</label>
							<input class="form-control" type="Date" name="dateAb" id="dateAb"/>
						</div>
						<div class="form-group">
							<input class="btn btn-success" type="submit" name="valider" value="Envoyer"/>
							<a class="btn btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Client/index">Annuler </a>
						</div>
					</form>
				</div>
			</div>
		</div>
</body>
</html><?php }
}
