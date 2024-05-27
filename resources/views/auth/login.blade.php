@extends('layout.default')

@section('title')
    Login Page
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
                        <h3 class="card-header text-center">Login</h3>
                        <div class="card-body">
                            <form action="{{route('login.post')}}" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="email" placeholder="Email" id="email" name="email" class="form-control" required>
                                    @if ($errors->has('email'))
                                            <span class="text-danger">
                                                {{$errors->first('email')}}
                                            </span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" placeholder="Password" id="password" name="password" class="form-control" required>
                                    @if ($errors->has('password'))
                                            <span class="text-danger">
                                                {{$errors->first('password')}}
                                            </span>
                                    @endif
                                </div>
                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-success btn-block">Log In</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection