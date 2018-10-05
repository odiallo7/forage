<?php
/* Smarty version 3.1.30, created on 2018-09-25 19:02:36
  from "C:\xampp\htdocs\forage\view\compteur\liste.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5baa6a2c325331_00871245',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c963d5fd1ca4b855af769f61675efdf6cf9753db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\forage\\view\\compteur\\liste.html',
      1 => 1537894872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5baa6a2c325331_00871245 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <title> Liste des Compteurs </title>

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
      <li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compteur/index"> Accueil Compteur</a></li>
      <li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compteur/add">Ajouter Compteur</a></li>
      <li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compteur/liste">Liste des Compteurs</a></li>
      <li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compteur/saveconso">Enregistrer Consommation</a></li>
    </ul>
  </div>
    
     
    <div class="container" style="margin-top: 60px;">
      
      <div class="col-md-8 offset-md-2">
        <h1 style="text-align: center;">La liste des compteurs de SenForage !</h1>
    <?php if (isset($_smarty_tpl->tpl_vars['compteurs']->value)) {?>
       <?php if ($_smarty_tpl->tpl_vars['compteurs']->value != null) {?>
    <table width="100%" id="table" class="table table-striped table-bordered text-center" cellspacing="0">
      <thead>
        <tr>
            <th>Numéro </th>
            <th>Consommation</th>
            <th>Etat </th>
            <th>Client</th>           
            <th>Couper</th>
            <th>Allumer</th>
        </tr>
      </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['compteurs']->value, 'compteur');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['compteur']->value) {
?>
          <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['compteur']->value['idCompteur'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['compteur']->value['compteur'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['compteur']->value['etatCompteur'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['compteur']->value['idClient'];?>
</td>          
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Village/delete/<?php echo $_smarty_tpl->tpl_vars['village']->value['idVillage'];?>
"> <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/stop-red16.png"/>Couper</a></td>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Village/edit/<?php echo $_smarty_tpl->tpl_vars['village']->value['idVillage'];?>
"> <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/start16.png"/>Allumer</a></td>
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
   </div>
</body>
</html><?php }
}
