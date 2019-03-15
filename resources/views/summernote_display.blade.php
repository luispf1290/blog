
@extends('layouts/base')

@section('content')


<div class="container">

        {!! $data->content !!}

        <a href="{{ route('summernoteEdit')}}" class=" btn btn-primary">Editar</a>

</div>

