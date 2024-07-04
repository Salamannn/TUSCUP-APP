<!-- resources/views/sports/index.blade.php -->

@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Sports</div>

                    <div class="card-body">
                        <a href="{{ route('sports.create') }}" class="btn btn-primary mb-3">Create Sport</a>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sports as $sport)
                                    <tr>
                                        <td>{{ $sport->id }}</td>
                                        <td><a href="">{{ $sport->name }}</a></td>
                                        <td>{{ $sport->description }}</td>
                                        <td>
                                            <a href="{{ route('sports.edit', $sport->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <form action="{{ route('sports.destroy', $sport->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this sport?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
