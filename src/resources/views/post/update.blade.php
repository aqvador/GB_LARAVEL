@extends('layouts.basic', ['title' => 'Обновить новость'])

@section('sidebar')
    @parent

@stop

@section('content')
    @include('post.form')
@stop
