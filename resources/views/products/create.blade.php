@extends('layouts.app')

@section('title', 'Create Product')

@section('contents')
    <h1 class="mb-0">Add Product</h1>
    <hr />
    <form id="productForm" action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Product</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title" class="form-label" style="color: black"><strong>Title</strong></label>
                            <input type="text" name="title" class="form-control" placeholder="Title" required>
                        </div>
                        <div class="form-group">
                            <label for="price" style="color: black"><strong>Price</strong></label>
                            <input type="text" name="price" class="form-control" placeholder="Price" required>
                        </div>
                        <div class="form-group">
                            <label for="product_code" style="color: black"><strong>Product Code</strong></label>
                            <input type="text" name="product_code" class="form-control" placeholder="Product Code" required>
                        </div>
                        <div class="form-group">
                            <label for="description" style="color: black"><strong>Description</strong></label>
                            <textarea name="description" class="form-control" placeholder="Description" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile" class="form-label" style="color: black"><strong>Image</strong></label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="exampleInputFile" onchange="previewImage(event)" required>
                                    <label class="custom-file-label" for="exampleInputFile">Choose File</label>
                                </div>
                            </div>
                            
                            <div class="mt-2">
                                <img id="imagePreview" src="#" alt="Image Preview" style="display: none; max-width: 100%; height: auto;">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
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
