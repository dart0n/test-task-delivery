@extends('layout')

@section('content')
    <div class="d-flex justify-content-center">
        <a href="/delivery" class="p-5"><h2 class="">Отправить посылку</h2></a>
    </div>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
@endsection
