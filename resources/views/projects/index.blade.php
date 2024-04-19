@extends('layouts.admin')

@section('title')
    Progetti caricati
@endsection

@section('content')
<div class="container py-5">

    <button class="btn btn-danger mt-5 mb-5" >
        <a class="text-decoration-none text-white text-capitalize" href="{{route('admin.projects.create')}}">{{__('CREA NUOVO PROGETTO')}}</a>
    </button>

    <h1>Progetti caricati</h1>

    <div class="row">

        @foreach ($projects as $project)
        <div class="col-lg-2 col-md-6 mb-4">

            <div class="project">
                <img class="img-fluid" src="{{$project->image}}" alt="{{$project->name}}">
                <div>
                    <Strong class="text-danger">Nome:</Strong>
                    {{$project->name}}
                </div>
                <button class="btn btn-danger mt-5" >
                    <a class="text-decoration-none text-white text-capitalize" href="{{route('admin.projects.show', $project->id)}}">{{__('Vedi progetto caricato')}}</a>
                </button>
            </div>
            
        </div>
        @endforeach
    </div>
    

</div>

@endsection