@extends('layouts.admin')

@section('content')
    <div class="container">
        <header>
            <h1 class="text-primary">Projects</h1>
        </header>

        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Img URL</th>
                        <th scope="col">Start Date</th>
                        <th scope="col">End Date</th>
                        <th scope="col">Description</th>
                        <th scope="col">Link Project</th>
                        <th scope="col">GitHub</th>
                    </tr>
                </thead>

                {{--             @dd($projects)
 --}}
                <tbody>

                    @forelse ($projects as $project)
                        <tr class="">
                            <td scope="row">{{ $project->id }}</td>
                            <td>{{ $project->slug }}</td>
                            <td><img width="150" src="{{ $project->img }}" alt=""></td>
                            <td>{{ $project->start_date }}</td>
                            <td>{{ $project->end_date }}</td>
                            <td>{{ $project->description }}</td>
                            <td>{{ $project->project_link }}</td>
                            <td>{{ $project->github_link }}</td>
                        </tr>

                    @empty
                        <tr class="">
                            <td scope="row" colspan="5">No Project Found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>
@endsection
