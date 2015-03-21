@include('includes.head')
@include('includes.top-nav')

<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!--  PUT MODAL IF NEED -->
			<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
					Product List <small>view all products</small>
					</h3>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i>Products
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
									 Subcategory
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
							@foreach( $products as $product )
							<tr>
								<td>
									{{ $product->name }}
								</td>
								<td>
									@foreach(Category::where('id','=',$product->category_id)->get() as $category)
									 {{ $category->category }}
									@endforeach
								</td>
								<td>
									@foreach(Subcategory::where('id','=',$product->subcategory_id)->get() as $subcategory)
									 {{ $subcategory->subcategory }}
									@endforeach
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
<script src="assets/scripts/custom/table-advanced.js"></script>
<script>
jQuery(document).ready(function() {
   TableAdvanced.init();
});
</script>
@include('includes.end-page')