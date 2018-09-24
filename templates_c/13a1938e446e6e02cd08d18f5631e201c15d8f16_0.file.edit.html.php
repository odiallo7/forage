<?php
/* Smarty version 3.1.30, created on 2018-09-23 18:03:44
  from "C:\xampp\htdocs\forage\view\village\edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ba7b9609a5c14_38972167',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13a1938e446e6e02cd08d18f5631e201c15d8f16' => 
    array (
      0 => 'C:\\xampp\\htdocs\\forage\\view\\village\\edit.html',
      1 => 1537718115,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba7b9609a5c14_38972167 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>page get id</title>
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
		
		<img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/logo.jpg" class="resize" />
		
		<div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:150px;">
			<div class="panel panel-info">
				<div class="panel-heading">Modification d'un village</div>
				<div class="panel-body">
					<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Village/update">
						<div class="form-group">
							<label class="control-label">Numéro Village</label>
							<input class="form-control" type="text" name="idVillage" id="idVillage" value="<?php if (isset($_smarty_tpl->tpl_vars['village']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['village']->value['idVillage'];?>
 <?php }?>"/>
						</div>
						<div class="form-group">
							<label class="control-label">Nom Village</label>
							<input class="form-control" type="text" name="nomVillage" id="nomVillage" value="<?php if (isset($_smarty_tpl->tpl_vars['village']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['village']->value['nomVillage'];?>
 <?php }?>"/>
						</div>
						<div class="form-group">
							<label class="control-label">Nom Chef</label>
							<input class="form-control" type="text" name="nomChef" id="nomChef" value="<?php if (isset($_smarty_tpl->tpl_vars['village']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['village']->value['nomChef'];?>
 <?php }?>"/>
						</div>
						<div class="form-group">
							<label class="control-label">Prénom Chef</label>
							<input class="form-control" type="text" name="prenomChef" id="prenomChef" value="<?php if (isset($_smarty_tpl->tpl_vars['village']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['village']->value['prenomChef'];?>
 <?php }?>"/>
						</div>
						<div class="form-group">
							<label class="control-label">Téléphone Chef</label>
							<input class="form-control" type="text" name="telephoneChef" id="telephoneChef" value="<?php if (isset($_smarty_tpl->tpl_vars['village']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['village']->value['telephoneChef'];?>
 <?php }?>"/>
						</div>
						<div class="form-group">
							<input class="btn btn-success" type="submit" name="modifier" value="Modifier"/>
							<a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Village/liste">Retour</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html><?php }
}
