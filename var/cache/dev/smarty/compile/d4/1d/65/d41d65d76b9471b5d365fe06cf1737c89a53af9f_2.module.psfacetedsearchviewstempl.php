<?php
/* Smarty version 3.1.33, created on 2022-12-05 12:18:10
  from 'module:psfacetedsearchviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_638dd372d1eec5_71677433',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd41d65d76b9471b5d365fe06cf1737c89a53af9f' => 
    array (
      0 => 'module:psfacetedsearchviewstempl',
      1 => 1670238233,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638dd372d1eec5_71677433 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!-- begin /var/www/html/themes/blck/modules/ps_facetedsearch/views/templates/front/catalog/facets.tpl --><?php if (count($_smarty_tpl->tpl_vars['displayedFacets']->value)) {?>
  <div id="search_filters" class="search_filters">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1860095594638dd372d06e84_35371498', 'facets_title');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2003180962638dd372d07e21_46270877', 'facets_clearall_button');
?>


    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['displayedFacets']->value, 'facet');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['facet']->value) {
?>

        <?php $_smarty_tpl->_assignInScope('_expand_id', mt_rand(10,100000));?>
        <?php $_smarty_tpl->_assignInScope('_collapse', true);?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
?>
            <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {
$_smarty_tpl->_assignInScope('_collapse', false);
}?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <section class="facet__block">
          <div class="facet__header">
              <p class="facet__title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value['label'], ENT_QUOTES, 'UTF-8');?>
</p>
              <a href="#facet_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="icon-collapse visible--mobile stretched-link" data-toggle="collapse"<?php if (!$_smarty_tpl->tpl_vars['_collapse']->value) {?> aria-expanded="true"<?php }?>>
                  <i class="material-icons">&#xE313;</i>
              </a>
          </div>


        <?php if (in_array($_smarty_tpl->tpl_vars['facet']->value['widgetType'],array('radio','checkbox'))) {?>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1185151906638dd372d0e454_22710492', 'facet_item_other');
?>


        <?php } elseif ($_smarty_tpl->tpl_vars['facet']->value['widgetType'] == 'dropdown') {?>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1399936678638dd372d16d54_51986054', 'facet_item_dropdown');
?>


        <?php } elseif ($_smarty_tpl->tpl_vars['facet']->value['widgetType'] == 'slider') {?>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54687625638dd372d1a645_33463150', 'facet_item_slider');
?>

        <?php }?>
      </section>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
<?php }?>
<!-- end /var/www/html/themes/blck/modules/ps_facetedsearch/views/templates/front/catalog/facets.tpl --><?php }
/* {block 'facets_title'} */
class Block_1860095594638dd372d06e84_35371498 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facets_title' => 
  array (
    0 => 'Block_1860095594638dd372d06e84_35371498',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <p class="text-uppercase h6 visible--desktop"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter By','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</p>
    <?php
}
}
/* {/block 'facets_title'} */
/* {block 'facets_clearall_button'} */
class Block_2003180962638dd372d07e21_46270877 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facets_clearall_button' => 
  array (
    0 => 'Block_2003180962638dd372d07e21_46270877',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if (count($_smarty_tpl->tpl_vars['activeFilters']->value)) {?>
        <div class="clear-all-wrapper">
          <button data-search-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['clear_all_link']->value, ENT_QUOTES, 'UTF-8');?>
" class="btn--clearfilter btn btn-sm btn-block btn-outline-secondary js-search-filters-clear-all">
            <i class="material-icons">&#xE14C;</i>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Clear all','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </button>
        </div>
      <?php }?>
    <?php
}
}
/* {/block 'facets_clearall_button'} */
/* {block 'facet_item_other'} */
class Block_1185151906638dd372d0e454_22710492 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facet_item_other' => 
  array (
    0 => 'Block_1185151906638dd372d0e454_22710492',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="facet_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="collpase--facet collapse<?php if (!$_smarty_tpl->tpl_vars['_collapse']->value) {?> show<?php }?>">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter', false, 'filter_key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filter_key']->value => $_smarty_tpl->tpl_vars['filter']->value) {
?>
                <?php if (!$_smarty_tpl->tpl_vars['filter']->value['displayed']) {?>
                  <?php continue 1;?>
                <?php }?>
                  <div class="custom-control custom-<?php if ($_smarty_tpl->tpl_vars['facet']->value['multipleSelectionAllowed']) {?>checkbox<?php } else { ?>radio<?php }
if (isset($_smarty_tpl->tpl_vars['filter']->value['properties']['color']) || isset($_smarty_tpl->tpl_vars['filter']->value['properties']['texture'])) {?> custom-color<?php }
if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?> custom-control--active<?php }?>">
                      <input
                              id="facet_input_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_key']->value, ENT_QUOTES, 'UTF-8');?>
"
                              data-search-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"
                              type="<?php if ($_smarty_tpl->tpl_vars['facet']->value['multipleSelectionAllowed']) {?>checkbox<?php } else { ?>radio<?php }?>"
                              class="custom-control-input"
                              <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?> checked<?php }?>
                      >
                      <label class="custom-control-label" for="facet_input_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_key']->value, ENT_QUOTES, 'UTF-8');?>
">
                          <?php if (isset($_smarty_tpl->tpl_vars['filter']->value['properties']['color'])) {?>
                              <span class="color" style="background-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['properties']['color'], ENT_QUOTES, 'UTF-8');?>
"></span>
                          <?php } elseif (isset($_smarty_tpl->tpl_vars['filter']->value['properties']['texture'])) {?>
                              <span class="color texture" style="background-image:url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['properties']['texture'], ENT_QUOTES, 'UTF-8');?>
)"></span>
                          <?php }?>
                          <span class="color__label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

                                                                                                            </span>
                      </label>
                  </div>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
          <?php
}
}
/* {/block 'facet_item_other'} */
/* {block 'facet_item_dropdown'} */
class Block_1399936678638dd372d16d54_51986054 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facet_item_dropdown' => 
  array (
    0 => 'Block_1399936678638dd372d16d54_51986054',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <div id="facet_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="collpase--facet collapse<?php if (!$_smarty_tpl->tpl_vars['_collapse']->value) {?> show<?php }?>">
                      <select class="custom-select">
                          <option value="">---</option>
                          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
?>
                              <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?> selected="selected"<?php }?>>
                                  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

                                  <?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude'] && $_smarty_tpl->tpl_vars['show_quantities']->value) {?>
                                      (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['magnitude'], ENT_QUOTES, 'UTF-8');?>
)
                                  <?php }?>
                              </option>
                          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                      </select>

                  </div>
          <?php
}
}
/* {/block 'facet_item_dropdown'} */
/* {block 'facet_item_slider'} */
class Block_54687625638dd372d1a645_33463150 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facet_item_slider' => 
  array (
    0 => 'Block_54687625638dd372d1a645_33463150',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
?>
              <ul id="facet_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                class="faceted-slider"
                data-slider-min="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value['properties']['min'], ENT_QUOTES, 'UTF-8');?>
"
                data-slider-max="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value['properties']['max'], ENT_QUOTES, 'UTF-8');?>
"
                data-slider-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                data-slider-values="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value['value'] )), ENT_QUOTES, 'UTF-8');?>
"
                data-slider-unit="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value['properties']['unit'], ENT_QUOTES, 'UTF-8');?>
"
                data-slider-label="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value['label'], ENT_QUOTES, 'UTF-8');?>
"
                data-slider-specifications="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['facet']->value['properties']['specifications'] )), ENT_QUOTES, 'UTF-8');?>
"
                data-slider-encoded-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"
              >
                <li>
                  <p id="facet_label_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

                  </p>

                  <div id="slider-range_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
"></div>
                </li>
              </ul>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <?php
}
}
/* {/block 'facet_item_slider'} */
}
