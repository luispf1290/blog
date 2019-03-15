
@extends('layouts/base')

@section('content')


<div class="container">
<form action="{{ route('summernoteUpdate') }}" method="POST">
    @csrf
        <textarea  name="summernoteInput" class="summernote">

            {!! $data->content !!}

        </textarea>

        <button type="submit">Actualizar</button>
    </form>
</div>

@endsection



@section('blog-js')

//initialize summernote
$('.summernote').summernote({focus:true,});

@endsection
