@extends('layouts.app')

        @section('title', 'Home Product')

        @section('contents')
            <div class="d-flex align-items-center justify-content-between">
                <h1 class="mb-0">List Product</h1>
                <a href="{{ route('products.create') }}" class="btn btn-primary">Add Product</a>
            </div>
            <hr />
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif
            <div class="table-responsive">
            <table class="table table-hover">
                <thead class="table-primary">
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Image</th> <!-- Menambahkan kolom untuk gambar -->
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>+
                    @if($products->count() > 0)
                        @foreach($products as $rs)
                            <tr>
                                <td class="align-middle">{{ $loop->iteration }}</td>
                                <td class="align-middle">{{ $rs->title }}</td>
                                <td class="align-middle">{{ "Rp " . number_format($rs->price,2,',','.') }}</td>
                                {{-- <td>{{ "Rp " . number_format($product->price,2,',','.') }}</td> --}}

                                <td class="align-middle">{{ $rs->description }}</td>
                                <td class="align-middle"><img src="{{ Storage::url('public/products/'.$rs->image) }}" alt="Product Image" style="max-width: 100px; max-height: 100px;"></td> <!-- Menampilkan gambar dengan URL dari storage -->
                                <td class="align-middle">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ route('products.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                        <a href="{{ route('products.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('products.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger m-0">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td class="text-center" colspan="5">Product not found</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
        @endsection
