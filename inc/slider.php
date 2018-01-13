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
      			<form role="form" name='frmPrototype' class='menu-tab-0' >
      				<h3>Instant Quote</h3>
      				<p>Full feature prototype PCB custom  service at low cost.</p>    			
  					<ul class="clearfix">
  						<li>
  							<label class='label clearfix'>Kích thước</label>
							<input name='length' type="text" placeholder="Length">
							<div class="input-x-addon">x</div>
							<input name='length' type="text" placeholder="Width">
							<div class="input-x-addon chinon">mm</div>
						</li>
						<li>
  							<label class='label clearfix'>Số lượng</label>
							<select id="num" name="num">
                                <option value="">Choose Num (pcs)</option>
                                <option value="5" selected="selected">5</option>
                                <option value="10">10</option>
                                <option value="15">15</option>
                                <option value="20">20</option>
                                <option value="25">25</option>
                                <option value="30">30</option>
                                <option value="40">40</option>
                                <option value="50">50</option>
                                <option value="75">75</option>
                                <option value="100">100</option>
                                <option value="-1">100+</option>
                            </select>
						</li>
					</ul>
					<ul class="clearfix">
						<li>
							<label class='label clearfix'>Layers</label>
                            <select class='s-pcb' id="layersquote" name="layersquote">
                       			<option value="1">1 Layer</option>
                                <option value="2" selected="selected">2 Layers</option>
                                <option value="4">4 Layers</option>
                                <option value="6">6 Layers</option>
                                <option value="8">8 Layers</option>
                                <option value="10">10 Layers</option>
                                <option value="12">12 Layers</option>
                                <option value="14">14 Layers</option>
                            </select>
						</li>
						<li>
                            <label class='label clearfix'>Thickness</label>
                            <select class='s-pcb' name="thicknessquote" id="thicknessquote">
                                <option value="">Thickness</option>
                                <option value="0.4">0.4mm</option>
                                <option value="0.6">0.6mm</option>
                                <option value="0.8">0.8mm</option>
                                <option value="1.0">1.0mm</option>
                                <option value="1.2">1.2mm</option>
                                <option value="1.6" selected="selected">1.6mm</option>
                                <option value="2.0">2.0mm</option>
                                <option value="2.4">2.4mm</option>
                            </select>
                        </li>
					</ul>
					<div class="pqFormSubmit">
                        <button type = "submit" class="btn btn-success"> 
                        	 <i class="p-icon"></i>Tính giá
                        </button>
                        <span class="label label-info"><span class="glyphicon glyphicon-hand-right"></span>  Thành viên mới nhận ngay <em>50K</em></span>
                    </div>
				</form>
				<form role="form" name='frmPCBcnc' class="menu-tab-1" style="display: none;">
					<h3>Instant Quote</h3>
      				<p>Full feature prototype PCB custom  service at low cost.</p> 
      				<ul class="clearfix" style="margin-top: 5%;">
  						<li>
  							<label class='label clearfix'>Kích thước</label>
							<input name='length' type="text" placeholder="Length">
							<div class="input-x-addon">x</div>
							<input name='length' type="text" placeholder="Width">
							<div class="input-x-addon chinon">mm</div>
						</li>
						<li>
  							<label class='label clearfix'>Số lượng</label>
							<select id="num" name="num">
                                <option value="">Choose Num (pcs)</option>
                                <option value="1" selected="selected">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="">Khác</option>                                
                            </select>
						</li>
					</ul>				
					<div class="pqFormSubmit" style="margin-top: 10%;">
                        <button type = "submit" class="btn btn-success"> 
                        	 <i class="p-icon"></i>Tính giá
                        </button>
                        <span class="label label-info"><span class="glyphicon glyphicon-hand-right"></span>  Thành viên <a href=''>mới</a> nhận ngay <em>50K</em></span>
                    </div>
				</form>
      		</div>
      	</div>
      </div>
      <div class='banner banner-slider-top'>alo</div>
      <div class='banner banner-slider-bottom'>alo</div>
    </div>
