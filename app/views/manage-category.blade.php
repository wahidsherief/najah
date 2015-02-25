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
					Product Category <small>create new category</small>
					</h3>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
				<a href="" class="btn btn-circle btn-scroll">
              		<i class="fa fa-angle-double-down animated" id="down-arrow"></i>
              	</a>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="portlet">
						<div class="portlet-body">
							<div class="tabbable">
								<div class="tab-content no-space">
									<div class="tab-pane active" id="tab_general">
										{{ Form::open(array('url' => 'manage-category/add')) }}
											<div class="form-body">
												<div class="form-group">
													<label class="col-md-2 control-label">Category:
													<span class="required">
														 *
													</span>
													</label>
													<div class="col-md-10">
														<input type="text" class="form-control" name="name" placeholder="">
													</div>
												</div>
												<div class="form-group">
													<div class="margin-right-15 actions btn-set pull-right">
														<button class="btn default" type='reset'><i class="fa fa-reply"></i> Reset</button>
														<button class="btn green" type='submit'><i class="fa fa-check"></i> Save</button>
													</div>
												</div>
											</div>
										{{ Form::close() }}
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
					Product Sub-category <small>create new sub-category</small>
					</h3>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
				<a href="" class="btn btn-circle btn-scroll">
              		<i class="fa fa-angle-double-down animated" id="down-arrow"></i>
              	</a>
			</div>
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<form class="form-horizontal form-row-seperated" action="#">
						<div class="portlet">
							<div class="portlet-body">
								<div class="tabbable">
									<div class="tab-content no-space">
										<div class="tab-pane active" id="tab_general">
											<div class="form-body">
												<div class="form-group">
													<label class="col-md-2 control-label">Status:
													<span class="required">
														 *
													</span>
													</label>
													<div class="col-md-4">
														<select class="table-group-action-input form-control input-medium" name="product[status]">
															<option value="">Select...</option>
															<option value="1">Published</option>
															<option value="0">Not Published</option>
														</select>
													</div>	

													<label class="col-md-2 control-label">Status:
													<span class="required">
														 *
													</span>
													</label>
													<div class="col-md-4">
														<input type="text" class='form-control'>
													</div>	
												</div>
												<div class="form-group">
													<div class="margin-right-15 actions btn-set pull-right">
														<button class="btn default"><i class="fa fa-reply"></i> Reset</button>
														<button class="btn green"><i class="fa fa-check"></i> Save</button>
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
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
					All category <small>view all categories & sub-categories</small>
					</h3>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
				<a href="" class="btn btn-circle btn-scroll">
              		<i class="fa fa-angle-double-down animated" id="down-arrow"></i>
              	</a>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="footer">
	<div class="footer-inner">
		 2014 &copy; Metronic by keenthemes.
	</div>
	<div class="footer-tools">
		<span class="go-top">
			<i class="fa fa-angle-up"></i>
		</span>
	</div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
    <script src="assets/plugins/respond.min.js"></script>
    <script src="assets/plugins/excanvas.min.js"></script> 
    <![endif]-->
<script src="assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="assets/plugins/data-tables/jquery.dataTables.js"></script>
<script type="text/javascript" src="assets/plugins/data-tables/DT_bootstrap.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<script src="assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
<script src="assets/plugins/plupload/js/plupload.full.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/scripts/core/app.js"></script>
<script src="assets/scripts/core/datatable.js"></script>
<script src="assets/scripts/custom/ecommerce-products-edit.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
        jQuery(document).ready(function() {    
           App.init();
           EcommerceProductsEdit.init();
        });
    </script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>