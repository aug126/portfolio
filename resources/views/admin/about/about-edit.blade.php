@extends('adminlte::page')
@section('css')
    <link rel="stylesheet" href="/css/app-office.css">
@stop

@section('content_header')
    <h1>Modification de <b>{{$about->title}}</b></h1>
@stop

@section('content')
    <div class="box box-success">
        <div class="box-header with-border">
        <h3 class="box-title">Champs modifiables</h3>
        </div>
        <div class="box-body">
        <form action="{{route('about.update', $about->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Icon</label>
            <input type="text" class="form-control" name="icon" value="{{$about->icon}}">
            </div>
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title" value="{{$about->title}}">
            </div>
            <div class="form-group">
                <label>Text</label>
                <textarea class="form-control" name="text">{{$about->text}}</textarea>
            </div>
            <button class="btn btn-primary" type="submit">Modifier</button>
            </form>
        </div>
    </div>    
@stop
