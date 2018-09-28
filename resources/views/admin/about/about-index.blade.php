@extends('adminlte::page')
@section('css')
    <link rel="stylesheet" href="/css/app-office.css">
@stop

@section('content_header')
    <h1>Contenu de <b>A Propos</b></h1>
@stop

@section('content')
    <a class="btn btn-primary" href="{{route('about.create')}}">Nouveau</a>
    <select name="" class="btn" id="filtreAbout">
        <option value="">Actuels</option>
        <option value="">Corbeille</option>
        <option value="">Tous</option>
    </select>
    <div class="row mt-2">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Liste des abouts</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tbody><tr>
                            <th class="text-center">Icone</th>
                            <th>Titre</th>
                            <th>Texte</th>
                            <th class="text-center">Langue</th>
                        </tr>
                        @foreach ($abouts as $about)
                            <tr>
                            <td class="text-center"><i class="fas {{$about->icon}}"></i></td>
                            <td>{{$about->title}}</td>
                            <td>{{$about->text}}</td>
                            <td class="text-center">{{$about->lang}}</td>
                            <td>
                                <a class="btn btn-warning" href="{{route('about.edit', $about->id)}}"><i class="fa fa-edit"></i></a>
                            </td>
                            <td>
                            <form action="{{route('about.destroy', $about->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            </form>
                            </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
@stop