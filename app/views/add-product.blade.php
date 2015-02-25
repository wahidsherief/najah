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
					Product Add <small>create new product</small>
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
													<label class="col-md-2 control-label">Name:
													<span class="required">
														 *
													</span>
													</label>
													<div class="col-md-10">
														<input type="text" class="form-control" name="product[name]" placeholder="">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Description:
													<span class="required">
														 *
													</span>
													</label>
													<div class="col-md-10">
														<textarea class="form-control" name="product[description]"></textarea>
													</div>
												</div><div class="form-group">
													<div class="form-group">
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
														<label class="col-md-2 control-label">Sub-Category:
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
												</div>
												<div class="form-group">
													<div class="form-group">
														<label class="col-md-2 control-label">Sku:
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
														<label class="col-md-2 control-label">Status:
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
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Upload Image: </label>
													<div id="tab_images_uploader_container" class="margin-bottom-10 col-md-6">
														<button id="tab_images_uploader_pickfiles" href="javascript:;" class="btn btn-group btn-group-sm yellow">
															<i class="fa fa-plus"></i> Select Files
														</button>
														<button id="tab_images_uploader_uploadfiles" href="javascript:;" class="btn btn-group btn-group-sm green">
															<i class="fa fa-share"></i> Upload Files
														</button>
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