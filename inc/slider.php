    <div id="carousel-simple" class="carousel slide " data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-simple" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-simple" data-slide-to="1"></li>
        <li data-target="#carousel-simple" data-slide-to="2"></li>
        <li data-target="#carousel-simple" data-slide-to="3"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <a href='javascript:void(0)'><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slider1.jpg" alt="" style="height: 358px;"></a>
        </div>
        <div class="item">
          <a href='javascript:void(0)'><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slider2.jpg" alt="" style="height: 358px;"></a>
        </div>
        <div class="item">
          <a href='javascript:void(0)'><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slider3.jpg" alt="" style="height: 358px;"></a>
        </div>
        <div class="item">
          <a href='javascript:void(0)'><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slider4.jpg" alt="" style="height: 358px;"></a>
        </div>
      </div>
      <div id='pcb_tab_cont' class="row">
      	<div class="tab_menu col-md-3" style="height: 100%;padding-left: 0px;padding-right: 0px;">
      		<?php pcbtot_menu_child_setup('pcb-nav'); ?>
      	</div>
      	<div class="tab_data col-md-9" style="height: 100%;padding-left: 0px;padding-right: 0px;position: relative;">
      		<div class='pcb_tab_form'>
      			<h3>Instant Quote</h3>
      			<p>Full feature prototype PCB custom  service at low cost.</p>
      			<form role="form">
					<div class="form-group">
					  	<span class="label label-primary">Kích thước</span>
						<div class="row">					  
						  	<div class='col-md-4'><input type="text" class="form-control length-pcb" placeholder="Length (mm)"></div>
						  	<div class='col-md-1'>x</div>
						  	<div class='col-md-4'><input type="text" class="form-control width-pcb col-xs-2" placeholder="Width (mm)"></div>
							<div class='col-md-3'><select class="form-control col-xs-2" id="sel1">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
							</select></div>
						</div>
					</div>
					<div class="form-group">

					</div>
					<div class="form-group">

					</div>
					<div class="checkbox">

					</div>
				  	<button type="submit" class="btn btn-default">Tính giá</button>
				</form>
      		</div>
      	</div>
      </div>
      <div class='banner banner-slider-top'>alo</div>
      <div class='banner banner-slider-bottom'>alo</div>
    </div>