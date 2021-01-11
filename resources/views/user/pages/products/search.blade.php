@extends('user.layouts.layout-third')
@section('title', 'Search results for '.request()->query('s'))
@section('content')

    @include('user.pages.second.products.search');

@endsection
