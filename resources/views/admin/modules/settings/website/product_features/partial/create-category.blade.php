<div class="form-group">
    <label for="category_id">Select New Product Feature Category</label>
    <select name="category_id" id="category_id" class="form-control" required="required" data-parsley-error-message="Enter Category Name is Required">
        <option value="">Selected Category</option>
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
