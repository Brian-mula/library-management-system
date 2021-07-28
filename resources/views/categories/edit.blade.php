@extends('layouts.main')
@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <h4>Update {{$category->name}} category</h4>
                </div>
                <div class="card-body">
                      <form method="POST" action="{{ route('categories.update',$category->id) }}">
                        @csrf
                        @method('PUT')
                        
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __(' Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name',$category->name) }}" required autocomplete="name" autofocus>

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
                                    {{ __('Update Category') }}
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