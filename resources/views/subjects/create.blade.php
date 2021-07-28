@extends('layouts.main')


@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header bg-dark text-white">
            <div class="row">
                <div class="col">
                <h4>Create Subject</h4>
                </div>
                <div class="col">
                    <a href="{{route('subjects.index')}}" class="btn btn-success float-right">Back</a>
                </div>
            </div>
            </div>
            <div class="card-body">
            <form method="POST" action="{{ route('subjects.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="subject_code" class="col-md-4 col-form-label text-md-right">{{ __(' Code') }}</label>

                            <div class="col-md-6">
                                <input id="code" type="text" class="form-control @error('code') is-invalid @enderror" name="code" value="{{ old('code') }}" required autocomplete="code" autofocus>

                                @error('code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
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
                                    {{ __('Add Subject') }}
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