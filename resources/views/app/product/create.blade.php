@extends('multiauth::layouts.app')

@section('title', 'Create Product')

@section('content')
	    @include('multiauth::layouts.shared.nav')

	      <div class="main-content bg-fixed-bottom">
			      <div class="container-fluid">
			        <div class="row justify-content-center">
			          <div class="col-12 col-lg-10 col-xl-8">
			            <!-- Header -->
			            <div class="header mt-md-5">
			              <div class="header-body">

			                <!-- Pretitle -->
			                <h6 class="header-pretitle">
								<a href="{{ route('admin.product.index') }}">< Products	</a>
			                </h6>

			                <!-- Title -->
			                <h1 class="header-title">
			                  Create Product
			                </h1>

			              </div>
			            </div>


			           


							 <!-- Card -->

							 <form class="mb-4"
							       id="form"
							       method="post"
							       action="{{ route('admin.product.save') }}"
							       enctype="multipart/form-data">
							 	@csrf


							 	<div class="row">
								  <!-- Project name -->
						              <div class="form-group col-12">
						                <!-- Label  -->
						                <label>
						                  Product Title
						                </label>
						                <!-- Text -->
							                <small class="form-text text-muted">
							                  This is the title appearing to the product catalogue
							                </small>
						                <!-- Input -->
						                <input type="text"
						                       name="title"
						                       class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}"
						                       id="title">
						                       @if ($errors->has('title'))
				                                <span class="invalid-feedback" role="alert">
				                                    <strong>{{ $errors->first('title') }}</strong>
				                                </span>
				                               @endif

						              </div>




						               <div class="form-group col-6">

							                <!-- Label -->
							                <label class="mb-1">
							                  Product Category
							                </label>

							                <!-- Text -->
							                <small class="form-text text-muted">
							                 Category in which the product is displayed
							                </small>


							                {{-- input --}}

							                <select name="category" class="form-control mb-3">
							                	<option value="999">General</option>
							                	@foreach($categories as $category)
							                		<option value="{{ $category->id}}">{{ $category->title}}</option>
							                	@endforeach
							                	@if ($errors->has('category'))
				                                <span class="invalid-feedback" role="alert">
				                                    <strong>{{ $errors->first('category') }}</strong>
				                                </span>
				                               @endif
							                </select>

						              
						                       

							              </div>



						               <!-- Project cover -->
								             <div class="form-group col-6">

								                <!-- Label  -->
								                <label class="mb-1">
								                  Product cover
								                </label>

								                <!-- Text -->
								                <small class="form-text text-muted">
								                  Please use an image no larger than 1200px * 600px.
								                </small>

								                <!-- Dropzone -->
								                <div class="dropzon dropzone-singl mb-3" data-toggle="dropzne" id="imageHolder">

								                  <!-- Fallback -->
								                  <div class="fallback">
								                    <div class="custom-file">
								                      <input type="file" name="file" class="custom-file-input" id="projectCoverUploads">
								                      <label class="custom-file-label" for="projectCoverUploads">Choose file</label>
								                    </div>
								                  </div>

								                {{--   <!Preview >
								                  <div class="dz-preview dz-preview-single">
								                    <div class="dz-preview-cover">
								                      <img class="dz-preview-img" src="data:image/svg+xml,%3csvg3c/svg%3e" alt="..."data-options='{"url": "https://", "maxFiles": 1, "acceptedFiles": "image/*"}'>
								                    </div>
								                  </div> --}}

								                </div>
								              </div>


								              <div class="form-group col-12">
						                <!-- Label  -->
								                <label>
								                  Product Price
								                </label>
								                <!-- Text -->
									                <small class="form-text text-muted">
									                  This is the price appearing to the product catalogue
									                </small>
								                <!-- Input -->
								                <input type="text"
								                       name="price"
								                       class="form-control {{ $errors->has('price') ? ' is-invalid' : '' }}"
								                       id="price">
								                       @if ($errors->has('price'))
						                                <span class="invalid-feedback" role="alert">
						                                    <strong>{{ $errors->first('price') }}</strong>
						                                </span>
						                               @endif

								              </div>



								                <div class="form-group col-12">
						                <!-- Label  -->
								                <label>
								                  Product Summary
								                </label>
								                <!-- Text -->
									                <small class="form-text text-muted">
									                  This is the summary of the product appearing to the product catalogue
									                </small>
								                <!-- Input -->
								                <textarea class="form-control" name="summary"></textarea>
								                @if ($errors->has('summary'))
						                                <span class="invalid-feedback" role="alert">
						                                    <strong>{{ $errors->first('summary') }}</strong>
						                                </span>
						                               @endif
								                       

								              </div>




						               <div class="form-group col-12">

							                <!-- Label -->
							                <label class="mb-1">
							                  Product Description
							                </label>

							                <!-- Text -->
							                <small class="form-text text-muted">
							                  Describe shortly the product, this will appear in the products description to customers.
							                </small>

							                <!-- Textarea -->
							                <div data-toggle="quill" id="editor"></div>
							                <textarea name="description" id="description" hidden></textarea>

							           </div>

							       </div>




						              

						               <div class="form-group">

						               	 <hr class="mt-5 mb-5">

						               	 <!-- Buttons -->
							              <button type="submit"
							                      id="submit-all"
							                      class="btn btn-block btn-primary">
							                Create Product
							              </button>
						               </div>

						               



							 </form>


			          </div>
			        </div> <!-- / .row -->
			      </div>
	        </div>

@endsection


@section('scripts')

	<script>
		var quill = new Quill('#editor', {
	    // theme: 'snow'
	  });






		// var e = document.querySelectorAll('[data-toggle="dropzone"]');
		//  "undefined" != typeof Dropzone &&
		//  	e &&
		// 	((Dropzone.autoDiscover = !1),
		// 	(Dropzone.thumbnailWidth = null),
  //      		(Dropzone.thumbnailHeight = null),
  //      		[].forEach.call(e, function (e) {
  //      			!(function (e) {
  //      				var t = void 0,
  //      					a = e.dataset.options;
  //      				a = a ? JSON.parse(a) : {};
  //      				var o = {
  //                           previewsContainer: e.querySelector(".dz-preview"),
  //                           previewTemplate: e.querySelector(".dz-preview").innerHTML,
  //                           init: function () {
  //                               this.on("addedfile", function (e) {
  //                                   1 == a.maxFiles && t && this.removeFile(t), (t = e);
  //                               });
  //                           },
  //                       },
  //                       l = Object.assign(o, a);
  //                        (e.querySelector(".dz-preview").innerHTML = ""), new Dropzone(e, l);
  //      			})(e);
  //      		}));





		// Dropzone.options.imageHolder =
  //        {
  //        	autoProcessQueue: false,
  //        	acceptedFiles:".jpg,.png",
  //        	maxFiles: 1,
  //        	paramName: "file",
  //        	url: "http://localhost:8000/admin/categories/create",
  //        	headers: {
		// 	    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		// 	  },

  //        	init: function () {
  //        		var submitButton = document.querySelector('#submit-all');
  //        		myDropzone = this;

  //        		submitButton.addEventListener('click', function  (e) {
  //        			e.preventDefault();
  //        			e.stopPropagation();
  //        			myDropzone.processQueue();
  //        		});

  //        		this.on("sending", function(file) {
		// 	        alert('Sending the file' +  file.name)
		// 	      });


  //        		this.on("complete", function  () {
  //        			if(this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0 ){
  //        				var _this = this;
  //        				_this.removeAllFiles();
  //        			}
  //        		});

         		// this.on("success", function(file, serverResponse) {
				      // Called after the file successfully uploaded.
				      // console.log(serverResponse);

				      // If the image is already a thumbnail:
				      // this.emit('thumbnail', file, serverResponse.imageUrl);

				      // If it needs resizing:
				      // this.createThumbnailFromUrl(file, serverResponse.imageUrl);
				    // });




  //        		$('#submit-all').on('click', function () {
  //        			var description = $(".ql-editor").html();
  //       			$("#description").val(description);
  //        			myDropzone.processQueue();
  //        		});

  //        		this.on("complete", function () {
  //        			if (this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0) {
  //        				var _this = this;
  //        				_this.removeFiles();
  //        			}
  //        		});

         	// }
		// };

		$("#form").submit(function() {
        	var description = $(".ql-editor").html();
        	$("#description").val(description);
	    });
	</script>
@endsection
