<?
require_once("model/components/session.inc.php");
$objAppSession=new AppSession();
$SN = $objAppSession->getSession('SN');
require_once("model/components/translator.inc.php");
$sLang = $objAppSession->getSession('sLang');
$oT = new Translator('template3',$sLang);
?>

		<!-- BEGIN FOOTER -->
		<section class="footer">
		    <div class="container">
		        <footer>
		            <div class="upper-foot">
						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6">
								<h2>Kategorier</h2>
								<ul class="list-inline tagclouds">
								<?$arrBetas = $event->getArg("arrBetas");?>
								<?if($arrBetas) {?>
									<?foreach($arrBetas as $objBeta) {?>
										<li><a href="<?=$SN?>products/<?=$objBeta->getBetaId();?>/<?=$objBeta->getSeoName();?>.html"><?=$objBeta->getName();?></a></li>
									<?}?>						
								<?}?>
								</ul>									
							</div>
							
							<div class="col-xs-6 col-sm-6 col-md-3">
								<h2>Kontaktinformasjon</h2>
								<address>
									<i class="fa fa-map-marker"></i>Musikkpedagogisk Senter<br>
									Kreativ Musikkpedagogikk<br>
									Bibliotekgata 30, 1473 Lørenskog<br/>
									<i class="fa fa-phone"></i> Telefon: 67 90 85 66<br>
									<i class="fa fa-mobile"></i> Mobil: 954 75 972<br>
									<i class="fa fa-envelope"></i> Epost: <a href="mailto:musikkglede@hotmail.com">musikkglede@hotmail.com</a>
								</address>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-3">
								<h2>Meld deg på vårt nyhetsbrev</h2>
								<p>Få de siste nyhetene sendt direkte til din epost</p>
								<form class="form-inline form-newsletter" role="form" method="post" action="<?=$SN;?>executeNewsletterAction.html">
									<div class="form-group">
										<label class="sr-only" for="exampleInputEmail2">Epost</label>
										<input type="email" class="form-control" id="exampleInputEmail2" name="email">
									</div>
									<button type="submit" class="btn"><i class="fa fa-caret-right"></i></button>
								</form>
							</div>
						</div>
					</div>
					<div class="below-foot">
						<div class="row">
							<div class="col-xs-6 copyrights">
								<p>Copyright &copy; 2014 Musikkgaver. All rights reserved. <a href="<?=$SN?>login.html">Login</a></p>
							</div>
							<?/*?>
							<div class="col-xs-6 text-right">
								<ul class="list-inline social-list">
									<li><a data-toggle="tooltip" data-placement="top" title="Facebook" href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a data-toggle="tooltip" data-placement="top" title="Twitter" href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a data-toggle="tooltip" data-placement="top" title="Google+" href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a data-toggle="tooltip" data-placement="top" title="Pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
									<li><a data-toggle="tooltip" data-placement="top" title="RSS" href="#"><i class="fa fa-rss"></i></a></li>
								</ul>
							</div>
							<?*/?>
						</div>
					</div>
		        </footer>
		    </div>
		</section>
	    <!-- END FOOTER -->