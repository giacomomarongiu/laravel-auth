@extends('layouts.admin')

@section('content')
    <div class="container">

        <form class="form-control bg-light p-4" action="{{ route('admin.projects.store') }}" method="post">
            @csrf

            <!-- Input for title-->
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                    aria-describedby="titleHelper" placeholder="title" value="{{ old('title') }}" />
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>


            <!-- Input for image-->
            <div class="mb-3">
                <label for="img" class="form-label">Image</label>
                <input type="text" class="form-control @error('img') is-invalid @enderror" name="img" id="img"
                    aria-describedby="imgHelper" placeholder="img" value="{{ old('img') }}" />
                @error('img')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Input for start_date-->
            <div class="mb-3">
                <label for="start_date" class="form-label">Project start date
                </label>
                <input type="text" class="form-control @error('start_date') is-invalid @enderror" name="start_date"
                    id="start_date" aria-describedby="start_dateHelper" placeholder="start_date"
                    value="{{ old('start_date') }}" />
                @error('start_date')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Input for end_date-->
            <div class="mb-3">
                <label for="end_date" class="form-label">Project end date
                </label>
                <input type="text" class="form-control @error('end_date') is-invalid @enderror" name="end_date"
                    id="end_date" aria-describedby="end_dateHelper" placeholder="end_date" value="{{ old('end_date') }}" />
                @error('end_date')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Input for description-->
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control @error('description') is-invalid @enderror" name="description"
                    id="description" aria-describedby="descriptionHelper" placeholder="description"
                    value="{{ old('description') }}" />
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Input for project_link-->
            <div class="mb-3">
                <label for="project_link" class="form-label">Project URL</label>
                <input type="text" class="form-control @error('project_link') is-invalid @enderror" name="project_link"
                    id="project_link" aria-describedby="project_linkHelper" placeholder="project_link"
                    value="{{ old('project_link') }}" />
                @error('project_link')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Input for github_link-->
            <div class="mb-3">
                <label for="github_link" class="form-label">GitHub URL</label>
                <input type="text" class="form-control @error('github_link') is-invalid @enderror" name="github_link"
                    id="github_link" aria-describedby="github_linkHelper" placeholder="github_link"
                    value="{{ old('github_link') }}" />
                @error('github_link')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button class="btn btn-primary" type="submit">Add project</button>


        </form>
    </div>
@endsection
