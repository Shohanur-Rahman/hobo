@extends('user.layouts.layout-third')
@section('title', $categoryDetails->category_name)
@section('content')

    @include('user.pages.second.products.index')

@endsection
