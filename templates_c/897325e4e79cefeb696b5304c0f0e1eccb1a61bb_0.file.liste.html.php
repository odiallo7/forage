<?php
/* Smarty version 3.1.30, created on 2018-10-10 18:27:52
  from "C:\xampp\htdocs\forage\view\village\liste.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bbe2888f02123_68264837',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '897325e4e79cefeb696b5304c0f0e1eccb1a61bb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\forage\\view\\village\\liste.html',
      1 => 1539175058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbe2888f02123_68264837 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <title> Liste des Villages </title>

    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/dataTables.jqueryui.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/jquerydataTables.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/datatables.min.css"> 
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/favicon.ico">

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/bootstrap.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/datatables.min.js"><?php echo '</script'; ?>
> 
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/jquery-3.1.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/dataTables.bootstrap.min.js"><?php echo '</script'; ?>
>

        <?php echo '<script'; ?>
 type="text/javascript">
            $(document).ready(function() {
            $('#table').DataTable();
            $('.dataTables_length').addClass('bs-select');
            });
        <?php echo '</script'; ?>
>

    
        <!-- <style>   
            body{
                margin-left: 20px;text-align: center;
            }
        </style> -->

</head>
<body>
    <div class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top">
    <ul class="nav navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compteur/index"> Accueil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Village/add">Ajouter villages</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Village/liste">Liste Villages</a>
      </li>
    </ul>
  </div>

    <div class="container" style="margin-top: 60px">
     <h1>La liste de villages de SenForage !</h1>
    <?php if (isset($_smarty_tpl->tpl_vars['villages']->value)) {?>
       <?php if ($_smarty_tpl->tpl_vars['villages']->value != null) {?>
    <table width="100%" id="table" class="table table-striped table-bordered" cellspacing="0">
      <thead>
        <tr>
            <th>Numéro</th>
            <th>Nom du Village</th>
            <th>Nom Chef</th>
            <th>Prénom Chef</th>   
            <th>Téléphone Chef</th>
            <th>Supprimer</th>
            <th>Modifier</th>
        </tr>
      </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['villages']->value, 'village');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['village']->value) {
?>
          <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['village']->value['idVillage'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['village']->value['nomVillage'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['village']->value['nomChef'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['village']->value['prenomChef'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['village']->value['telephoneChef'];?>
</td>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Village/delete/<?php echo $_smarty_tpl->tpl_vars['village']->value['idVillage'];?>
"> <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/delete16.png" class="resize"/>Supprimer</a></td>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Village/edit/<?php echo $_smarty_tpl->tpl_vars['village']->value['idVillage'];?>
"> <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/edit16.png" class="resize" />Editer</a></td>
          </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </tbody>
    </table>
       <?php } else { ?>
         Liste vide
       <?php }?>
   <?php }?>
    </div>
</body>
</html><?php }
}
