<?php include '_core-header.php'; ?>
<div class="sidebar">
	<header>
		<section class="sidebar-search">
			<input class="form-control" placeholder="Search" />
		</section>
	</header>
	<article>
		<section>
			<nav class="clearfix">
				<a href="#">
					<i class="fa fa-arrow-circle-left"></i>
					Back
				</a>
			</nav>
		</section>
		<section class="sidebar-detail">
			<ul class="list-media unstyled">
				<li>
					<div class="media">
						<div class="media-object pull-left">
							<i class="fa fa-bank"></i>
						</div>
						<div class="media-body">
							<h3>Midvalley Bank</h3>

							<div class="brief">
								<div class="category">
									Bank
								</div>
								<div class="stars">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-o"></i>
									<i class="fa fa-star-o"></i>
								</div>
								<div class="reviews">
									36 reviews
								</div>
							</div>

							<a href="#">Point On Map</a>
						</div>
					</div>
				</li>
			</ul>
		</section>
		<section>
				<ul class="sidebar-tab unstyled" role="tablist">
					<li class="active"><a href="#inforamtions" role="tab" data-toggle="tab">Info</a></li>
					<li><a href="#review" role="tab" data-toggle="tab">Reviews</a></li>
				</ul>
				<div class="sidebar-tab-content tab-content">
					<div class="tab-pane fade in active" id="inforamtions">
						<ul class="list-info unstyled">
							<li>
								<b>Operations Hour</b>
								<div>9am - 10pm</div>
							</li>
							<li>
								<b>Address</b>
								<div>
									Lingkaran Syed Putra, Mid Valley City, 58000 Kuala Lumpur, Kuala Lumpur Federal Territory
								</div>
							</li>
							<li>
								<b>Phone</b>
								<div>
									+6012 - 345 6789
								</div>
							</li>
							<li>
								<b>Website</b>
								<div>
									<a href="#">http://www.google.com</a>
								</div>
							</li>
							<li>
								<b>Brief</b>
								<div>Based on Kelantan’s specialities, Desa Paku will make vegetarians and green lovers jump with joy. By concentrating on green vegetables or Ulam-ulaman (Malay word for raw vegetables eaten with sambal belacan) for their buffet lunch, this restaurant finds itself with a full crowd during lunch hour.</div>
							</li>
						</ul>
					</div>
					<div class="tab-pane fade" id="review">
						<ul class="list-reviews unstyled">
							<?php for ($x=0; $x<5; $x++) { ?>
							<li>
								<div class="media">
									<a class="media-object pull-left">
										<img src="https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg" class="img-circle" width="60" height="60" />
									</a>
									<div class="media-body">
										<b class="name">Brad Frost</b>
										<div class="review">Good relaxing atmosphere, and setting</div>
										<div class="stars">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-o"></i>
											<i class="fa fa-star-o"></i>
										</div>
									</div>
								</div>
							</li>
							<?php } ?>
						</ul>
					</div>
				</div>
		</section>
	</article>
	<footer>
		Skout 2014. Another project by NEST
	</footer>
</div>
<div class="content">
	<?php include '_core-map.php'; ?>
</div>
<?php include '_core-footer.php'; ?>