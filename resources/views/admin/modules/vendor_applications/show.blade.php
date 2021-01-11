@extends('admin.layouts.admin')
@section('title', "User Edit")
@section('content')

    <div class="row">
        <div class="col-md-12">
            <x-inform-users></x-inform-users>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">Vendor Application</h4>
                    <p class="text-muted font-14 mb-4">
                        The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page
                        that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p>

                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="single-conatct--area d-flex justify-content-between">
                                        <div class="single-contact-area d-flex">
                                            <div>
                                                <div class="user-img mr-3"><img src="{{asset($profile->user->userProfile->avatar)}}" alt="user" class="border-radius-50 mb-3"></div>
                                            </div>
                                            <div>
                                               <div>
                                                   <h4 class="mb-1 font-18">{{$profile->user->name}}</h4>
                                                   <p class="mb-10 text-dark font-weight-bold font-12 text-primary">{{$profile->user->user_type}}</p>

                                                   <div class="contact-address ">
                                                       <h3 class="mb-1 font-18">National Identity Card Information</h3>
                                                       <p class="mb-0 font-weight-bold font-15">NID Number : <span class="text-dark font-14">{{$profile->user->userProfile->nid}}</span></p>
                                                       <img src="{{asset($profile->user->userProfile->nid_image)}}" alt="" style="width: 180px; height: 120px">


                                                       <div class="mt-3">
                                                           <div class="">
                                                               <h3>Company Information</h3>
                                                           </div>
                                                           <div class="">
                                                               <div class="">
                                                                   <div class="">
                                                                       <div class="d-flex">
                                                                           @if($company->company_img)
                                                                           <img class="rounded-circle" style="width: 40px;height: 40px" src="{{asset($company->company_img)}}" alt="">
                                                                           
                                       @else
                                       <p class="text-danger">Company logo not found</p>
                                                                           @endif
                                                                           <h3 class="ml-2">{{$company->company_name}}</h3>
                                                                       </div>

                                                                       <p> {{$company->company_number}}<br> </p>
                                                                       <address>
                                                                           {!!html_entity_decode($company->line1 ? $company->line1 . ',' : '')!!}
                                                                           {!!html_entity_decode($company->line2 ? $company->line2 . ',' : '')!!}
                                                                           {!!html_entity_decode($company->state ? $company->state . ',' : '')!!}
                                                                           {!!html_entity_decode($company->city ? $company->city . '<br/>' : '')!!}
                                                                           {!!html_entity_decode($company->postcode ? $company->postcode . '<br/>' : '')!!}
                                                                           {!!html_entity_decode($company->describe_address ? $company->describe_address . '<br/>' : '')!!}
                                                                       </address>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                       </div>

                                                       <div class="mt-2">
                                                           <form action="{{route('vendor-applications.update',$profile->id)}}" method="post">
                                                               @method('PATCH')
                                                               @csrf

                                                               <div class="new-checkbox ">
                                                                   <div class="inline-widged ">
                                                                       <label for="approve" class="single-label pt-2">Approve Application</label>
                                                                       <label class="switch">
                                                                           <input onclick="submit()" type="checkbox" id="approve" name="approve" {{$profile->is_approve ? 'checked': ''}} />
                                                                           <span class="slider round"></span>
                                                                       </label>
                                                                   </div>
                                                               </div>
                                                           </form>
                                                       </div>
                                                   </div>
                                               </div>
                                            </div>
                                        </div>

                                        <div class="">
                                            <h5>Contact Information</h5>
                                            <address>
                                                {{$profile->user->name}}<br>
                                                {{$profile->user->email}}<br>
                                               {!!html_entity_decode($profile->user->userProfile->line1 ? $profile->user->userProfile->line1 . '<br/>' : '')!!}
{!!html_entity_decode($profile->user->userProfile->line2 ? $profile->user->userProfile->line2 . '<br/>' : '')!!}
{!!html_entity_decode($profile->user->userProfile->city ? Auth::user()->userProfile->city . '<br/>' : '')!!}
{!!html_entity_decode($profile->user->userProfile->state ? Auth::user()->userProfile->state . '<br/>' : '')!!}
{!!html_entity_decode($profile->user->userProfile->postcode ? $profile->user->userProfile->postcode . '<br/>' : '')!!}
{!!html_entity_decode($profile->user->userProfile->describe_address ? $profile->user->userProfile->describe_address . '<br/>' : '')!!}
                                            </address>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
