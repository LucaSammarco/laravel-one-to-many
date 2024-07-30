@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $project->name }}</div>

                <div class="card-body">
                    <p>{{ $project->description }}</p>
                    <p>{{ $project->url }}</p>
                    <p>{{ $project->programming_language }}</p>
                    <p>{{ $project->updated_at }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
