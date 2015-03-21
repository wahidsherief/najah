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
					        	{{ $error.'<br>' }}

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
					Client <small>manage your client</small>
					</h3>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h3>
					Add Client
					<a class="btn btn-circle btn-scroll toggle-btn" toggle=1 style='padding: 2px 4px; margin-top:-2px'>
	              		<i class="fa fa-plus"></i>
	              	</a>
					</h3>
					{{ Form::open(array('url' => 'manage-client/add', 'class' => 'form-horizontal form-row-seperated')) }}
						<div class="portlet toggle-section toggle-section-1">
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
														<input type="text" class="form-control" name="name" required>
													</div>
													<label class="col-md-2 control-label">Category:
													<span class="required">
														 *
													</span>
													</label>
													<div class="col-md-4">
														<select class="table-group-action-input form-control" name="category_id" required>
															<option>Select</option>
															@if( isset($category))
																@foreach($category as $categories)
																	<option value='{{ $categories->id }}'>{{ $categories->category }}</option>
																@endforeach
															@endif
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
														<input type="text" class="form-control" name="phone_one" placeholder="" required>
													</div>
													<label class="col-md-2 control-label">Phone 2:</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="phone_second" placeholder="">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Address:
													<span class="required">
														 *
													</span>
													</label>
													<div class="col-md-10">
														<textarea class="form-control" name="address" required></textarea>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					{{ Form::close() }}
					<div class="row">
						<div class="col-md-12">
							<!-- BEGIN EXAMPLE TABLE PORTLET-->
							<div class="portlet box green">
								<div class="portlet-title">
									<div class="caption">
										<i class="fa fa-globe"></i>Client List
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
											 Name
										</th>
										<th>
											 Category
										</th>
										<th>
											 Phone
										</th>
										<th>
											 Phone (Optional)
										</th>
										<th>
											 Delete
										</th>
									</tr>
									</thead>
									<tbody>
									@if(isset($clients))
										@foreach( $clients as $client )
											<tr>
												<td>{{ $client->name }}</td>
												<td>
													@foreach(Category::where('id','=',$client->category_id)->get() as $cat)
													{{ $cat->category }}
													@endforeach
												</td>
												<td>{{ $client->phone_main }}</td>
												<td>{{ $client->phone_optional }}</td>
												<td>
													{{ Form::open(array('url' => 'manage-client/delete','method' => 'DELETE')) }}
													<input type="hidden" value='{{ $client->id }}' name='id'>
													<button class="btn btn-xs red">
														Delete <i class="fa fa-times"></i>
													</button>
													{{ Form::close() }}
												</td>
											</tr>
										@endforeach
									@endif
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