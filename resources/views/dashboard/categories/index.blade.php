@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Post Categories</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-6" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive small col-lg-6">
        <a href="/dashboard/categories/create" class="btn btn-primary mb-3">Create new Category</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            {{-- <a class="badge bg-info" href=""><i data-feather="eye"></i></a> --}}
                            <a class="btn btn-info" href="/dashboard/categories/{{ $category->slug }}"
                                style="padding: 4px; font-size: 6px;"><i data-feather="eye"></i></a>
                            <a class="btn btn-warning" href="/dashboard/categories/{{ $category->slug }}/edit"
                                style="padding: 4px; font-size: 6px;"><i data-feather="edit"></i></a>
                            <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('are you sure?')"><i data-feather="trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
