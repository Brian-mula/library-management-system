@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Student') }}
                <a href="{{route('students.index')}}" class="btn btn-success float-right">Back</a>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('students.store') }}">
                        @csrf


                        <div class="form-group row">
                            <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('First name:') }}</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('last name:') }}</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="admission_number" class="col-md-4 col-form-label text-md-right">{{ __('Admission no:') }}</label>

                            <div class="col-md-6">
                                <input id="admission_number" type="text" class="form-control @error('admission_number') is-invalid @enderror" name="admission_number" value="{{ old('admission_number') }}" required autocomplete="admission_number" autofocus>

                                @error('admission_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="student_category_id" class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>

                            <div class="col-md-6">

                            <select name="student_category_id" class="form-control" aria-label="Default select example">
                                        <option selected>Select Category</option>
                                        @foreach($studentcats as $studentcat)
                                        <option value="{{$studentcat->id}}">{{$studentcat->name}}</option>
                                        @endforeach
                                        </select>

                                 @error('student_category_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="parents_contacts" class="col-md-4 col-form-label text-md-right">{{ __("Parent's Tel:") }}</label>

                            <div class="col-md-6">
                                <input id="parents_contacts" type="tel" class="form-control @error('parents_contacts') is-invalid @enderror" 
                                name="parents_contacts" value="{{ old('parents_contacts') }}" required autocomplete="parents_contacts" autofocus >

                                @error('parents_contacts')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                       
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add Student') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection