@extends('layout.master')
@section('content')
    <section class="my-4">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card">
                        @if (Session::has('success'))
                        <div class="alert alert-primary" role="alert">
                            {{ Session::get('success')}}
                        </div>
                        @endif
                        <div class="card-header d-flex justify-content-between">
                            <h4 class="text-center">Student List</h4>
                            <a href="{{ route('create') }}" class="btn btn-success">Add</a>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">SL</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Addrss</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $student)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration}}</th>
                                            <td>{{ $student->name}}</td>
                                            <td>{{ $student->email}}</td>
                                            <td>{{ $student->phone}}</td>
                                            <td>{{ $student->address}}</td>
                                            <td class="d-flex">
                                                <a href="{{ route('edit', $student->id)}}" class="btn btn-primary mr-1">Edit</a>
                                                <a href="{{ route('destroy', $student->id)}}" class="btn btn-danger">Delte</a>
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
    </section>
@endsection
