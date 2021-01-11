<div class=" {{$col3 ?? ''}}">
    <label class="float-left" for="city">Country {{$col3 ?? '' ? '*':''}}</label>
</div>
<div class=" {{$col9 ?? ''}}">
    <select name="country" id="country" class="form-control" required="required" data-parsley-error-message="Enter Country Name">
        <option value="">Select a Country</option>
        @foreach($countries as $country)
            <option value="{{$country->name}}" {{$presentCountry->country == $country->name ? 'selected' : ''}}>{{$country->name}}</option>
        @endforeach
    </select>
</div>