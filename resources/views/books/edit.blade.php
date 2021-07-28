@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Book') }}
                <a href="{{route('books.index')}}" class="btn btn-success float-right">Back</a>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('books.update',$book->id) }}">
                        @csrf
                        @method('PUT')


                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Book title:') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title',$book->title) }}" required autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="publisher" class="col-md-4 col-form-label text-md-right">{{ __('Publisher:') }}</label>

                            <div class="col-md-6">
                                <input id="publisher" type="text" class="form-control @error('publisher') is-invalid @enderror" name="publisher" value="{{ old('publisher',$book->publisher) }}" required autocomplete="publisher" autofocus>

                                @error('publisher')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="book_number" class="col-md-4 col-form-label text-md-right">{{ __('Book No:') }}</label>

                            <div class="col-md-6">
                                <input id="book_number" type="text" class="form-control @error('book_number') is-invalid @enderror" name="book_number" value="{{ old('book_number',$book->book_number) }}" required autocomplete="book_number" autofocus>

                                @error('book_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="category_id" class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>

                            <div class="col-md-6">

                            <select name="category_id" class="form-control" aria-label="Default select example">
                                        <option selected>Select Category</option>
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}" {{$category->id==$book->category_id ? 'selected' : ""}}>{{$category->name}}</option>
                                        @endforeach
                                        </select>

                                 @error('category_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="subject_id" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-6">

                            <select name="subject_id" class="form-control" aria-label="Default select example">
                                        <option selected>Select Subject</option>
                                        @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}" {{$subject->id==$book->subject_id ? 'selected' : ''}}>{{$subject->name}}</option>
                                        @endforeach
                                        </select>

                                 @error('subject_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                       
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update book') }}
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