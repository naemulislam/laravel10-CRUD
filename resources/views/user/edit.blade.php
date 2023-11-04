@extends('layout.master')
@section('content')
    <section class="my-4">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4 class="text-center">Student Edit</h4>
                            <a href="{{ route('index')}}" class="btn btn-success">Back</a>
                        </div>
                        <div class="card-body">
                            <div class="form-section">
                                <div class="row">
                                    <div class="col-md-7 mx-auto">
                                        <form action="{{ route('update', $student->id)}}" method="POST">
                                            @csrf
                                            @method('put')
                                            <div class="form-gorup">
                                                <label>Name</label>
                                                <input type="text" class="form-control" name="name" placeholder="Enter your name" value="{{ $student->name}}">
                                                @error('name')
                                                <span class="text-danger">{{ $message}}</span>
                                                @enderror
                                            </div>
                                            <div class="form-gorup">
                                                <label>Email</label>
                                                <input type="email" class="form-control" name="email" placeholder="Enter your email" value="{{ $student->email}}">
                                                @error('email')
                                                <span class="text-danger">{{ $message}}</span>
                                                @enderror
                                            </div>
                                            <div class="form-gorup">
                                                <label>Phone</label>
                                                <input type="number" class="form-control" name="phone" placeholder="Enter your phone" value="{{ $student->phone}}">
                                                @error('phone')
                                                <span class="text-danger">{{ $message}}</span>
                                                @enderror
                                            </div>
                                            <div class="form-gorup mb-3">
                                                <label>Address</label>
                                                <textarea class="form-control" name="address" placeholder="Enter your address">{{$student->address}}</textarea>
                                                @error('address')
                                                <span class="text-danger">{{ $message}}</span>
                                                @enderror
                                            </div>
                                            <button type="submit" class="btn btn-success">Update</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
