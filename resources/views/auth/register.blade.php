@extends('layout.default')

@section('title')
    Registration Page
@endsection

@section('content')
    <main class="mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{session()->get('success')}}
                        </div>
                    @endif
                    @if (session()->has('error'))
                        <div class="alert alert-danger">
                            {{session()->get('error')}}
                        </div>
                    @endif
                    <div class="card">
                        <h3 class="card-header text-center">Registration</h3>
                        <div class="card-body">
                            <form action="{{route('register.post')}}" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Name" id="name" name="name" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="email" placeholder="Email" id="email" name="email" class="form-control" required>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" placeholder="Password" id="password" name="password" class="form-control" required>
                                </div>
                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-success btn-block">Sign Up</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection