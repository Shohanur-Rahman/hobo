@extends('admin.layouts.admin')
@section('title', "Edit Category")
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">Edit Category</h4>
                    <p class="text-muted font-14 mb-4">
                        The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page
                        that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p>

                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <form method="post" action="{{route('product-categories.update',$productCategory->id)}}" class="d-inline">
                                @method('PATCH')
                                @csrf
                                <div class="form-group">
                                    <label for="name">Category Name</label>
                                    <input type="text" class="form-control" value="{{$productCategory->category_name ?? old('product_name')}}" id="name" placeholder="Enter Category name" name="category_name" required="required" maxlength="20" data-parsley-error-message="Enter Category name">

                                    @error('category_name') <span class="text-danger">{{$message}}</span> @enderror
                                </div>

                                <div class="form-group">
                                    <label for="parent_category_dropdown" class="w-100">Parent Category</label>
                                    <select name="parent_id" id="parent_category_dropdown" class="form-control">
                                        <option value="">Selection Category</option>
                                        @foreach($Categories as $category)
                                            @if($productCategory->id != $category->id)
                                            <option value="{{$category->id}}" {{($category->id === $productCategory->parent_id) ? 'selected' : ''}}>{{$category->category_name}} <b class="text-black-50">({{$category->user->user_type}})</b></option>
                                            @endif
                                            @foreach($category->childrens as $children)
                                                <option value="{{$children->id}}" {{($children->id === $productCategory->parent_id) ? 'selected' : ''}}> {{$category->category_name . ' -> ' . $children->category_name}} <b class="text-black-50">({{$children->user->user_type}})</b></option>
                                            @endforeach
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <div class="new-checkbox">
                                        <div class="inline-widged">
                                            <label for="is_top_menu" class="single-label">Show On Top Menu</label>
                                            <label class="switch">
                                                <input type="checkbox" id="is_top_menu" value="1" name="is_top_menu" {{ $productCategory->is_top_menu ? 'checked="checked"' : '' }}/>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>


                                @can('access-settings',$productCategory)
                                    <button type="submit" class="btn btn-success mr-2 float-right">Update Category</button>
                                @endcan
                            </form>

                            <a href="{{route('product-categories.index')}}" class="btn btn-danger float-left">Back to Categories</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



    @include('admin.partials.partial_assets.kendo')
    <script type="text/javascript">
        var parentCategoryCombo;
        $(document).ready(function(){
            parentCategoryCombo = $("#parent_category_dropdown").kendoComboBox().data('kendoComboBox');

            parentCategoryCombo.bind("change", function () {
                if (parentCategoryCombo.selectedIndex === -1 && parentCategoryCombo.value()) {
                    parentCategoryCombo.value('');
                }
            });
        });
    </script>

@endsection
