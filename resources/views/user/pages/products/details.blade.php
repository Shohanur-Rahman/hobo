@extends('user.layouts.layout-third')
@section('title', $product->title)
@section('content')

    @include('user.pages.second.products.details', $product)

@endsection
