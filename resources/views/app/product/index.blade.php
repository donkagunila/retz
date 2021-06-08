@extends('multiauth::layouts.app')

@section('title', 'Product Categories')

@section('content')
	    @include('multiauth::layouts.shared.nav')

	        <div class="main-content">


			      <div class="container-fluid">
			        <div class="row justify-content-center">
			          <div class="col-12 col-lg-10 col-xl-8">
			            <!-- Header -->
			            <div class="header mt-md-5">
			              <div class="header-body">

			              	<div class="row align-items-center">
			                  <div class="col">
					                <!-- Pretitle -->
					                <h6 class="header-pretitle">
										products
					                </h6>

					                <!-- Title -->
					                <h1 class="header-title">
					                  All Products
					                </h1>
					              </div>

					              <div class="col-auto">

                            <!-- Buttons -->
                            <a href="{{ route('admin.product.create') }}" class="btn btn-primary ml-2">
                              Create Product
                            </a>
                        </div>
					            </div>

			              </div>
			            </div>

			            @if(count($products) > 0)
							 <div class="card">
					              <div class="card-header">

					                <!-- Title -->
					                <h4 class="card-header-title">
					                  All Products
					                </h4>

					                 <!-- Button -->
					                <a href="#!" class="btn btn-sm btn-white">
					                  Export
					                </a>



					              </div>


						              <div class="table-responsive mb-0" data-list='{"valueNames": ["products-title", "products-stock", "products-price", "products-sales"]}' id="productsList">
						                <table class="table table-sm table-nowrap table-hover card-table">
						                  <thead>
						                    <tr>
						                      <th>
						                        <a href="#" class="text-muted list-sort" data-sort="products-title">
						                          Title
						                        </a>
						                      </th>
						                      <th>
						                        <a href="#" class="text-muted list-sort" data-sort="products-stock">
						                          Stock
						                        </a>
						                      </th>
						                      <th>
						                        Status
						                      </th>

						                      <th>
						                        View Rate
						                      </th>
						                    </tr>
						                  </thead>
						                  <tbody class="list">

						                  	@foreach ($products as $product)

						                    <tr>
						                      <td class="products-title">
												<div class="d-flex align-items-center">

						                          <!-- Image -->
						                          <div class="avatar">
						                            <img class="avatar-img rounded mr-3" src="{{ asset('uploads/products/'. $product->cover) }}" alt="..." />
						                          </div>

						                          <div class="ml-3">

						                            <!-- Heading -->
						                            <h4 class="font-weight-normal mb-1">
						                            	<a href="{{ route('admin.product.show', $product->slug) }}">{{ $product->title}}</a>
						                            </h4>

						                            <!-- Text -->
						                            <small class="text-muted">General</small>

						                          </div>

						                        </div>

						                      </td>
						                      <td>
						                        0
						                      </td>
						                      <td>
						                      	@if ($product->status == 1)
						                      		<span class="text-success">●</span> Active
						                      	@else
							                        <span class="text-danger">●</span> Inactive
						                      	@endif
						                      </td>

						                      <td>
						                        {{ $product->price ?? 0 }}
						                      </td>
						                    </tr>
						                  	@endforeach

						                  </tbody>
						                </table>
						              </div>
						            </div>
									@else
										 <!-- Card -->
								            <div class="card">
								              <div class="card-body text-center">
								                <div class="row justify-content-center">
								                  <div class="col-12 col-md-10 col-xl-8 m-4">

								                    <!-- Image -->
								                    <img src="{{ asset('assets/img/illustrations/empty.svg') }}" alt="..." class="img-fluid mt-5 mb-4" style="max-width: 272px;">

								                    <!-- Title -->
								                    <h2>
								                      Add and manage products
								                    </h2>

								                    <!-- Content -->
								                    <p class="text-muted mb-5">
								                      This is where you’ll add products and manage their appearance on the site. You can also export your products into stored documents.
								                    </p>


								                    <!-- Button -->
								                    <a href="{{ route('admin.product.create') }}" class="btn btn-primary lift">
								                    	Add product
								                    </a>

								                  </div>
								                </div> <!-- / .row -->
								              </div>
								            </div>
						            @endif
			          </div>
			        </div> <!-- / .row -->
			      </div>
	        </div>

@endsection
