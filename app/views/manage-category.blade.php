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

					<a class="btn btn-circle btn-scroll pull-right toggle-btn" toggle=1>
	              		<i class="fa fa-angle-double-down animated" id="down-arrow"></i>
	              	</a>
					</h3>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-8 col-md-offset-2 toggle-section toggle-section-1">
					<div class="portlet">
						<div class="portlet-body">
							<div class="tabbable">
								<div class="tab-content no-space">
									<div class="tab-pane active" id="tab_general">
										{{ Form::open(array('url' => 'manage-category/add', 'class' => 'form-horizontal form-row-seperated')) }}
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
					<a class="btn btn-circle btn-scroll pull-right toggle-btn" toggle=2>
	              		<i class="fa fa-angle-double-down animated" id="down-arrow"></i>
	              	</a>
					</h3>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 col-md-offset-2 toggle-section toggle-section-2">
					<div class="portlet">
						<div class="portlet-body">
							<div class="tabbable">
								<div class="tab-content no-space">
									<div class="tab-pane active" id="tab_general">
										{{ Form::open(array('url' => 'manage-category/add-subcategory', 'class' => 'form-horizontal form-row-seperated')) }}
										<div class="form-body">
											<div class="form-group">
												<label class="col-md-2 control-label">Category:
												<span class="required">
													 *
												</span>
												</label>
												<div class="col-md-4">
													<select name='category' class="table-group-action-input form-control" name="">
														<option>Select</option>
														@if( isset($categories))
															@foreach($categories as $categories)
																<option value="{{ $categories->id }}">{{ $categories->category }}</option>
															@endforeach
														@endif
													</select>
												</div>	

												<label class="col-md-2 control-label">Subcategory:
												<span class="required">
													 *
												</span>
												</label>
												<div class="col-md-4">
													<input type="text" name='subcategory' class='form-control'>
												</div>	
											</div>
											<div class="form-group">
												<div class="margin-right-15 actions btn-set pull-right">
													<button class="btn default"><i class="fa fa-reply"></i> Reset</button>
													<button class="btn green"><i class="fa fa-check"></i> Save</button>
												</div>
											</div>
										{{ Form::close() }}
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
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i>All Categories
							</div>
							<div class="tools">
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body">

							{{ Form::open(array('url' => 'manage-category/delete')) }}
							<input type="hidden" id='deleteArray' name='deleteArray[]'>
							<input type="hidden" id='deleteValue' name='deleteValue[]'>
							<button id='deleteBtn' class="btn btn-sm red pull-right">
								Delete <i class="fa fa-times"></i>
							</button>
							{{ Form::close() }}

							<br><br>

							<table class="table table-striped table-bordered table-hover">
							<thead>
							<tr>
								<th>
									 #
								</th>
								<th>
									 Category
								</th>
								<th>
									 Subcategory
								</th>
							</tr>
							</thead>
							<tbody>	
							@foreach($cats as $cat)
							<tr>
								<td>
									<input type="checkbox" class='checkbox categorySelect' value="{{ $cat->id }}">
								</td>
								<td>
									{{ $cat->category }}
								</td>
								<td>
									@foreach(Subcategory::where('category_id','=',$cat->id)->get() as $subcat)
										<input type="checkbox" class='checkbox subcategorySelect' value="{{ $subcat->id }}">
										{{ $subcat->subcategory }}
										<br>
									@endforeach
								</td>
							</tr>
							@endforeach
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
<script>
	var categoryVals = [] ;
	var subcategoryVals = [] ;

	function categoryDelete(){

    	categoryVals.push(0);

    	$('.categorySelect:checked').each(function(){
    		categoryVals.push($(this).val());
    	})

    	return categoryVals;
    }

	function subcategoryDelete(){

		subcategoryVals.push(1);

    	$('.subcategorySelect:checked').each(function(){
    		subcategoryVals.push($(this).val());
    	})

    	return subcategoryVals;
    }

    jQuery(document).ready(function($){
    	
    	var deleteArray = [] ;

    	$('.categorySelect').click(function(){
    		$('.subcategorySelect').prop('checked', false).uniform(); 
    		deleteArray = categoryDelete();
    		$('#deleteArray').attr('value',deleteArray);
    	})

    	$('.subcategorySelect').click(function(){
    		deleteArray = subcategoryDelete();
    		$('#deleteArray').attr('value',deleteArray);
    	})
    })
</script>
@include('includes.end-page')

