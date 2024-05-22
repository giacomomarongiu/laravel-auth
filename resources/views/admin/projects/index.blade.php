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
                        <th scope="col">Operations</th>
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
                            <td class="text-center">
                                    <a class="" href="{{ route('admin.projects.show', $project) }}">
                                        <i class="fas fa-eye fa-sm fa-fw"></i>
                                    </a>
                                    <a href="}">
                                        <i class="fas fa-pencil-alt fa-sm fa-fw"></i>
                                    </a>

                                    <!-- Modal  button -->
                                    <button type="button" class="btn btn-danger p-1" data-bs-toggle="modal"
                                        data-bs-target="#modalId-{{ $project->id }}">
                                        <i class="fa-solid fa-toilet fa-2xs"></i>
                                    </button>


                                    <!--Modal Body-->
                                    <div class="modal fade" id="modalId-{{ $project->id }}" tabindex="-1"
                                        data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                        aria-labelledby="modalTitleId-{{ $project->id }}" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                            role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalTitleId-{{ $project->id }}">
                                                        ATTENTION! Cancellation is irreversible!
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body d-flex">
                                                    <img width="60" src="{{ $project->img }}" alt="">
                                                    <div>Are you sure you want to delete <span
                                                            class="fw-bold">{{ $project->title }}</span>? </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">
                                                        Close
                                                    </button>
                                                    <form action="{{-- {{ route('comics.destroy', $comic) }} --}}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">
                                                            Confirm
                                                        </button>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
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
