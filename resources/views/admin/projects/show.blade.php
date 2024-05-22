@extends('layouts.admin')

@section('content')
    <div class="container">

        <header>
            <h1 class="text-primary">{{ $project->title }}</h1>
        </header>
        <div class="row">
            <div class="col w-75">
                <div class="card text-start w-75">
                    <img  class="card-img-top" src="{{ $project->img }}" alt="">
                    <div class="card-body">
                        <h4 class="card-title">{{ $project->title }}</h4>
                        <p class="card-text">{{ $project->description }}</p>
                    </div>
                </div>

            </div>
        </div>

        <td scope="row">{{ $project->id }}</td>
        <td>{{ $project->slug }}</td>
        <td></td>
        <td>{{ $project->start_date }}</td>
        <td>{{ $project->end_date }}</td>
        <td>{{ $project->description }}</td>
        <td>{{ $project->project_link }}</td>
        <td>{{ $project->github_link }}</td>

    </div>
@endsection
