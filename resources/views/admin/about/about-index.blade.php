@extends('adminlte::page')
@section('css')
    <link rel="stylesheet" href="/css/app-office.css">
@stop

@section('content_header')
    <h1>Contenu de <b>A Propos</b></h1>


    <div class="row">
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
                            <td class="text-center"><i class="fa {{$about->icon}}"></i></td>
                            <td>{{$about->title}}</td>
                                <td>{{$about->text}}</td>
                            <td class="text-center">{{$about->lang}}</td>
                            <td><a class="btn btn-warning" href="{{route('about.edit', $about->id)}}"><i class="fa fa-edit"></i></a></td>
                            <td><button class="btn btn-primary"><i class="fa fa-eye"></i></button></td>
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

@section('content')
    
@stop