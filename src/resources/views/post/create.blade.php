@extends('layouts.basic', ['title' => 'создать новость'])

@section('sidebar')
    @parent
@stop

@section('content')
    @include('post.form')
@stop
