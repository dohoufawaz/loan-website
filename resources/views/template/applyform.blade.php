@extends('layouts.main')
@section('content') 
<div class="container"> 
    @if (session('message'))
<div class="alert alert-success" role="alert">
    {{ session('message') }}
</div>
@endif
</div>
@endsection

