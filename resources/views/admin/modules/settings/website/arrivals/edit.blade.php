@extends('admin.layouts.admin')
@section('title', "Edit Arrival Tab")
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">Edit Arrival Tab</h4>
                    <p class="text-muted font-14 mb-4">
                        The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page
                        that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p>

                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <form method="post" action="{{route('arrivals.update', $arrival->id)}}" class="d-inline" enctype="multipart/form-data"
                                  data-parsley-validate>
                                @method('PATCH')
                                @csrf
                                <div class="form-group">
                                    <label for="no_of_product">Number of Products</label>
                                    <input type="number" class="form-control" id="name" placeholder="Enter Category name" name="no_of_product"
                                           required="required" data-parsley-min="5" data-parsley-max="20"
                                           data-parsley-required-message="Enter Number Of Product" value="{{$arrival->no_of_product}}">
                                </div>

                                <div class="form-group">
                                    <label for="cat_id">Select New Arrivals Category</label>
                                    <select name="cat_id" id="cat_id" class="form-control" required="required"
                                            data-parsley-required-message="Enter Category Name is Required">
                                        <option value="">Selected Category</option>
                                        @foreach($Categories as $category)
                                            <option value="{{$category->id}}" {{ $arrival->cat_id == $category->id ? 'selected="selected"' : '' }}>
                                                {{$category->category_name}} <b class="text-black-50">({{$category->user->user_type}})</b></option>
                                            @foreach($category->childrens as $children)
                                                <option value="{{$children->id}}" {{ $arrival->cat_id == $children->id ? 'selected="selected"' : '' }}> {{$category->category_name}}
                                                    ->{{$children->category_name}} <b class="text-black-50">({{$category->user->user_type}})</b></option>

                                                @foreach($children->childrens as $leaveItem)
                                                    <option value="{{$leaveItem->id}}" {{ $arrival->cat_id == $leaveItem->id ? 'selected="selected"' : '' }}> {{$category->category_name}}
                                                        ->{{$children->category_name ." -> " . $leaveItem->category_name}} <b
                                                                class="text-black-50">({{$category->user->user_type}})</b></option>
                                                @endforeach

                                            @endforeach
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <div class="new-checkbox">
                                        <div class="inline-widged">
                                            <label for="is_published" class="single-label">Published</label>
                                            <label class="switch">
                                                <input type="checkbox" id="is_published"
                                                       name="is_published" {{ $arrival->is_published ? 'checked="checked"' : '' }}/>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-success mr-2 float-right">Update Arrival</button>

                            </form>

                            <a href="{{route('arrivals.index')}}" class="btn btn-danger float-left">Back to Arrivals</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
