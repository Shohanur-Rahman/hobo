@extends('admin.layouts.admin')
@section('title', "New Category")

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">New Category</h4>
                    <p class="text-muted font-14 mb-4">
                        The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page
                        that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p>

                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <form method="post" action="{{route('product-categories.store')}}" class="d-inline" data-parsley-validate>
                                @csrf
                                <div class="form-group">
                                    <label for="name">Category Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter Category name" name="category_name" required="required" maxlength="20" data-parsley-error-message="Enter Category name">

                                    @error('category_name') <span class="text-danger">{{$message}}</span> @enderror
                                </div>

                                <div class="form-group">
                                    <label for="parent_category_dropdown" class="w-100">Parent Category</label>
                                    <select name="parent_id" id="parent_category_dropdown" class="form-control" data-placeholder="Select Category">
                                        <option value="">Selected Category</option>
                                        @foreach($Categories as $category)
                                            <option value="{{$category->id}}">{{$category->category_name}} <b class="text-black-50">({{$category->user->user_type}})</b></option>
                                            @foreach($category->childrens as $children)
                                                <option value="{{$children->id}}"> {{$category->category_name . ' -> ' . $children->category_name}} <b class="text-black-50">({{$children->user->user_type}})</b></option>
                                            @endforeach
                                            @endforeach
                                    </select>
                                </div>


                                <div class="form-group">
                                    <div class="new-checkbox">
                                        <div class="inline-widged">
                                            <label for="is_top_menu" class="single-label">Show On Top Menu</label>
                                            <label class="switch">
                                                <input type="checkbox" id="is_top_menu"  name="is_top_menu"/>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-success mr-2 float-right">Save Category</button>

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
