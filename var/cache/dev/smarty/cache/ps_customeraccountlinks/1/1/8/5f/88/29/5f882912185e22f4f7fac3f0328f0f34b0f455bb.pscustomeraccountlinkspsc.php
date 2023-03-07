<?php
/* Smarty version 3.1.33, created on 2022-12-05 12:05:58
  from 'module:pscustomeraccountlinkspsc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_638dd096228c29_07076974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:pscustomeraccountlinkspsc',
      1 => 1670238233,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_638dd096228c29_07076974 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
));
?><!-- begin /var/www/html/themes/blck/modules/ps_customeraccountlinks/ps_customeraccountlinks.tpl -->
<div id="block_myaccount_infos" class="col-lg-3 links wrapper">
    <p class="footer__title footer__title--desktop">Votre compte</p>
    <a href="#footer_account_list" class="footer__title--mobile footer__title" data-toggle="collapse">Votre compte</a>
  <ul class="account-list collapse show" data-collapse-hide-mobile id="footer_account_list">
            <li>
          <a href="http://localhost:8080/index.php?controller=identity" title="Informations personnelles" rel="nofollow">
            Informations personnelles
          </a>
        </li>
            <li>
          <a href="http://localhost:8080/index.php?controller=history" title="Commandes" rel="nofollow">
            Commandes
          </a>
        </li>
            <li>
          <a href="http://localhost:8080/index.php?controller=order-slip" title="Avoirs" rel="nofollow">
            Avoirs
          </a>
        </li>
            <li>
          <a href="http://localhost:8080/index.php?controller=addresses" title="Adresses" rel="nofollow">
            Adresses
          </a>
        </li>
        
	</ul>
</div>
<!-- end /var/www/html/themes/blck/modules/ps_customeraccountlinks/ps_customeraccountlinks.tpl --><?php }
}
