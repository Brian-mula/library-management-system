@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <div>
                @if (session()->has('message'))
                <div class="alert alert-success">
                    {{session('message')}}
                </div>
                @endif
            </div>
                <div class="card-header bg-dark text-white">
                    <div class="row">
                        <div class="col">
                            <h4>Books List</h4>
                        </div>
                        <div class="col">
                            <a href="{{route('books.create')}}" class="btn btn-success float-right">Create</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                <table class="table table-bordered border-primary">
                    <thead>
                        <tr>
                            <th># Id</th>
                            <th>Title</th>
                            <th>Publisher</th>
                            <th>Number</th>
                            <th>Category</th>
                            <th>Subject</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($books as $book)
                        <tr>
                            <th scope="row" >{{$book->id}}</th>
                            <th>{{$book->tite}}</th>
                            <th>{{$book->publisher}}</th>
                            <th>{{$book->book_number}}</th>
                            <th>{{$book->category->name}}</th>
                            <th>{{$book->subject->name}}</th>
                            <th>
                                <div class="btn-group">
                                    
                                <a href="{{route('books.edit',$book->id)}}" class="btn btn-info"><i class="fas fa-edit"></i>Edit</a>
                                <form action="{{route('books.destroy',$book->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                   
                                    <button class="btn btn-danger"><i class="fas fa-trash">Del</i></button>
                                </form>   
                            </div>
                              
                            </th>
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