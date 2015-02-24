@include('includes.head')
@include('includes.top-nav')

<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
					Stock Add <small>create new stock</small>
					</h3>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<form class="form-horizontal form-row-seperated" action="#">
						<div class="portlet">
							<div class="portlet-title">
								<!-- <div class="caption">
									<i class="fa fa-shopping-cart"></i>Test Product
								</div> -->
								<div class="actions btn-set">
									<button class="btn default"><i class="fa fa-reply"></i> Reset</button>
									<button class="btn green"><i class="fa fa-check"></i> Save</button>
								</div>
							</div>
							<div class="portlet-body">
								<div class="tabbable">
									<div class="tab-content no-space">
										<div class="tab-pane active" id="tab_general">
											<div class="form-body">
												<div class="form-group">
													<label class="col-md-2 control-label">Invoice No:
													<span class="required">
														 *
													</span>
													</label>
													<div class="col-md-10">
														<input type="text" class="form-control" name="product[name]" placeholder="">
													</div>
												</div>
												<div class="product-group">
													<div class="form-group">
														<label class="col-md-2 control-label">Category:
														<span class="required">
															 *
														</span>
														</label>
														<div class="col-md-2">
															<select class="form-control" name="product[status]">
																<option value="">Select...</option>
																<option value="1">Published</option>
																<option value="0">Not Published</option>
															</select>
														</div>													
														<label class="col-md-2 control-label">Product:
														<span class="required">
															 *
														</span>
														</label>
														<div class="col-md-2">
															<select class="form-control" name="product[status]">
																<option value="">Select...</option>
																<option value="1">Published</option>
																<option value="0">Not Published</option>
															</select>
														</div>													
														<label class="col-md-2 control-label">Quantity:
														<span class="required">
															 *
														</span>
														</label>
														<div class="col-md-2">
															<input type="text" class="form-control" name="product[name]" placeholder="">
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-2 control-label">Purchase price:
														<span class="required">
															 *
														</span>
														</label>
														<div class="col-md-2">
															<input type="text" class="form-control" name="product[name]" placeholder="">
														</div>													
														<label class="col-md-2 control-label">Sale price:
														<span class="required">
															 *
														</span>
														</label>
														<div class="col-md-2">
															<input type="text" class="form-control" name="product[name]" placeholder="">
														</div>													
														<label class="col-md-2 control-label">Sale price (min):
														<span class="required">
															 *
														</span>
														</label>
														<div class="col-md-2">
															<input type="text" class="form-control" name="product[name]" placeholder="">
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-2 control-label">Purchase date:
														<span class="required">
															 *
														</span>
														</label>
														<div class="col-md-2">
															<input type="text" class="form-control" name="product[name]" placeholder="">
														</div>													
														<label class="col-md-2 col-sm-4 col-xs-4 control-label">Warenty:</label>
														<div class="col-md-1 col-sm-3 col-xs-3">
															<input type="text" class="form-control" name="product[name]" placeholder="">
														</div>	
														<div class="col-md-1 col-sm-3 col-xs-3">
															<select class="form-control" name="product[status]">
																<option value=""></option>
																<option value="1">D = Days</option>
																<option value="0">M = Months</option>
																<option value="0">Y = Years</option>
															</select>
														</div>														
														<label class="col-md-2 control-label">Vendor:
														<span class="required">
															 *
														</span>
														</label>
														<div class="col-md-2">
															<input type="text" class="form-control" name="product[name]" placeholder="">
														</div>
													</div>

													<div class="form-group">
														<label class="col-md-2 control-label">Note
														</label>
														<div class="col-md-10">
															<textarea class="form-control" name="product[name]" placeholder=""> 
															</textarea>
														</div>
													</div>
												</div>
												<br>
												<center><a href="">Add More</a></center>
												<div class="amount-group">
													<div class="form-group">
														<label class="col-md-2 control-label">Total Amount:
														<span class="required">
															 *
														</span>
														</label>
														<div class="col-md-2">
															<input type="text" class="form-control" name="product[name]" placeholder="">
														</div>													
														<label class="col-md-2 control-label">Paid Amount:
														</label>
														<div class="col-md-2">
															<input type="text" class="form-control" name="product[name]" placeholder="">
														</div>												
														<label class="col-md-2 control-label">Due Amount:
														<span class="required">
															 *
														</span>
														</label>
														<div class="col-md-2">
															<input type="text" class="form-control" name="product[name]" placeholder="">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->

<!-- BEGIN FOOTER -->
@include('includes.footer')
<!-- END FOOTER -->
@include('includes.js')
@include('includes.end-page')
