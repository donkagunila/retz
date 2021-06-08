@extends('multiauth::layouts.app')

@section('title', 'Product Categories')

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
								<a href="{{ route('admin.category.index') }}">< Categories</a>
			                </h6>

			                <!-- Title -->
			                <h1 class="header-title">
			                  Create Categories
			                </h1>

			              </div>
			            </div>


							 <!-- Card -->

							 <form class="mb-4"
							       id="form"
							       method="post"
							       action="{{ route('admin.category.save') }}"
							       enctype="multipart/form-data">
							 	@csrf
								  <!-- Project name -->
						              <div class="form-group">
						                <!-- Label  -->
						                <label>
						                  Category Title
						                </label>
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

						               <div class="form-group">

							                <!-- Label -->
							                <label class="mb-1">
							                  Category Description
							                </label>

							                <!-- Text -->
							                <small class="form-text text-muted">
							                  Describe shortly the category and the contents expected, make it count.
							                </small>

							                <!-- Textarea -->
							                <div data-toggle="quill" id="editor"></div>
							                <textarea name="description" id="description" hidden></textarea>

							              </div>


											  <!-- Divider -->
							              <hr class="mt-4 mb-5">

								              <!-- Project cover -->
								              <div class="form-group">

								                <!-- Label  -->
								                <label class="mb-1">
								                  Category cover
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


							               <!-- Divider -->
							              <hr class="mt-5 mb-5">


									              <div class="row">
									                <div class="col-12 col-md-6">

									                  <!-- Private project -->
									                  <div class="form-group">

									                    <!-- Label -->
									                    <label class="mb-1">
									                      Active Category
									                    </label>

									                    <!-- Text -->
									                    <small class="form-text text-muted">
									                      Checking this will make the project visible right away, you can change  later in ctegory settings
									                    </small>

									                    <!-- Switch -->
									                    <div class="custom-control custom-switch">
									                      <input type="checkbox" name="status" class="custom-control-input" id="switchOne">
									                      <label class="custom-control-label" for="switchOne"></label>
									                    </div>

									                  </div>

									                </div>
									                <div class="col-12 col-md-6">

									                  <!-- Warning -->
									                  <div class="card bg-light border">
									                    <div class="card-body">

									                      <!-- Heading -->
									                      <h4 class="mb-2">
									                        <i class="fe fe-alert-triangle"></i> Warning
									                      </h4>

									                      <!-- Text -->
									                      <p class="small text-muted mb-0">
									                        Once a category is inactive all products in that category are inactive too, use this to control whole product category
									                      </p>

									                    </div>
									                  </div>

									                </div>
									              </div> <!-- / .row -->




						               <hr class="mt-5 mb-5">

						                <!-- Buttons -->
							              <button type="submit"
							                      id="submit-all"
							                      class="btn btn-block btn-primary">
							                Create project
							              </button>

							              <a href="{{ route('admin.category.index')}}" class="btn btn-block btn-link text-muted">
							                Cancel this project
							              </a>


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
