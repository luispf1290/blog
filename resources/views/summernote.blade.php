
@extends('layouts/base')

@section('content')
<form action="{{ route('summernotePersist' ) }}" method="post">
    {{ csrf_field() }}
    <textarea name="summernoteInput" class="summernote"></textarea>
    <br>
    <button type="submit">Enviar</button>
</form>

@endsection

@section('blog-js')

    $(document).ready(function() {
        $('.summernote').summernote();
    });

@endsection



