<?php
/* Smarty version 3.1.33, created on 2022-12-05 12:17:53
  from 'module:psfeaturedproductsviewste' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_638dd361b29c63_81686085',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa6cc378d2942c8857b89d6bca728048c0caeedd' => 
    array (
      0 => 'module:psfeaturedproductsviewste',
      1 => 1670238233,
      2 => 'module',
    ),
    '0ecbdbb6a4d37afb62fca84cb80a0bf3c714355f' => 
    array (
      0 => '/var/www/html/themes/blck/templates/catalog/_partials/miniatures/product.tpl',
      1 => 1670238233,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_638dd361b29c63_81686085 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /var/www/html/themes/blck/modules/ps_featuredproducts/views/templates/hook/ps_featuredproducts.tpl --><section class="featured-products clearfix">
  <p class="products-section-title">
    Produits populaires
  </p>
    <div class="products products-slick spacing-md-top" data-slick='{"slidesToShow": 1,"slidesToScroll": 1,"mobileFirst":true,"arrows":true,"rows":0,"responsive": [{"breakpoint": 992,"settings":"unslick"},{"breakpoint": 720,"settings":"unslick"},{"breakpoint": 540,"settings":"unslick"}]}'>
          
    <article class="product-miniature js-product-miniature mb-3" data-id-product="23" data-id-product-attribute="0">
        <div class="card card-product">

            <div class="card-img-top product__card-img">
                
                    <a href="http://localhost:8080/index.php?id_product=23&amp;rewrite=negra-modelo&amp;controller=product" class="thumbnail product-thumbnail rc ratio1_1">
                                                    <img
                                    data-src = "http://localhost:8080/img/p/2/7/27-home_default.jpg"
                                    alt = "Negra Modelo"
                                    data-full-size-image-url = "http://localhost:8080/img/p/2/7/27-large_default.jpg"
                                    class="lazyload"
                            >
                                            </a>
                
                <div class="highlighted-informations text-center p-2 no-variants visible--desktop">
                    
                        <span class="quick-view" data-link-action="quickview">
                      <i class="material-icons search">&#xE8B6;</i> Aperçu rapide
                  </span>
                    

                    
                                            
                </div>
            </div>
            
            <div class="card-body">
                <div class="product-description product__card-desc">
                    
                                                    <p class="h3 product-title"><a href="http://localhost:8080/index.php?id_product=23&amp;rewrite=negra-modelo&amp;controller=product">Negra Modelo</a></p>
                                            
                    
                        
                    
                    
                                                    <div class="product-price-and-shipping text-center">
                                
                                

                                <span class="sr-only">Prix</span>
                                <span class="price">2,16 €</span>


                                

                                

                                <form class="pl_atc mt-2" action="http://localhost:8080/index.php?controller=cart" method="post">
                                   <input type="hidden" name="token" value="195caf1a3839666e19106b65fa1a4848">
                                   <input type="hidden" value="23" name="id_product">
                                   <input type="number" class="input-group form-control" name="qty" value="1">
                                   <button data-button-action="add-to-cart"  class="btn btn-primary">Ajouter au panier</button>
                                </form>
                            </div>
                                            


                </div>

            </div>
                        
                <ul class="product-flags">
                                            <li class="product-flag new">Neuf</li>
                                                        </ul>
            
        </div>
        


    </article>

        </div>
  <a class="all-product-link float-left float-md-right" href="http://localhost:8080/index.php?id_category=2&amp;controller=category">
    Tous les produits<i class="material-icons">&#xE315;</i>
  </a>
</section>
<!-- end /var/www/html/themes/blck/modules/ps_featuredproducts/views/templates/hook/ps_featuredproducts.tpl --><?php }
}
