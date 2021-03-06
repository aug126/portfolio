@extends('adminlte::page')
@section('css')
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
                <div class="form-group {{$errors->has('icon') ? 'has-error' : ''}}">
                    <label>Icon</label>
                <input type="text" class="form-control" name="icon">
                @if ($errors->has('icon'))
                    <span class="help-block">{{ $errors->first('icon') }}</span>
                @endif
                </div>
                <div class="form-group {{$errors->has('title') ? 'has-error' : ''}}">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title">
                    @if ($errors->has('title'))
                        <span class="help-block">{{ $errors->first('title') }}</span>
                    @endif
                </div>
                <div class="form-group {{$errors->has('text') ? 'has-error' : ''}}">
                    <label>Text</label>
                    <textarea class="form-control" name="text"></textarea>
                    @if ($errors->has('text'))
                        <span class="help-block">{{ $errors->first('text') }}</span>
                    @endif
                </div>
                
                <button class="btn btn-primary" type="submit">Créer</button>
                <a class="btn btn-danger" href="{{route('about.index')}}">Annuler</a>
            </form>
        </div>
    </div>    
@stop