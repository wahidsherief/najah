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
					@if ($errors->has())
						<div class='alert alert-danger alert-dismissable'>
							<button class='close' type='button' data-dismiss="alert" aria-hidden="true">
								&times;
							</button>
					    	@foreach ($errors->all() as $error)
					        	{{ $error }}
					    	@endforeach
					    </div>
					@endif					
					<div class="flash-message">
					  @foreach (['danger', 'warning', 'success', 'info'] as $msg)
					    @if(Session::has('alert-' . $msg))
					    <p class="alert alert-{{ $msg }} alert-dismissable">
							<button class='close' type='button' data-dismiss="alert" aria-hidden="true">
								&times;
							</button>
					    	{{ Session::get('alert-' . $msg) }}
					    </p>
					    @endif
					  @endforeach
					</div>					
					<h3 class="page-title">
					Product Category <small>create new category</small>

					<a href="" class="btn btn-circle btn-scroll pull-right">
	              		<i class="fa fa-angle-double-down animated" id="down-arrow"></i>
	              	</a>
					</h3>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
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
					<a href="" class="btn btn-circle btn-scroll pull-right">
	              		<i class="fa fa-angle-double-down animated" id="down-arrow"></i>
	              	</a>
					</h3>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
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
														<select class="table-group-action-input form-control" name="product[status]">
															<option>Select...</option>
															@if( isset($categories))
																@foreach($categories as $categories)
																	<option value="">{{ $categories->category }}</option>
																@endforeach
															@endif
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
					<a href="" class="btn btn-circle btn-scroll pull-right">
	              		<i class="fa fa-angle-double-down animated" id="down-arrow"></i>
	              	</a>
					</h3>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
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

