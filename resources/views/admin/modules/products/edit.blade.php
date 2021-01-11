@extends('admin.layouts.admin') @section('title', "Edit Product") @section('content') @include('admin.partials.partial_assets.kendo')


<div class="row">
    <div class="col-md-9">
        <form method="post" action="{{route('products.update', $aProduct->id)}}" enctype="multipart/form-data" data-parsley-validate>
            @method('PATCH')
            @csrf

            <input type="hidden" name="categories" id="categories" value="{{$existingCatMap}}"/>
            <input type="hidden" name="tags" id="hdnTagsId" value="{{$existingTagMap}}" />
            <input type="hidden" name="color" id="colorId" value="{{$existingColorMap}}"/>
            <input type="hidden" name="size" id="sizeId" value="{{$existingSizeMap}}"/>

        <div class="tab-content pt-0">
            <div class="tab-pane active" id="tabProductOverview">
                <div class="card mb-30">
                    <div class="card-body py-3">
                        <div class="d-flex align-items-center pb-3">
                            <div class="icon font-30 text-primary">
                                <i class="fa fa-ravelry" aria-hidden="true"></i>
                            </div>
                            <div class="icon-text pl-4">
                                <h5 class="mb-0">Product Details</h5>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="new-checkbox">
                                        <!-- Rectangular switch -->
                                        <div class="inline-widged">
                                          <label for="is_published" class="single-label">Published</label>
                                            <label class="switch">
                                                <input type="checkbox" id="is_published" name="is_published" {{ $aProduct->is_published ? 'checked="checked"' : '' }} />
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                        <div class="inline-widged">
                                            <label for="is_new" class="single-label">Is New?</label>
                                            <label class="switch">
                                                <input type="checkbox" id="is_new" name="is_new" {{ $aProduct->is_new ? 'checked="checked"' : '' }} />
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                        <div class="inline-widged">
                                            <label for="is_feature" class="single-label">Is Feature?</label>
                                            <label class="switch">
                                                <input type="checkbox" id="is_feature" name="is_feature" {{ $aProduct->is_feature ? 'checked="checked"' : '' }} />
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                        <div class="inline-widged">
                                            <label for="show_on_home" class="single-label">Show on Home</label>
                                            <label class="switch">
                                                <input type="checkbox" id="show_on_home" name="show_on_home" {{ $aProduct->show_on_home ? 'checked="checked"' : '' }}/>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                        <div class="inline-widged">
                                            <label for="allow_review" class="single-label">Allow Review?</label>
                                            <label class="switch">
                                                <input type="checkbox" id="allow_review" name="allow_review" {{ $aProduct->allow_review ? 'checked="checked"' : '' }}/>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" class="form-control"  id="title" placeholder="Product title" name="title"data-parsley-error-message="Product title is required" value="{{$aProduct->title}}" maxlength="200" />
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="old_price">Old Price</label>
                                            <input class="currancy_touchspin" type="text" name="old_price" id="old_price" value="{{$aProduct->old_price}}" />
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="new_price">New Price</label>
                                            <input class="currancy_touchspin" type="text" name="new_price" id="new_price" value="{{$aProduct->new_price}}" />
                                            <span class="parsley-errors-list filled" id="error"></span>
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="sku">Stock keeping unit</label>
                                            <input class="form-control" type="text" name="sku" id="sku" value="{{$aProduct->sku}}" />
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="available_start_date">Available On</label>
                                            <input class="form-control rounded-0 form-control-md" type="date" id="available_start_date" name="available_start_date" value="{{$aProduct->available_start_date ? $aProduct->available_start_date : ''}}" />
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="available_end_date">Available End</label>
                                            <input class="form-control rounded-0 form-control-md" type="date" id="available_end_date" name="available_end_date" value="{{$aProduct->available_end_date}}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="short_description">Sort Description</label>
                                    <textarea
                                        class="form-control rounded-0 form-control-md"
                                        rows="6"
                                        id="short_description"
                                        placeholder="Sort Description"
                                        name="short_description"
                                        required="required"
                                        data-parsley-error-message="Enter product short description"
                                    >{!! $aProduct->short_description !!}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="description">Product Description</label>
                                    <textarea class="kendo_editor" rows="6" id="description" placeholder="Sort Description" name="description" required="required" data-parsley-error-message="Enter product description">{!! $aProduct->description !!}</textarea>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
            <div class="tab-pane" id="tabMapping">
                <div class="card mb-30">
                    <div class="card-body py-3">
                        <div class="d-flex align-items-center pb-3">
                            <div class="icon font-30 text-primary">
                                <i class="fa fa-ravelry" aria-hidden="true"></i>
                            </div>
                            <div class="icon-text pl-4">
                                <h5 class="mb-0">Mapping </h5>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="form-label">Featured Image</label>
                                    <label for="imgInp" class="upload-preview">
                                        <img src="{{$aProduct->featured_image ? asset($aProduct->featured_image) : asset('images/noimage.PNG') }}" id="uploadPreview" />
                                    </label>
                                    <input type="file" name="imgInp" class="hdn-uploder" id="imgInp" accept="image/*" data-parsley-error-message="Upload featured image" {{ $aProduct->featured_image? '' : 'required="required"' }}/>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="brand_id">Brand</label>
                                    <select id="brand_id" class="form-control" name="brand_id" data-parsley-error-message="Choose your brand id">
                                        <option value="">-- Select One --</option>
                                        @foreach($brands as $cat)
                                        <option value="{{$cat->id}}" {{ $aProduct->brand_id == $cat->id ? 'selected="selected"' : '' }}>{{$cat->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <label for="mltSize" class="col-form-label">Size</label>
                                    <select id="mltSize" class="form-control" data-placeholder="Size" data-parsley-error-message="Choose product Size">

                                        @foreach($productSizes as $size)
                                            <option value="{{$size->id}}">{{$size->size}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <label for="mltColor" class="col-form-label">Color</label>
                                    <select id="mltColor" class="form-control" data-placeholder="Select at least one tag"  data-parsley-error-message="Choose a color">
                                        @foreach($productColors as $color)
                                            <option value="{{$color->id}}">{{$color->color}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-12 col-xs-12">
                               <div class="input-field">
                                    <label class="active">Photos</label>
                                    <div class="input-images-1" style="padding-top: .5rem;"></div>
                                </div>
                            </div>
                            
                            <div class="col-sm-12 col-xs-12">
                               <a href="{{route('products.gallery', $aProduct->id)}}">Delete Gallery Images</a>
                            </div>

                            <div class="col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="mltCategories" class="col-form-label">Categories</label>
                            <select id="mltCategories" class="form-control" data-placeholder="Select at least one category" required="required" data-parsley-error-message="Choose at least one category">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->category_name}} <b class="text-black-50">({{$category->user->user_type}})</b></option>
                                    @foreach($category->childrens as $children)
                                        <option value="{{$children->id}}"> {{$category->category_name}} ->{{$children->category_name}} <b class="text-black-50">({{$category->user->user_type}})</b></option>

                                        @foreach($children->childrens as $leaveItem)
                                            <option value="{{$leaveItem->id}}"> {{$category->category_name}} ->{{$children->category_name ." -> " . $leaveItem->category_name}} <b class="text-black-50">({{$category->user->user_type}})</b></option>
                                        @endforeach

                                    @endforeach
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="mltTags" class="col-form-label">Tags</label>
                            <select id="mltTags" class="form-control" data-placeholder="Select at least one tag" required="required" data-parsley-error-message="Choose at least one tag">
                                @foreach($tags as $cat)
                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="tab-pane" id="tabShipping">

                <div class="card mb-30">
                    <div class="card-body py-3">
                        <div class="d-flex align-items-center pb-3">
                            <div class="icon font-30 text-primary">
                                <i class="fa fa-ravelry" aria-hidden="true"></i>
                            </div>
                            <div class="icon-text pl-4">
                                <h5 class="mb-0">Shipping</h5>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="shipping_charge">Shipping Charge</label>
                                    <input class="currancy_touchspin" type="text"  name="shipping_charge" id="shipping_charge" value="{{$aProduct->shipping_charge}}" required/>
                                    <span class="parsley-errors-list filled" id="error"></span>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="height">Height</label>
                                    <input class="form-control" type="text" name="height" id="height" value="{{$aProduct->height ?? old('height')}}">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="width decimal_number">Width</label>
                                    <input class="form-control" type="text" name="width" id="width" value="{{$aProduct->width ?? old('width')}}">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="weight">Weight</label>
                                    <input class="form-control" type="text" name="weight" id="weight" value="{{$aProduct->weight ?? old('weight')}}">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="delivery_time">Delivery Time</label>
                                    <select id="delivery_id" class="form-control" name="delivery_id"
                                            required="required" data-parsley-error-message="Choose your Delivery Time">
                                        <option value="">-- Select One --</option>
                                        @foreach($deliveries as $delivery)
                                            <option value="{{$delivery->id}}" {{$delivery->id == $aProduct->delivery_id ? 'selected' : ''}}>{{$delivery->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane" id="tabInventory">

                <div class="card mb-30">
                    <div class="card-body py-3">
                        <div class="d-flex align-items-center pb-3">
                            <div class="icon font-30 text-primary">
                                <i class="fa fa-ravelry" aria-hidden="true"></i>
                            </div>
                            <div class="icon-text pl-4">
                                <h5 class="mb-0">Inventory</h5>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <div class="new-checkbox">
                                        <div class="inline-widged">
                                            <label for="is_inventory" class="single-label">Manage Inventory</label>
                                            <label class="switch">
                                                <input type="checkbox" id="is_inventory" name="is_inventory" {{ $aProduct->is_inventory ? 'checked="checked"' : '' }}/>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="availability_id">Available for</label>
                                    <select id="availability_id" class="form-control dummy_inventory_control" name="availability_id" required="required" data-parsley-error-message="Choose your store id">
                                        <option value="">-- Select One --</option>
                                        @foreach($avalabilitites as $cat)
                                        <option value="{{$cat->id}}" {{ $aProduct->availability_id == $cat->id ? 'selected="selected"' : '' }}>{{$cat->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="inventory_qty">QTY</label>
                                    <input class="number_touchspin dummy_inventory_control" type="text" name="inventory_qty" id="inventory_qty" required="required" data-parsley-errors-container=".qtyError" value="{{$aProduct->inventory_qty}}" />
                                    <span class="qtyError"></span>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="minimum_inventory_qty">Minimum Inventory QTY</label>
                                    <input class="number_touchspin dummy_inventory_control" type="text" name="minimum_inventory_qty" id="minimum_inventory_qty" value="1" required="required" value="{{$aProduct->minimum_cart_qty}}" />
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="Warehouse_id">Warehouse</label>
                                    <select id="Warehouse_id" class="form-control dummy_inventory_control" name="Warehouse_id" required="required" data-parsley-error-message="Choose your store id">
                                        <option value="">-- Select One --</option>
                                        @foreach($warehouses as $cat)
                                        <option value="{{$cat->id}}" {{ $aProduct->warehouse_id == $cat->id ? 'selected="selected"' : '' }}>{{$cat->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="minimum_cart_qty">Minimum Cart QTY</label>
                                    <input class="number_touchspin dummy_inventory_control" type="text" name="minimum_cart_qty" id="minimum_cart_qty" value="1" required="required" value="{{$aProduct->minimum_cart_qty}}" />
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <div class="new-checkbox">
                                        <div class="inline-widged">
                                            <label for="show_availability" class="single-label">Show Availability</label>
                                            <label class="switch">
                                                <input type="checkbox" class="availability_checkbox" id="show_availability" name="show_availability" {{ $aProduct->show_availability ? 'checked="checked"' : '' }} />
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane" id="tabSEO">

                <div class="card mb-30">
                    <div class="card-body py-3">
                        <div class="d-flex align-items-center pb-3">
                            <div class="icon font-30 text-primary">
                                <i class="fa fa-ravelry" aria-hidden="true"></i>
                            </div>
                            <div class="icon-text pl-4">
                                <h5 class="mb-0">SEO</h5>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <div class="new-checkbox">
                                        <div class="inline-widged">
                                            <label for="allow_seo" class="single-label">Allow SEO</label>
                                            <label class="switch">
                                                <input type="checkbox" id="allow_seo" name="allow_seo" {{ $aProduct->allow_seo ? 'checked="checked"' : '' }}/>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="meta_keywords">Meta Keywords(<span class="text-info">Seperate each ekywords between , comma</span>)</label>
                                    <input class="dummy_seo_control form-control" type="text" name="meta_keywords" id="meta_keywords" required="required" value="{{$aProduct->meta_keywords}}" />
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="meta_description">Meta Description(<span class="text-info">Less then 60 characters</span>)</label>
                                    <input class="dummy_seo_control form-control" type="text" name="meta_description" id="meta_description" required="required" value="{{$aProduct->meta_description}}" />
                                </div>
                            </div>

                        </div>
                    </div>



                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-12">
                                <a href="{{route('products.index')}}" class="btn btn-danger">Back to Products</a>
                                @can('access-settings',$aProduct)
                                    <button type="submit" id="submitProduct" class="btn btn-primary mr-2 float-right">Save Product</button>
                                @endcan
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </form>
    </div>
    <div class="col-md-3">
        <div class="position-fixed form-tab">
            <div class="card mb-30" align="center">
                <div class="card-body py-3">
                    <div class="d-flex align-items-center pb-4">
                        <div class="icon font-30 text-primary">
                            <i class="fa fa-ravelry" aria-hidden="true"></i>
                        </div>
                        <div class="icon-text pl-4">
                            <h5 class="mb-0">Fill up all field</h5>
                        </div>
                    </div>

                    <div class="list-group pb-4">
                        <a href="#tabProductOverview" data-toggle="tab" aria-expanded="false" class="list-group-item list-group-item-action nav-link active">
                            Product Details
                        </a>
                        <a href="#tabMapping" data-toggle="tab" aria-expanded="true" class="list-group-item list-group-item-action nav-link">
                            Mapping
                        </a>
                        <a href="#tabShipping" data-toggle="tab" aria-expanded="true" class="list-group-item list-group-item-action nav-link">
                            Shipping
                        </a>
                        <a href="#tabInventory" data-toggle="tab" aria-expanded="false" class="list-group-item list-group-item-action nav-link">
                            Inventory
                        </a>
                        <a href="#tabSEO" data-toggle="tab" aria-expanded="false" class="list-group-item list-group-item-action nav-link">
                            SEO
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@include('admin.partials.partial_assets.kendo_init')
@include('admin.partials.partial_assets.dropzone')
@include('admin.partials.partial_assets.touchspin')

<script type="text/javascript">
    var mltCategories;
    var mltTags;
    var mltColor;
    var mltSize;

    $(document).ready(function () {

        //$('.input-images-1').imageUploader();

        mltCategories = $("#mltCategories").kendoMultiSelect().data("kendoMultiSelect");
        mltTags = $("#mltTags").kendoMultiSelect().data("kendoMultiSelect");
        mltColor = $("#mltColor").kendoMultiSelect().data("kendoMultiSelect");
        mltSize = $("#mltSize").kendoMultiSelect().data("kendoMultiSelect");

        mltCategories.bind("change", function () {
            if (mltCategories.selectedIndex === -1 && mltCategories.value()) {
                $("#categories").val("");
            } else {
                var cID = mltCategories.value();
                $("#categories").val(cID);
            }
        });

        mltTags.bind("change", function () {
            if (mltTags.selectedIndex === -1 && mltTags.value()) {
                $("#hdnTagsId").val("");
            } else {
                var cID = mltTags.value();
                $("#hdnTagsId").val(cID);
            }
        });

        mltColor.bind("change", function () {
            if (mltColor.selectedIndex === -1 && mltColor.value()) {
                $("#colorId").val("");
            } else {
                var cID = mltColor.value();
                $("#colorId").val(cID);
            }
        });

        mltSize.bind("change", function () {
            if (mltSize.selectedIndex === -1 && mltSize.value()) {
                $("#sizeId").val("");
            } else {
                var cID = mltSize.value();
                $("#sizeId").val(cID);
            }
        });



        $("#imgInp").change(function () {
            readURL(this);
        });

        $("#is_inventory").change(function () {
            if (this.checked) {
                $(".dummy_inventory_control").prop("disabled", false);
                $(".dummy_inventory_control").attr("required","required")
            } else {
                $(".dummy_inventory_control").val("");
                $(".dummy_inventory_control").prop("disabled", true);
                $(".dummy_inventory_control").removeAttr("required");
            }
        });

        $("#allow_seo").change(function () {
            if (this.checked) {
                $(".dummy_seo_control").prop("disabled", false);
                $(".dummy_seo_control").attr("required","required")
            } else {
                $(".dummy_seo_control").val("");
                $(".dummy_seo_control").prop("disabled", true);
                $(".dummy_seo_control").removeAttr("required")
            }
        });

        setTimeout(function(){
            if ($("#allow_seo").is(':checked')) {
                $(".dummy_seo_control").prop("disabled", false);
                $(".dummy_seo_control").attr("required","required")
            }else{
                $(".dummy_seo_control").prop("disabled", true);
                $(".dummy_seo_control").prop("disabled", true);
                $(".dummy_seo_control").removeAttr("required")
            }

            if ($("#is_inventory").is(':checked')) {
                $(".dummy_inventory_control").prop("disabled", false);
                $(".dummy_inventory_control").attr("required","required")
            }else{
                $(".dummy_inventory_control").val("");
                $(".dummy_inventory_control").prop("disabled", true);
                $(".dummy_inventory_control").removeAttr("required")
            }

        }, 300);



        var catList = $.trim("{{$existingCatMap}}");
        var catArray = catList.split(',');
        var resCat = $.merge([], catArray);
        mltCategories.value(resCat);

        var tagList = $.trim("{{$existingTagMap}}");
        var tagArray = tagList.split(',');
        var resTag = $.merge([], tagArray);
        mltTags.value(resTag);

        var colorList = $.trim("{{$existingColorMap}}");
        var colorArray = colorList.split(',');
        var resColor = $.merge([], colorArray);
        mltColor.value(resColor);

        var SizeList = $.trim("{{$existingSizeMap}}");
        var SizeArray = SizeList.split(',');
        var resSize = $.merge([], SizeArray);
        mltSize.value(resSize);

        var imageList = "{{$galleryArray}}";
        var imageArray = imageList.split("?");
        let preUpload = [];
        for (var i = 0; i < imageArray.length; i++) {
            var thisImage = imageArray[i].split(",");
            var glUrl = absoulatePath +"/public/"+thisImage[1];
            if(thisImage[0] > 0){
               preUpload.push({
                id: thisImage[0],
                src: glUrl
              });
            }

        }


        $('.input-images-1').imageUploader({
            preloaded: preUpload,
            imagesInputName: 'images',
            preloadedInputName: 'images',
            maxSize: 2 * 1024 * 1024,
            maxFiles: 10
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

<script>
    $('#submitProduct').click(function(){

        if ($('#new_price').val().length <2) {
            $('#error').html('New Price is required');
            return false
        }
    })

</script>
@endsection
