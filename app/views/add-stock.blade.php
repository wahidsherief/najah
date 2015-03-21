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
					Stock Add <small>create new stock</small>
					</h3>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
						{{ Form::open(array('url' => 'add-stock/add', 'class' => 'form-horizontal form-row-seperated')) }}
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
													<label class="col-md-2 control-label">Invoice No:
													<span class="required">
														 *
													</span>
													</label>
													<div class="col-md-10">
														<input type="text" class="form-control" name="invoice_id" placeholder="" value="{{ Input::old('invoice_id') }}">
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
															<select class="table-group-action-input form-control" name="category_id"  required>
																<option>Select</option>
																@if( isset($category))
																	@foreach($category as $categories)
																		<option value='{{ $categories->id }}'>{{ $categories->category }}</option>
																	@endforeach
																@endif
															</select>
														</div>													
														<label class="col-md-2 control-label">Sub-category:
														<span class="required">
															 *
														</span>
														</label>
														<div class="col-md-2">
															<select class="table-group-action-input form-control" name="subcategory_id" required>
																<option>Select</option>
																@if( isset($subcategory))
																	@foreach($subcategory as $subcategories)
																		<option value='{{ $subcategories->id }}'>{{ $subcategories->subcategory }}</option>
																	@endforeach
																@endif
															</select>
														</div>													
														<label class="col-md-2 control-label">Product:
														<span class="required">
															 *
														</span>
														</label>
														<div class="col-md-2">
															<select class="table-group-action-input form-control" name="product_id" required>
																<option>Select</option>
																@if( isset($product))
																	@foreach($product as $products)
																		<option value='{{ $products->id }}'>{{ $products->name }}</option>
																	@endforeach
																@endif
															</select>
														</div>
													</div>
													<div class="form-group">													
														<label class="col-md-2 control-label">Quantity:
														<span class="required">
															 *
														</span>
														</label>
														<div class="col-md-2">
															<input type="text" class="form-control" name="quantity" value="{{ Input::old('quantity') }}" placeholder="">
														</div>
														<label class="col-md-2 control-label">Purchase price:
														<span class="required">
															 *
														</span>
														</label>
														<div class="col-md-2">
															<input type="text" class="form-control" name="purchase_price" value="{{ Input::old('purchase_price') }}" placeholder="">
														</div>												
														<label class="col-md-2 control-label">Purchase Date:
														<span class="required">
															 *
														</span>
														</label>
														<div class="col-md-2">
															<input type="text" class="form-control" name="purchase_date" value="{{ Input::old('purchase_date') }}" placeholder="">
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
															<input type="text" class="form-control" name="total_amount" value="{{ Input::old('total_amount') }}" placeholder="">
														</div>													
														<label class="col-md-2 control-label">Paid Amount:
														</label>
														<div class="col-md-2">
															<input type="text" class="form-control" name="paid_amount" value="{{ Input::old('paid_amount') }}" placeholder="">
														</div>												
														<label class="col-md-2 control-label">Due Amount:
														<span class="required">
															 *
														</span>
														</label>
														<div class="col-md-2">
															<input type="text" class="form-control" name="due_amount" value="{{ Input::old('due_amount') }}" placeholder="">
														</div>
														<br><br>
														<div class="form-group">
															<label class="col-md-2 control-label">Note
															</label>
															<div class="col-md-10">
																<textarea class="form-control" name="note" placeholder="">{{ Input::old('note') }}</textarea>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						{{ Form::close() }}
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
