<?
require_once("model/components/session.inc.php");
require_once("model/components/MenuBuilderPL.inc.php");
$objAppSession=new AppSession();
$SN = $objAppSession->getSession('SN');
require_once("model/components/translator.inc.php");
$sLang = $objAppSession->getSession('sLang');
$oT = new Translator('template3',$sLang);
?>

		<!-- BEGIN NAVIGATION -->
	    <header>
			<nav class="navbar navbar-default navbar-main navbar-main-slide" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span> 
							<span class="icon-bar"></span> 
							<span class="icon-bar"></span> 
							<span class="icon-bar"></span> 
						</button>
						<a href="<?=$SN?>musikkgaver.html"><img src="<?=$SN?>images/musikkgaver_logo.jpg" alt="Musikkgaver"></a>
					</div>
					<ul class="nav navbar-nav navbar-nav navbar-right hidden-xs hidden-sm">
						<li class="search">
							<a href="javascript:void(0);" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-search"></i></a>
						</li>
						<li class="menu-shop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-shopping-cart"></i></a>
							<div class="dropdown-menu" style="padding:30px 10px 10px 10px;">
								<?$arrProduct = $event->getArg('arrProduct');?>
								<?if($arrProduct) {?>
									<ul class="list-unstyled list-thumbs-pro">
										  <?$objAppSession = new AppSession();
										  $arrShoppingCartItems = $objAppSession->getSession("ShoppingCartItems");?>
										  <?$cartTotal = 0;?>
										  <?$totalBasketItems = 0;?>
											<?$totalPoints = 0;?>
											<?$cartWeightTotal = 0;?>
											<?
											foreach($arrProduct as $objProduct) { 
											$quantity = $arrShoppingCartItems[$objProduct->getProductId()];
											$totalBasketItems = $totalBasketItems + $quantity; 
											$total = $objProduct->getPrice() * $quantity;
											$totalPoints = $totalPoints + $objProduct->getPoints() * $quantity;
											$cartTotal += $arrShoppingCartItems[$objProduct->getProductId()] * $objProduct->getPrice();
											$cartWeightTotal += $arrShoppingCartItems[$objProduct->getProductId()] * $objProduct->getWeight();?>
											<li class="product">
												<div class="product-thumb-info">
													<div class="product-thumb-info-image">
														<a href="<?=$SN?>product/<?=$objProduct->getSeoName()?>/<?=$objProduct->getProductId()?>.html"><img src="<?=$SN?>upload/micro/<?=$objProduct->getImgDriveName();?>" width="60px"></a>
													</div>
													<div class="product-thumb-info-content">
														<div style="float:left;">
															<h4><a href="<?=$SN?>product/<?=$objProduct->getSeoName()?>/<?=$objProduct->getProductId()?>.html"><?=$objProduct->getName()?></a></h4>
															<span class="price"><?=$objProduct->getPrice();?> NOK</span>
															
														</div>
														<div style="float:right;">
															<?=$oT->gL("txtQuantity")?>: <?=$quantity?>
														</div>
														<div style="clear:both"></div>													
													</div>
												</div>
											</li>
											<?}?>
											
									</ul>
									<ul class="list-inline cart-subtotals text-right">
										<li class="cart-subtotal"><strong><?=$oT->gL("txtTotal")?></strong></li>
										<li class="price"><span class="amount"><strong><?=number_format($cartTotal,2, '.', '');?> NOK</strong></span></li>
									</ul>
								<?} else {?>
									<p style="text-align:center;"><?=$oT->gL("txtShoppingCartEmpty")?></p>
								<?}?>
								<div class="cart-buttons text-right">
									<a href="<?=$SN?>shoppingCart.html"><button class="btn btn-white">View Cart</button></a>									
								</div>
							</div>
						</li>
					</ul>
					<div class="navbar-collapse collapse">
						<?$menu = new MenuBuilderPL();
						echo $menu->get_menu_html();?>						
					</div><!--/.nav-collapse --> 
				</div><!--/.container-fluid --> 
			</nav>
		</header>
	    <!-- END NAVIGATION -->