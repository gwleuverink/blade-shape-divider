@extends('shape-divider::_layout')

@section('svg-content')

    @if($invert)
    <path d="M649.97 0L599.91 54.12 550.03 0 0 0 0 120 1200 120 1200 0 649.97 0z"></path>
    @else
    <path d="M649.97 0L550.03 0 599.91 54.12 649.97 0z"></path>
    @endif

@endsection
