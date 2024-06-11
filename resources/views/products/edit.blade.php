@extends('layouts.app')
  
@section('title', 'Edit Product')
  
@section('contents')
    <h1 class="mb-0">Edit Product</h1>
    <hr />
    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $product->title }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Price</label>
                <input type="text" name="price" class="form-control" placeholder="Price" value="{{ $product->price }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Product Code</label>
                <input type="text" name="product_code" class="form-control" placeholder="Product Code" value="{{ $product->product_code }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" placeholder="Description">{{ $product->description }}</textarea>
            </div>
            <div class="col mb-3">
                <label class="form-label">Image</label>
                <input type="file" name="image" class="form-control" id="imageInput" onchange="previewImage(event)">
                @if($product->image)
                    <img id="existingImage" src="{{ asset('storage/'.$product->image) }}" alt="Product Image" width="100" class="mt-2">
                @endif
                <!-- Kontainer pratinjau gambar baru -->
                <div class="mt-2">
                    <img id="imagePreview" src="#" alt="Image Preview" style="display: none; max-width: 100%; height: auto;">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection

@section('scripts')
    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('imagePreview');
                output.src = reader.result;
                output.style.display = 'block';
            }
            reader.readAsDataURL(event.target.files[0]);
        }

        document.getElementById('productForm').addEventListener('submit', function(event) {
            var imageInput = document.getElementById('exampleInputFile');
            if (imageInput.files.length === 0) {
                alert('Please upload an image.');
                event.preventDefault(); 
            }
        });
    </script>
@endsection
