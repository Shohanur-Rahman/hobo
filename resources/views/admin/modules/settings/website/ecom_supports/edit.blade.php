@extends('admin.layouts.admin')
@section('title', "Edit Ecom Support")
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">Edit Product Feature Tab</h4>
                    <p class="text-muted font-14 mb-4">
                        The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page
                        that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p>

                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <form method="post" action="{{route('ecom-supports.update', $ecomSupport->id)}}" class="d-inline" enctype="multipart/form-data" data-parsley-validate>
                                @method('PATCH')
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter E-commerce Support Name" name="name" data-parsley-max="100" data-parsley-trigger="change" required="required" data-parsley-required-message="Enter E-commerce Support name" value="{{$ecomSupport->name ?? old('name')}}">
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea
                                        class="form-control rounded-0 form-control-md"
                                        id="description"
                                        placeholder="Sort Description"
                                        name="description"
                                        required="required"
                                        data-parsley-error-message="Enter E-commerce Support description"
                                    >{{$ecomSupport->description ?? old('description')}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Image Url</label>
                                    <label for="imgInp" class="upload-preview">
                                        <img src="{{$ecomSupport->image_url ? asset($ecomSupport->image_url) : asset('images/noimage.PNG') }}" id="uploadPreview" />
                                    </label>
                                    <input type="file" name="image_url" class="hdn-uploder" id="imgInp" {{ $ecomSupport->image_url? '' : 'required="required"'}} accept="image/*" data-parsley-error-message="Upload E-commerce Support image"/>
                                </div>

                                <div class="form-group">
                                    <div class="new-checkbox">
                                        <div class="inline-widged">
                                            <label for="is_published" class="single-label">Published</label>
                                            <label class="switch">
                                                <input type="checkbox" id="is_published" name="is_published" {{ $ecomSupport->is_published ? 'checked="checked"' : '' }}/>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-success mr-2 float-right">Setting Update</button>

                            </form>

                            <a href="{{route('ecom-supports.index')}}" class="btn btn-danger float-left">Back to E-commerce Support</a>
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
