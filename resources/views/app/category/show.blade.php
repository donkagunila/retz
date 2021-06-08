@extends('multiauth::layouts.app')

@section('title', 'Categories ~ ' . $category->title)

@section('content')
	    @include('multiauth::layouts.shared.nav')

	    <div class="main-content bg-fixed-bottom">

			<div class="container-fluid">
			    <div class="row justify-content-center">

			        <div class="col-12 col-lg-10 col-xl-10">
			            <!-- Header -->
			            <div class="header mt-md-5">
			            	<div class="header-body">
				                <!-- Pretitle -->
				                <h6 class="header-pretitle">
									<a href="{{ route('admin.category.index') }}">< Categories</a>
				                </h6>

				                <!-- Title -->
				                <h1 class="header-title">
				                  {{ $category->title }}
				                </h1>

			              	</div>
			            </div>

			            <div class="row">
			            	<div class="col-12 col-lg-8 col-xl-7">
                                <div class="card-adjust-xl">
			            		<div class="card">

			            			<div class="card-body">
					            		<form class="mb-4"
										      id="mainform"
										      method="post"
										      action="{{ route('admin.category.update', $category->slug) }}"
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
									                       id="title"
									                       value="{{ $category->title }}"
									                       class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}">
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
										                <div data-toggle="quill" id="editor">{!! $category->description !!}</div>
										                <textarea name="description" id="description" hidden></textarea>
										        </div>

									                <!-- Buttons -->

										</form>
									</div>

								</div>
                                </div>
			            	</div>

			            	<div class="col-12 col-lg-4 col-xl-5">

			            		<div class="card">
									<div class="card-header">
					                    <!-- Title -->
					                    <h4 class="card-header-title">
					                      Category Display Image
					                    </h4>
					                </div>
									<div class="card-body">
                                        <!-- Text -->
                                        <small class="form-text text-muted">
                                            Display image for your category, choose a good one
                                        </small>

									<form action="{{ route('admin.category.updateavatar', $category->id) }}" class="dropzone" id="addImage" enctype="multipart/form-data" >
										@csrf
										{{-- <input type="text"> --}}
						            </form>
						        	</div>



                                    <div class="card-header">
                                        <!-- Title -->
                                        <h4 class="card-header-title">
                                            Category Status
                                        </h4>
                                    </div>

                                    <div class="card-body">

                                        <form action="">

                                            <div class="form-group">

                                                <!-- Text -->
                                                <small class="form-text text-muted">
                                                    Category status toggles the visibility of all products in this category, on or off
                                                </small>

                                                <!-- Switch -->
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" name="status" class="custom-control-input" id="statusOn">
                                                    <label class="custom-control-label" for="statusOn">ON</label>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
								</div>





			            	</div>
			            </div>

                        <button
                                id="submit-all"
                                class="btn btn-primary float-right">
                            Update Category
                        </button>



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

		$(document).ready(function(){
            $('#submit-all').on('click', function(){
                alert('submit');
                $('#mainform').submit();
            });
        });



	$('#statusOn').on('change', function  () {
		if (this.checked) {
			$(this).prop("checked");
		};
		$('#statusOn').val(this.checked);
		console.log($('#statusOn').val());
		$.ajax({
			// url: 'http://localhost:8000/admin/categories/home-decor'
		})
	});

	Dropzone.options.addImage =
        {
         	autoProcessQueue: false,
         	acceptedFiles:".jpg,.png",
         	thumbnailWidth: null,
         	thumbnailHeight: null,
         	maxFiles: 1,
         	paramName: 'file',
         	previewsContainer: &(".dz-preview"),
         	previewTemplate: $(".dz-preview").html(),
         	headers: {
			    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			  },
			 init: function  () {
			 	this.on('success', function (file, response) {
			 		console.log(response);
			 	});
			 }
		}

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








		var e = document.querySelectorAll('#addImage');
		alert(e: 'e');
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
