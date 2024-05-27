@extends('master')

@section('title')
    Add Book
@endsection

@section('content')
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card card-header text-center">Add Book Info</div>
                <div class="card-body">
                    <h4 class="text-success">{{Session::get('message')}}</h4>
                    <form action="{{route('book.add')}}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-md-3">Book Title</label>
                            <div class="col-md-9">
                                <input type="text" name="title" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Book Description</label>
                            <div class="col-md-9">
                                <textarea name="description" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" value="Add Book" class="btn btn-outline-success mx-5">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection