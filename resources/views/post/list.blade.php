
@extends('layouts.basic')

@section('sidebar')
  @parent

@stop

@section('content')
  <p><pre><?=print_r($posts,1)?></pre></p>
@stop
