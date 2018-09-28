@extends('adminlte::page')
@section('css')
    <link rel="stylesheet" href="/css/app-office.css">
@stop

@section('content_header')
    <h1>Contenu de <b>A Propos</b></h1>
@stop

@section('content')
    <div class="box box-success">
        <div class="box-header with-border">
        <h3 class="box-title">Champs à remplir</h3>
        </div>
        <div class="box-body">
        <form action="{{route('about.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label>Icon</label>
            <input type="text" class="form-control" name="icon">
            </div>
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="form-group">
                <label>Text</label>
                <textarea class="form-control" name="text"></textarea>
            </div>
            <button class="btn btn-primary" type="submit">Créer</button>
            <a class="btn btn-danger" href="{{route('about.index')}}">Annuler</a>
            </form>
        </div>
    </div>    
@stop