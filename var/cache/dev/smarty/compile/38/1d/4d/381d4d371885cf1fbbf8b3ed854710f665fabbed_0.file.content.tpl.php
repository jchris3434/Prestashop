<?php
/* Smarty version 3.1.33, created on 2022-12-05 12:05:17
  from '/var/www/html/admin_jc_baby/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_638dd06d884234_83230962',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '381d4d371885cf1fbbf8b3ed854710f665fabbed' => 
    array (
      0 => '/var/www/html/admin_jc_baby/themes/new-theme/template/content.tpl',
      1 => 1600952248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638dd06d884234_83230962 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
