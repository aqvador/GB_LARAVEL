<div class="row justify-content-center">
    <div class="col-md-6">
        {!! Form::open(['id' => time(), 'url' => 'post/save']) !!}

        {!! Form::text('title', 'dfth', ['class'=> 'form-control']) !!}
        {!! Form::textarea('description', '', ['class' => 'form-control']) !!}

        {!! Form::submit('отправить', ['class' => 'btn btn-success']) !!}
        {!! Form::close() !!}
    </div>
</div>
