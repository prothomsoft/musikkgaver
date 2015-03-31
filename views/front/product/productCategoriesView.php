<?
require_once("model/components/session.inc.php");
$objAppSession=new AppSession();
$SN = $objAppSession->getSession('SN');
?>
		<!-- BEGIN PRODUCTS CATEGORIES -->
		<section class="product_categories">
			<div class="container">
				<div class="row">
					<?$arrBetas = $event->getArg("arrBetas");?>
					<?if($arrBetas) {?>
						<?foreach($arrBetas as $objBeta) {?>
							<div class="col-xs-6 col-sm-6 col-lg-3 col-md-3">
				    			<a class="collect-item-thumb" href="<?=$SN?>products/<?=$objBeta->getBetaId();?>/<?=$objBeta->getSeoName();?>.html"><img class="img-responsive" alt="<?=htmlspecialchars_decode($objBeta->getName());?>" src="<?=$SN;?>upload/proper/<?=$objBeta->getImgDriveName();?>"></a>
							</div>
						<?}?>						
					<?}?>					
				</div>
			</div>
		</section>
	    <!-- END PRODUCT CATEGORIES -->