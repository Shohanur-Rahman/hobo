@extends('admin.layouts.admin')
@section('title', "New MainSlider")
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">New Main Slider</h4>
                    <p class="text-muted font-14 mb-4">
                        The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page
                        that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p>

                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <form method="post" action="{{route('main-sliders.store')}}" class="d-inline" enctype="multipart/form-data" data-parsley-validate>
                                @csrf
                                <div class="form-group">
                                    <label for="name">Slider Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter Slider name" name="name" required="required" data-parsley-maxlength="80" data-parsley-required-message="Enter Slider name">
                                </div>

                                <div class="form-group">
                                    <label for="caption">Caption</label>
                                    <input type="text" class="form-control" id="caption" placeholder="Enter Slider Caption" name="caption" required="required" data-parsley-maxlength="80" data-parsley-required-message="Enter Slider Caption">
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Image Url</label>
                                    <label for="imgInp" class="upload-preview">
                                        <img src="{{asset('images/noimage.PNG')}}" id="uploadPreview" />
                                    </label>
                                    <input type="file" name="image_url" class="hdn-uploder" id="imgInp" required="required" accept="image/*" data-parsley-error-message="Upload Main Slider image"/>

                                </div>

                                <div class="form-group">
                                    <label for="categoryId">Category Name</label>
                                    <select  name="category_id" required class="form-control" id="categoryId" data-parsley-error-message="Enter Slider category_id" data-parsley-trigger="change">
                                        <option value="">Select Category Name</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="productId">Product Id</label>
                                    <select  name="product_id" required class="form-control" id="productId" data-parsley-error-message="Enter Slider product_id" data-parsley-trigger="change">
                                        <option value="">Select Product Id</option>
                                        @foreach($products as $product)
                                            <option value="{{$product->id}}">{{$product->title}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-success mr-2 float-right">Save Main Slider</button>
                            </form>

                            <a href="{{route('main-sliders.index')}}" class="btn btn-danger float-left">Back to Main Sliders</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){

            $("#imgInp").change(function () {
                readURL(this);
            });


            $("#categoryId").click(function(){
                var categoryVal = $(this).val();

                if(categoryVal.length>=1){
                    $('#productId').prop('disabled', 'disabled');
                    $('#productId').removeAttr('required');
                }else{
                    $('#productId').removeAttr('disabled');
                }
            });

            $("#productId").click(function(){
                var productVal = $(this).val();

                if(productVal.length>=1){
                    $('#categoryId').prop('disabled', 'disabled');
                    $('#categoryId').removeAttr('required');
                }else{
                    $('#categoryId').removeAttr('disabled');
                }
            });

        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $("#uploadPreview").attr("src", e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

@endsection
