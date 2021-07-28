@extends('layouts.main')

@section('content')

<div class="container">

 <main class="mx-auto m-4">
<div class="row justify-content-center">
    <div class="col-md-10">
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
                    <h4>Subject List</h4>
                    </div>
                    <div class="col">
                        <form action="{{route('subjects.index')}}" method="GET">
                            <div class="form-row align-items-center">
                                <div class="col">
                                    <input type="search" name="search" id="inlineFormInput" class="form-controll mb-2">
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-success mb-2"><i class="fas fa-search"></i></button>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                    
                    <div class="col">
                                <a href="{{route('subjects.create')}}" class="btn btn-success float-right">Create</a>
                      </div>
                </div>
                
                
                    
            </div>
            <div class="card-body">
                <table class="table table-bordered border-primary">
                    <thead>
                        <tr>
                            <th># Id</th>
                            <th>subject Code</th>
                            <th>Subject name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($subjects as $subject)
                        <tr>
                            <th scope="row" >{{$subject->id}}</th>
                            <th>{{$subject->code}}</th>
                            <th>{{$subject->name}}</th>
                            
                            <th>
                                <div class="btn-group">
                                    
                                <a href="{{route('subjects.edit',$subject->id)}}" class="btn btn-info"><i class="fas fa-edit"></i>Edit</a>
                                <form action="{{route('subjects.destroy',$subject->id)}}" method="POST">
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
                {{$subjects->links()}}
               
            </div>
        </div>
    </div>
    <!-- department add form -->
    

    <!-- end of add form -->
    
</div>
 </main>
</div>



@endsection