@extends('layouts.main')

@section('content')
        @include('pages.services')
        @include('pages.banner')
        @include('pages.team')
@stop

@section('tab-title')
    - Main
@stop

@section('title')

@stop


@section('scripts')
    $('#start').click(function() {
    event.preventDefault();
    $('.headerKapi').animate({
    scrollDown: "+=200px"
    }, "slow");
    });
@stop