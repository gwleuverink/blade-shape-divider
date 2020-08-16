@extends('shape-divider::_layout')

@section('svg-content')

    @if($invert)
    <path d="M600,16.8c0-8.11-8.88-13.2-19.92-13.2H0V120H1200V3.6H619.92C608.88,3.6,600,8.66,600,16.8Z"></path>
    @else
    <rect x="1200" height="3.6"></rect>
    <rect height="3.6"></rect>
    <path d="M0,0V3.6H580.08c11,0,19.92,5.09,19.92,13.2,0-8.14,8.88-13.2,19.92-13.2H1200V0Z"></path>
    @endif

@endsection
