<?php
/* Smarty version 3.1.30, created on 2018-09-25 19:03:48
  from "C:\xampp\htdocs\forage\view\compteur\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5baa6a740acd84_25658624',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '609f9872bc23c6b75470b250831fb1c25244fad1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\forage\\view\\compteur\\index.html',
      1 => 1537895024,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5baa6a740acd84_25658624 (Smarty_Internal_Template $_smarty_tpl) {
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
Compteur/index">Accueil Compteur</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compteur/add">Ajouter Un Compteur</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compteur/liste">Liste des Compteurs</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compteur/saveconso">Enregistrer Conso</a></li>
      </ul>
    </div>
<body>
	<h1 style="text-align: center; margin-top: 100px;"> Gestion des Compteurs</h1>

	<p style="text-align: center; margin-left: 100px; margin-right: 100px">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</p>

</body>
</html><?php }
}
