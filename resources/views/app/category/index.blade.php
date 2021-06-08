@extends('multiauth::layouts.app')

@section('title', 'Product Categories')

@section('content')
	    @include('multiauth::layouts.shared.nav')

	        <div class="main-content">


			      <div class="container-fluid">
			        <div class="row justify-content-center">
			          <div class="col-12 col-lg-10 col-xl-10">
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
					                  Product Categories
					                </h1>
					              </div>

					              <div class="col-auto">

                            <!-- Buttons -->
                            <a href="{{ route('admin.category.create') }}" class="btn btn-primary ml-2">
                              Create Category
                            </a>


                        </div>
					            </div>

			              </div>
			            </div>

			            @if(count($categories) > 0)
							 <div class="card">
              <div class="card-header">

                <!-- Title -->
                <h4 class="card-header-title">
                  Product Categories
                </h4>

                  <!-- Button -->
                    <a href="#!" class="btn btn-sm btn-white">
                      Export
                    </a>



              </div>


              <div class="table-responsive mb-0" data-list='{"valueNames": ["products-title", "products-products", "products-status", "products-rate"]}' id="ProductList">
                <table class="table table-sm table-nowrap table-hover card-table">
                  <thead>
                    <tr>
                      <th>
                       <a href="#" class="text-muted list-sort" data-sort="products-title">
                            Title
                          </a>
                      </th>
                      <th>
                       <a href="#" class="text-muted list-sort" data-sort="products-products">
                          Products
                        </a>
                      </th>
                      <th>
                       <a href="#" class="text-muted list-sort" data-sort="products-status">
                          Status
                        </a>
                      </th>

                      <th>
                        <a href="#" class="text-muted list-sort" data-sort="products-rate">
                          View Rate
                        </a>
                      </th>
                    </tr>
                  </thead>
                  <tbody class="table table-sm table-nowrap table-hover card-table">

                  	@foreach ($categories as $category)

                    <tr>
                      <td class="product-title">

                        <div class="d-flex align-items-center">

                                      <!-- Image -->
                                      <div class="avatar">
                                        <img class="avatar-img rounded mr-3" src="{{ asset('uploads/'. $category->image) }}" alt="..." />
                                      </div>

                                      <div class="ml-3">

                                        <!-- Heading -->
                                        <h4 class="font-weight-normal mb-1">
                                          <a href="{{ route('admin.category.show', $category->slug) }}">{{ $category->title}}</a>
                                        </h4>

                                        <!-- Text -->
                                        <small class="text-muted">General</small>

                                      </div>

                      </td>
                      <td>
                        0
                      </td>
                      <td>
                      	@if ($category->status == 1)
                      		<span class="text-success">●</span> Active
                      	@else
	                        <span class="text-danger">●</span> Inactive
                      	@endif
                      </td>

                      <td>
                        $55.25%
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
					                      Add and manage your Categories
					                    </h2>

					                    <!-- Content -->
					                    <p class="text-muted">
					                      This is where you’ll add product categories and manage their appearance on the site. You can also export your categories into stored documents.
					                    </p>

					                    <!-- Button -->
					                    <a href="{{ route('admin.category.create') }}" class="btn btn-primary lift">
					                    	Add Category
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
