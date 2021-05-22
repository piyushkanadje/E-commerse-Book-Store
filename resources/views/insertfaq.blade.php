@extends('admin-layout')

@section('content')
    


<div class="contianer">
    <div class="row">
        <header class="my-5 text-center">
            <p class="raise-head">ADD NEW FAQ</p>
        </header>
        <form action="{{ route('faq.create') }}" method="POST" class="main-form">
            @csrf
            <div class="form-group my-3">
                <label for="title" class="text-secondary raise-label">Title</label>
                <input type="text" name="title" class="raise-input" placeholder="Subject">
                @error('title')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            </div>
            <div class="col-md-12 col-sm-12 col-12">
                <div class="form-group">
                    <label for="description" class="text-secondary">Description</label>
                    <textarea name="description" id="" class="input-text" placeholder="Message"></textarea>
                    @error('description')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                </div>
            </div>
            <div class="text-center my-5">
                {{-- <a href="#" class="btn btn-p btn-c width-2" role="button">SEND</a> --}}
                <button type="submit"> Done</button>
            </div>
        </form>
</div>
@endsection