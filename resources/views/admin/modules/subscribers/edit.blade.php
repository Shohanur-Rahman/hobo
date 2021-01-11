@extends('admin.layouts.admin')
@section('title', "Edit Subscriber")
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">Edit Subscriber</h4>
                    <p class="text-muted font-14 mb-4">
                        The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page
                        that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p>

                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <form method="post" action="{{route('subscribers.update',$newsLetter->id)}}" class="d-inline" data-parsley-validate>
                                @method('PATCH')
                                @csrf
                               {{-- <div class="form-group">
                                    <label for="color">Product Color</label>
                                    <input type="text" class="form-control" value="{{$productColor->color ?? old('color')}}" id="color" maxlength="20" placeholder="Enter Product Color" name="color" required="required" data-parsley-error-message="Enter Product Color">
                                </div>
--}}

                                <div class="form-group">
                                    <div class="new-checkbox">
                                        <div class="inline-widged">
                                            <label for="is_active" class="single-label">Is Active</label>
                                            <label class="switch">
                                                <input type="checkbox" id="is_active"  name="is_active" {{$newsLetter->is_active ? 'checked' : ''}}/>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-success float-right mr-2">Update Subscriber</button>
                            </form>

                            <a href="{{route('subscribers.index')}}" class="btn btn-danger float-left">Back to Subscriber Color</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

