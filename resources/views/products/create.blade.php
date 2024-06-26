@extends('layouts.app')

@section('title', 'Create Product')

@section('contents')
    <h1 class="mb-0">Add Product</h1>
    <hr />
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div>
            <!-- error message untuk title -->
            @error('title')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
            @enderror
            <div class="col">
                <input type="text" name="price" class="form-control" placeholder="Price">
            </div>
            <!-- error message untuk price -->
            @error('price')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
        @enderror
        </div>
        <div class="row mb-3">
            <div class="col">
                <textarea class="form-control" name="description" placeholder="Descriptoin"></textarea>
            </div>
            @error('description')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="file" name="image" class="form-control">
            </div>

            @error('image')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
        </div>
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
