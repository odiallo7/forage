<?php
/* Smarty version 3.1.30, created on 2018-10-10 18:14:55
  from "C:\xampp\htdocs\forage\view\facture\caisse.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bbe257f5c4066_41696977',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55c5b413c167e42fe09ea389f426520eaefe3586' => 
    array (
      0 => 'C:\\xampp\\htdocs\\forage\\view\\facture\\caisse.html',
      1 => 1539188085,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbe257f5c4066_41696977 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Caisse</title>
		<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/samane.css"/>
		<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/favicon.ico">
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/jquery.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/bootstrap.js"><?php echo '</script'; ?>
>
		
	</head>
	<body>

		<div class="nav navbar navbar-default navbar-fixed-top">
			<ul class="nav navbar-nav">
				<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compteur/index">Accueil </a></li>
				<li><a href="#">Liste des Factures impayées</a></li>

			</ul>
		</div>


		<?php if (isset($_smarty_tpl->tpl_vars['ok']->value)) {?>
			<?php if ($_smarty_tpl->tpl_vars['ok']->value != 0) {?>
		<div class="alert alert-success alert-dismissible" style="width: 50%; margin-left: 25%; margin-top: 80px;">
		   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		   <strong>Success!</strong> Facture Payée
		</div>
		 <?php } else { ?>
		 <div class="alert alert-warning alert-dismissible" style="width: 50%; margin-left: 25%; margin-top: 100px;">
		     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		     <strong>Erreur !</strong> Reprennez le processus!
		   </div>
		 	<?php }?>
		 <?php }?>

		<div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:120px;">
			<div class="panel panel-info">
				<div class="panel-heading">REGLEMENT DE FACTURE</div>
				<div class="panel-body">			
							
					<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Facture/payer">
						<div class="form-group">
							<label class="control-label">Numéro de la Facture</label>
							<input class="form-control" type="text" name="idFacture" id="idFacture"/>
						</div>			
						<div class="form-group">
							<input class="btn btn-success" type="submit" name="valider" value="Envoyer"/>
							<a class="btn btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compteur/index">Terminer </a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html><?php }
}
