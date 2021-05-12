<!-- TOP LANDING SECTION -->
<div style="height:93vh;width:100%;background-image: url(<?php echo base_url().'assets/frontend/flixer/images/home_top_banner.jpg';?>)">
	<!-- logo -->
	<div style="float: left;">
		<a href="<?php echo base_url();?>index.php?home">
		<img src="<?php echo base_url();?>/assets/global/logo.png" style="margin: 18px 18px; width: 160px;" />
		</a>
	</div>
	<div style="float: right;margin: 18px 18px; height: 50px;" class="hidden-xs">
		<a href="<?php echo base_url();?>index.php?home/signin" class="btn btn-danger">Sign in</a>
	</div>
	
	<!-- promo text visible for large devices -->
	<div style="font-size: 85px;font-weight: bold;clear: both;padding: 200px 0px 0px 50px;color: #fff;" class="hidden-xs">
		See what's next.
		<div style="font-size: 30px; letter-spacing: .2px; color: #fff; font-weight: 400;">
			WATCH ANYWHERE. CANCEL ANYTIME.
		</div>
		<a href="<?php echo base_url();?>index.php?home/signup" class="btn btn-danger btn-lg" >JOIN TODAY</a>
	</div>
	
	<!-- promo text visible for small devices -->
	<div style="font-size: 45px;font-weight: bold;clear: both;padding: 80px 0px 0px 10px;color: #fff;" class="hidden-lg hidden-sm hidden-md">
		See what's next.
		<div style="font-size: 25px; letter-spacing: .2px; color: #fff; font-weight: 400;">
			WATCH ANYWHERE. <br> CANCEL ANYTIME.
		</div>
		<a href="<?php echo base_url();?>index.php?home/signup" class="btn btn-danger btn-lg" >JOIN TODAY</a>
		<br>
		<a href="<?php echo base_url();?>index.php?home/signin" class="btn btn-danger btn-lg" >SIGN IN</a>
	</div>
</div>
<!-- MIDDLE TAB SECTION -->
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="bs-component">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#cancel" data-toggle="tab">
						<i class="fa fa-sign-out" style="font-size: 64px; font-weight: lighter; padding: 20px 0px 5px;"></i>
						<br>
						Cancel subscription anytime
						</a>
					</li>
					<li>
						<a href="#anywhere" data-toggle="tab">
						<i class="fa fa-laptop" style="font-size: 64px; font-weight: lighter; padding: 20px 0px 5px;"></i>
						<br>
						Watch from anywhere
						</a>
					</li>
					<li>
						<a href="#price" data-toggle="tab">
						<i class="fa fa-tags fa-flip-horizontal" style="font-size: 64px; font-weight: lighter; padding: 20px 0px 5px;"></i>
						<br>
						Pricing packages
						</a>
					</li>
				</ul>
				<div id="myTabContent" class="tab-content">
					<div class="tab-pane active in" id="cancel">
						<p>
						<div class="row">
							<div class="col-md-7" style="padding-top: 50px;">
								<h4>
									If you decide Videoflix isn't for you - no problem. <br>No commitment. Cancel online anytime.
								</h4>
								<br>
								<a href="<?php echo base_url();?>index.php?home/signup" class="btn btn-danger btn-lg" >JOIN TODAY</a>
							</div>
							<div class="col-md-5">
								<img src="<?php echo base_url();?>assets/frontend/flixer/images/asset_cancelanytime_withdevice.png" style="width: 100%;" />
							</div>
						</div>
						</p>
					</div>
					<div class="tab-pane" id="anywhere">
						<p>
						<div class="row">
							<div class="col-md-9">
								<h4>
									Watch TV shows and movies anytime, anywhere. From any device.
								</h4>
							</div>
							<div class="col-md-3">
								<a href="<?php echo base_url();?>index.php?home/signup" class="btn btn-danger btn-lg" >JOIN TODAY</a>
							</div>
						</div>
						<div class="row" style="margin-top:50px;text-align: center;">
							<div class="col-md-4">
								<img src="<?php echo base_url();?>assets/frontend/flixer/images/asset_TV_UI.png" style="width: 100%;" />
								<h5>Watch on your tv</h5>
							</div>
							<div class="col-md-4">
								<img src="<?php echo base_url();?>assets/frontend/flixer/images/asset_mobile_tablet_UI_2.png" style="width: 100%;" />
								<h5>Watch on your phone, tablet</h5>
							</div>
							<div class="col-md-4">
								<img src="<?php echo base_url();?>assets/frontend/flixer/images/asset_website_UI.png" style="width: 100%;" />
								<h5>Watch on your pc</h5>
							</div>
						</div>
						</p>
					</div>
					<div class="tab-pane" id="price">
						<p>
						<div class="row" style="margin: 35px;">
							<div class="col-md-8" style="text-align: right;">
								<h4>
									Choose one plan and watch everything.
								</h4>
							</div>
							<div class="col-md-4" style="text-align: left;">
								<a href="<?php echo base_url();?>index.php?home/signup" class="btn btn-danger btn-lg" >JOIN TODAY</a>
							</div>
						</div>
						<!-- price table -->
						<table class="table table-striped table-hover" style="color: #999;">
							<tbody>
								<tr>
									<td></td>
									<?php
										$plans = $this->crud_model->get_active_plans();
										foreach ($plans as $row):
										?>
									<td align="center">
										<h5 style="text-transform: uppercase;"><?php echo $row['name'];?></h5>
									</td>
									<?php endforeach;?>
								</tr>
								<tr>
									<td>Monthly price</td>
									<?php
										$plans = $this->crud_model->get_active_plans();
										foreach ($plans as $row):
										?>
									<td align="center">USD <?php echo $row['price'];?></td>
									<?php endforeach;?>
								</tr>
								<tr>
									<td>Screens you can watch on at the same time</td>
									<?php
										$plans = $this->crud_model->get_active_plans();
										foreach ($plans as $row):
										?>
									<td align="center"><?php echo $row['screens'];?></td>
									<?php endforeach;?>
								</tr>
								<tr>
									<td>Watch on your laptop, TV, phone and tablet</td>
									<?php
										$plans = $this->crud_model->get_active_plans();
										foreach ($plans as $row):
										?>
									<td align="center"><i class="fa fa-check" aria-hidden="true"></i></td>
									<?php endforeach;?>
								</tr>
								<tr>
									<td>HD available</td>
									<?php
										$plans = $this->crud_model->get_active_plans();
										foreach ($plans as $row):
										?>
									<td align="center"><i class="fa fa-check" aria-hidden="true"></i></td>
									<?php endforeach;?>
								</tr>
								<tr>
									<td>Unlimited movies and TV shows</td>
									<?php
										$plans = $this->crud_model->get_active_plans();
										foreach ($plans as $row):
										?>
									<td align="center"><i class="fa fa-check" aria-hidden="true"></i></td>
									<?php endforeach;?>
								</tr>
								<tr>
									<td>Cancel anytime</td>
									<?php
										$plans = $this->crud_model->get_active_plans();
										foreach ($plans as $row):
										?>
									<td align="center"><i class="fa fa-check" aria-hidden="true"></i></td>
									<?php endforeach;?>
								</tr>
							</tbody>
						</table>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include 'footer.php';?>
</div>