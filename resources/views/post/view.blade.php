@extends('layouts.basic')

@section('sidebar')
    @parent

    <p>Этот элемент будет добавлен к главной боковой панели.</p>
@stop

@section('content')
    <p>
    <pre>
    @if($post)
            <?=print_r($post, 1)?>
        @else
            Пост  не найден, <br> Попробуйте обновить страницу
        @endif
  </pre></p>
@stop
