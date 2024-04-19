@extends('layouts.admin')

@section('title')
    {{$project->name}}
@endsection

@section('content')
    <main>

        <div class="container py-5">

            <div class="d-flex align-items-center gap-2 p-3 text-white">
            
                <img src="{{$project->image}}" alt="{{$project->name}}" style="max-height: 300px;">

                <div>
                    <div class="p-1"><strong>Nome: </strong>{{$project->name}}</div>
                    <div class="p-1"><strong>Descrizione: </strong>{{$project->description}}</div>
                </div>


            </div>
        </div>

        <div class="container py-5">
            <div class="d-flex justify-content-center align-items-center">
                <button class="btn btn-danger mt-5" >
                    <a class="text-decoration-none text-white text-uppercase" href="{{route('admin.projects.edit', $project->id)}}">{{__('Modifica progetto')}}</a>
                </button>
            </div>


        </div>

    </main>
@endsection