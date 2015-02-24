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
					Vendor <small>manage your vendor</small>
					</h3>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h3>
					Add Vendor
					<a href="" class="btn btn-circle btn-scroll" style='padding: 2px 4px; margin-top:-2px'>
	              		<i class="fa fa-plus"></i>
	              	</a>
					</h3>
					<form class="form-horizontal form-row-seperated" action="#">
						<div class="portlet">
							<div class="portlet-title">
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
													<label class="col-md-2 control-label">Name:
													<span class="required">
														 *
													</span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="product[name]" placeholder="">
													</div>
													<label class="col-md-2 control-label">Category:
													<span class="required">
														 *
													</span>
													</label>
													<div class="col-md-4">
														<select class="table-group-action-input form-control" name="product[status]">
															<option value="">Select...</option>
															<option value="1">Published</option>
															<option value="0">Not Published</option>
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Phone:
													<span class="required">
														 *
													</span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="product[name]" placeholder="">
													</div>
													<label class="col-md-2 control-label">Phone 2:</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="product[name]" placeholder="">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Address:
													<span class="required">
														 *
													</span>
													</label>
													<div class="col-md-10">
														<textarea class="form-control" name="product[description]"></textarea>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
					<div class="row">
						<div class="col-md-12">
							<!-- BEGIN EXAMPLE TABLE PORTLET-->
							<div class="portlet box green">
								<div class="portlet-title">
									<div class="caption">
										<i class="fa fa-globe"></i>Stock List
									</div>
									<div class="tools">
										<a href="javascript:;" class="reload">
										</a>
										<a href="javascript:;" class="remove">
										</a>
									</div>
								</div>
								<div class="portlet-body">
									<table class="table table-striped table-bordered table-hover" id="sample_1">
									<thead>
									<tr>
										<th>
											 Product
										</th>
										<th>
											 Category
										</th>
										<th>
											 Stock
										</th>
										<th>
											 Edit
										</th>
										<th>
											 Delete
										</th>
									</tr>
									</thead>
									<tbody>
									<tr>
										<td>
											 Trident
										</td>
										<td>
											 Internet Explorer 4.0
										</td>
										<td>
											 Win 95+
										</td>
										<td>
											<a href="#" class="btn btn-xs yellow">
												Edit <i class="fa fa-edit"></i>
											</a>
										</td>
										<td>
											<a href="#" class="btn btn-xs red">
												Delete <i class="fa fa-times"></i>
											</a>
										</td>
									</tr>
									</tbody>
									</table>
								</div>
							</div>
							<!-- END EXAMPLE TABLE PORTLET-->
						</div>
					</div>
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
<script src="assets/scripts/custom/table-advanced.js"></script>
<script>
jQuery(document).ready(function() {
   TableAdvanced.init();
});
</script>
@include('includes.end-page')