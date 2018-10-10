<?php
/* Smarty version 3.1.30, created on 2018-10-10 18:27:48
  from "C:\xampp\htdocs\forage\view\village\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bbe2884b0c7c5_14988079',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4685f760f5df803bbfd3937a79db00499d5f308' => 
    array (
      0 => 'C:\\xampp\\htdocs\\forage\\view\\village\\index.html',
      1 => 1539188860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbe2884b0c7c5_14988079 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Village</title>
    <!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/samane.css"/>
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/favicon.ico">
  </head>
  <body>
    <div class="nav navbar navbar-default navbar-fixed-top">
      <ul class="nav navbar-nav">
        <!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compteur/index">Accueil </a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Village/add">Ajouter un nouveau Village</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Village/liste">Liste des Villages clients</a></li>
      </ul>
    </div>
    <div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:150px;">
      <div class="panel panel-info">
        <div class="panel-heading">BIENVENUE AU MENU DE GESTION DES VILLAGES DE SENFORAGE</div>
        <div class="panel-body">
          <div class="alert alert-success" style="font-size:18px; text-align:justify;">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </div>
        </div>
      </div>
    </div>
    
  </body>
</html>
    
<?php }
}
