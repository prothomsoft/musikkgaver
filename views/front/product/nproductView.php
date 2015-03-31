<?
require_once("model/components/session.inc.php");
$objAppSession=new AppSession();
$SN = $objAppSession->getSession('SN');
?>

		<!-- PRODUCTS -->
        <section class="products">
            <div class="container">
                <div class="row">
                	<!-- .shop-navbar -->
                    <div class="col-md-3 hidden-xs hidden-sm">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="widget-box sidebar">                                    
                                    <ul class="wdgt-ul">
                                    <?$arrBetas = $event->getArg("arrBetas");?>
									<?if($arrBetas) {?>
										<?foreach($arrBetas as $objBeta) {?>
											<li>
	                                            <a href="<?=$SN?>products/<?=$objBeta->getBetaId();?>/<?=$objBeta->getSeoName();?>.html"><?=$objBeta->getName();?></a>                                            
	                                        </li>
										<?}?>						
									<?}?>                                  
                                    </ul>
                                </div>
                            </div>                                                   
                        </div>
                    </div>
                    
                    <?$objProduct = $event->getArg("objProduct");?>
                                        
                    <!--/.shop-navbar-->
                    <div class="col-md-9">
                    	<div class="row">
                            <div class="col-sm-6 col-lg-6 col-md-6">
		                        <div class="category_caption_header" style="padding-top:20px;">
                                    <table width="100%">
                                        <tr><td align="center" style="text-transform: uppercase;">
                                            <?if($objProduct->getExtName() != "") {?>
                                                <span style="color:#000"><strong><?=$objProduct->getName();?> - <?=$objProduct->getExtName();?></strong></span>                                  
                                            <?} else {?>
                                                <span style="color:#000"><strong><?=$objProduct->getName();?></strong></span>
                                            <?}?>
                                        </td></tr>                                                  
                                    </table>                                                
                                </div>							      
								<div class="category_caption_footer" style="padding-top:0px; height:250px;">
									<p>Pris: <?=$objProduct->getPrice();?> NOK<br/>
									<?if($objProduct->getInStock() > 0) {?>
										Leveringstid: <?=$objProduct->getDelivery();?><br/>
										Lagerbeholdning: <?=$objProduct->getInStock();?></p>
									<?} else {?>
										Leveringstid: -<br/>
										Lagerbeholdning: Ikke på lager. <br/>Bestillingstid vil variere.<br/> Ta kontakt.</p>
									<?}?>
									<?if($objProduct->getInStock() > 0) {?>
										<div class="padding_help"><a href="<?=$SN?>executeAddShoppingCartAction/<?=$objProduct->getProductId();?>.html" class="btn btn-default width_help" role="button">Legg I Handlekurven</a></div>
									<?}?>
									<div><a href="<?=$SN;?>products/<?=$objProduct->getBetaId();?>.html" class="btn btn-default width_help" role="button">Fortsett å handle</a></div>
								</div>								
		                    </div>
		                    <div class="col-sm-6 col-lg-6 col-md-6">
		                    	<div>
			                    	<div class="thumbnail">
			                    		 <a title="<?=$objProduct->getName()?>" href="<?=$SN?>upload/proper/<?=$objProduct->getImgDriveName();?>" rel="prettyPhoto[gallery0]"><img src="<?=$SN?>upload/thumb/<?=$objProduct->getImgDriveName();?>" /></a>
								    </div>
								</div>
						    </div>		                    
                        </div>
                        
                        <div class="row">
                    		<div class="col-sm-12 col-lg-12 col-md-12">
                    			<div>
									<div style="padding:20px 0px 20px 0px; text-align:justify;">
										<?=htmlspecialchars_decode($objProduct->getLongDescription());?>
									</div>
						      	</div>
                    		</div>
                    	</div>
                    </div>                    
                </div>
            </div>
            <!-- /.container -->
        </section>
        <!-- END DETAIL PRODUCT CONTENT -->