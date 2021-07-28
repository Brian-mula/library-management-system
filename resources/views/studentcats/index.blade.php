@extends('layouts.main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
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
                            <h4>Category List</h4>
                        </div>
                        <div class="col">
                            <a href="" class="btn btn-success float-right">Create</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                <table class="table table-bordered border-primary">
                    <thead>
                        <tr>
                            <th># Id</th>
                            <th>Category name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($studentcats as $studentcat)
                        <tr>
                            <th scope="row" >{{$studentcat->id}}</th>
                             <th>{{$studentcat->name}}</th>
                            
                            <th>
                                <div class="btn-group">
                                    
                                <a href="{{route('studentcats.edit',$studentcat->id)}}" class="btn btn-info"><i class="fas fa-edit"></i>Edit</a>
                                <form action="{{route('studentcats.destroy',$studentcat->id)}}" method="POST">
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
        <!-- create page -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <h4>Create Student Category</h4>
                </div>
                <div class="card-body">
                      <form method="POST" action="{{ route('studentcats.store') }}">
                        @csrf

                        
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __(' Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create Category') }}
                                </button>
                            </div>
                        </div>
                    </form>
            </div>
            </div>
        </div>
        <!-- end of create page -->
    </div>
</div>



@endsection