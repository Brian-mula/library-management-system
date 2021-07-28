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
                            <h4>Student List</h4>
                        </div>
                        <div class="col">
                            <a href="{{route('students.create')}}" class="btn btn-success float-right">Create</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                <table class="table table-bordered border-primary">
                    <thead>
                        <tr>
                            <th># Id</th>
                            <th>First name</th>
                            <th>Last name</th>
                            <th>Admission</th>
                            <th>Category</th>
                            <th>Contacts</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $student)
                        <tr>
                            <th scope="row" >{{$student->id}}</th>
                            <th>{{$student->first_name}}</th>
                            <th>{{$student->last_name}}</th>
                            <th>{{$student->admission_number}}</th>
                            <th>{{$student->studentcat->name}}</th>
                            <th>{{$student->parents_contacts}}</th>
                            <th>
                                <div class="btn-group">
                                    
                                <a href="{{route('students.edit',$student->id)}}" class="btn btn-info"><i class="fas fa-edit"></i>Edit</a>
                                <form action="{{route('students.destroy',$student->id)}}" method="POST">
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