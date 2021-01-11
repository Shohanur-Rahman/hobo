@extends('admin.layouts.admin')
@section('title', "E-com Setting")
@section('content')

    <div class="row">
        <div class="col-md-12">
            <x-inform-users></x-inform-users>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">E-com Settings</h4>
                    <p class="text-muted font-14 mb-4">
                        The Buttons extension for DataTables provides a common set of options, API methods and styling
                        to display buttons on a page
                        that will interact with a DataTable. The core library provides the based framework upon which
                        plug-ins can built.
                    </p>


                    <table id="datatable-buttons"
                           class="table table-striped dt-responsive js-exportable nowrap w-100">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Currency Name</th>
                            <th>Shipping Cost</th>
                            <th>Outer City Shipping Cost</th>
                            <th>Admin Email</th>
                            <th>Updated At</th>

                        </tr>
                        </thead>

                        <tbody>


                        <tr>
                            @if(!is_null($ecomSetting))
                                <form class="d-inline" action="{{route('ecom-settings.update',$ecomSetting->id)}}" method="post"  data-parsley-validate>
                                    @method('PATCH')
                                    @csrf
                                    <td>{{$ecomSetting->id}}</td>
                                    <td>
                                        <select name="currency_id" id="" class="form-control" required="required">
                                            <option value="">Select Currency</option>
                                            @foreach($currencies as $currency)
                                                <option
                                                    value="{{$currency->id}}" {{$currency->id==$ecomSetting->currency_id ? 'selected' : ''}}>
                                                    {{$currency->currency_name}}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('currency_id') <span class="text-danger">{{$message}}</span> @enderror
                                    </td>
                                    <td>
                                        <input class="form-control" type="number" name="shipping_cost"
                                               required="required"
                                               value="{{$ecomSetting->shipping_cost  ?? old('shipping_cost') }}">
                                        @error('shipping_cost') <span class="text-danger">{{$message}}</span> @enderror
                                    </td>
                                    </td>
                                    <td>
                                        <input class="form-control" type="number" name="outer_city_shipping_cost"
                                               required="required"
                                               value="{{$ecomSetting->outer_city_shipping_cost  ?? old('outer_city_shipping_cost') }}">
                                        @error('outer_city_shipping_cost') <span
                                            class="text-danger">{{$message}}</span> @enderror
                                    </td>
                                    <td>
                                        <input class="form-control" type="text" name="admin_email" required="required"
                                               value="{{$ecomSetting->admin_email  ?? old('admin_email') }}">
                                        @error('admin_email') <span class="text-danger">{{$message}}</span> @enderror

                                    </td>
                                    <td>{{$ecomSetting->updated_at->format('d F Y') ?? $ecomSetting->created_at->format('d F Y')}}</td>
                                    <td>
                                        <button class="btn btn-outline-success table-btn btn-sm" title="Update"><i
                                                class="fa fa-check"></i></button>
                                    </td>
                                </form>
                        </tr>

                        </tbody>
                    </table>

                    @endif
                </div>
            </div>
        </div>
    </div>

    @include('admin.partials.partial_assets.datatable')

@endsection
