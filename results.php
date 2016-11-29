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
				<form class="nav-filter dropdown pull-right">
					<a href="javascript:void(0);" role="button" class="dropdown-toggle" data-toggle="dropdown">
						Filter results 
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu dropdown-menu-form" role="menu" aria-labelledby="drop3">
						<li><b>Filter by:</b></li>
						<li>
							<div class="radio">
								<label>
									<input type="radio" name="filter-sortby" id="optionsRadios1" value="option1"> 
									Best Match
								</label>
							</div>
						</li>
						<li>
							<div class="radio">
								<label>
									<input type="radio" name="filter-sortby" id="optionsRadios2" value="option2" checked="checked"> 
									Highest Rated
								</label>
							</div>
						</li>
						<li>
							<div class="radio">
								<label>
									<input type="radio" name="filter-sortby" id="optionsRadios3" value="option3"> 
									Most Reviewed
								</label>
							</div>
						</li>
						<li>
							<div class="radio">
								<label>
									<input type="radio" name="filter-sortby" id="optionsRadios3" value="option3"> 
									Distance
								</label>
							</div>
						</li>
						<li class="divider"></li>
						<li><b>Category:</b></li>
						<li>
							<div class="checkbox">
								<label>
									<input type="checkbox" checked="checked"> 
									Banks
								</label>
							</div>
						</li>
						<li>
							<div class="checkbox">
								<label>
									<input type="checkbox" checked="checked"> 
									Transportations
								</label>
							</div>
						</li>
						<li>
							<div class="checkbox">
								<label>
									<input type="checkbox"> 
									Hotels
								</label>
							</div>
						</li>
						<li class="divider"></li>
						<li><b>Distance:</b></li>
						<li>
							<div class="radio">
								<label>
									<input type="radio" name="filter-sortby" id="optionsRadios1" value="option1"> 
									Around 5 km
								</label>
							</div>
						</li>
						<li>
							<div class="radio">
								<label>
									<input type="radio" name="filter-sortby" id="optionsRadios2" value="option2" checked="checked"> 
									Around 5 - 10 km
								</label>
							</div>
						</li>
						<li class="divider"></li>
						<li>
							<div>
								<button class="btn btn-primary btn-sm btn-block">Apply Filter</button>
							</div>
						</li>
					</ul>
				</form>
				<span class="nav-counter">Showing 18 results</span>
			</nav>
		</section>
		<section class="sidebar-results">
			<h5>Banks <b>3</b></h5>
			<ul class="list-media unstyled">
				<?php for ($x=0; $x<3; $x++) { ?>
				<li>
					<div class="options btn-group btn-group-xs">
						<button type="button" class="btn btn-default">Details</button>
						<button type="button" class="btn btn-default">Point on Map</button>
					</div>
					<a href="#" class="media">
						<div class="media-object pull-left">
							<i class="fa fa-bank"></i>
						</div>
						<div class="media-body">
							<h3>Midvalley Bank</h3>

							<div class="address">
								Lingkaran Syed Putra, Mid Valley City, 58000 Kuala Lumpur, Kuala Lumpur Federal Territory
							</div>

							<div class="meta clearfix">
								<div class="phone pull-left">
									+6012 - 345 6789
								</div>
								<div class="stars pull-right">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-o"></i>
									<i class="fa fa-star-o"></i>
								</div>
							</div>
						</div>
					</a>
				</li>
				<?php } ?>
			</ul>
		</section>
		<section class="sidebar-results">
			<h5>Hotel <b>2</b></h5>
			<ul class="list-media unstyled">
				<?php for ($x=0; $x<2; $x++) { ?>
				<li>
					<div class="options btn-group btn-group-xs">
						<button type="button" class="btn btn-default">Details</button>
						<button type="button" class="btn btn-default">Point on Map</button>
					</div>
					<a href="#" class="media">
						<div class="media-object pull-left">
							<i class="fa fa-building"></i>
						</div>
						<div class="media-body">
							<h3>Midvalley Bank</h3>
							<div class="address">
								Lingkaran Syed Putra, Mid Valley City, 58000 Kuala Lumpur, Kuala Lumpur Federal Territory
							</div>
							<div class="meta clearfix">
								<div class="phone pull-left">
									+6012 - 345 6789
								</div>
								<div class="stars pull-right">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-o"></i>
									<i class="fa fa-star-o"></i>
								</div>
							</div>
						</div>
					</a>
				</li>
				<?php } ?>
			</ul>
		</section>
		<section class="sidebar-results">
			<h5>Banks <b>3</b></h5>
			<ul class="list-media unstyled">
				<?php for ($x=0; $x<3; $x++) { ?>
				<li>
					<div class="options btn-group btn-group-xs">
						<button type="button" class="btn btn-default">Details</button>
						<button type="button" class="btn btn-default">Point on Map</button>
					</div>
					<a href="#" class="media">
						<div class="media-object pull-left">
							<i class="fa fa-bank"></i>
						</div>
						<div class="media-body">
							<h3>Midvalley Bank</h3>

							<div class="address">
								Lingkaran Syed Putra, Mid Valley City, 58000 Kuala Lumpur, Kuala Lumpur Federal Territory
							</div>

							<div class="meta clearfix">
								<div class="phone pull-left">
									+6012 - 345 6789
								</div>
								<div class="stars pull-right">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-o"></i>
									<i class="fa fa-star-o"></i>
								</div>
							</div>
						</div>
					</a>
				</li>
				<?php } ?>
			</ul>
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