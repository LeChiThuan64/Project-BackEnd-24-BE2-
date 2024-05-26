@extends('admin.nav')
@section('title', 'Edit Product')
@section('content')
    <h1>Update Product</h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                        <h5>Product info</h5>
                    </div>
                    <div class="widget-content nopadding">

                        <!-- BEGIN USER FORM -->
                        <form action="{{ route('product.modify', $product->id) }}" method="post" class="form-horizontal"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="control-group">
                                <label class="control-label">Name:</label>
                                <div class="controls">
                                    <input type="text" class="span11" placeholder="Name" name="name"
                                        value="{{ $product->name }}" required /> *
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Describe:</label>
                                <div class="controls">
                                    <textarea class="span11" id="editor" placeholder="Describe" name="description">{{ $product->description }}</textarea> *
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Price:</label>
                                <div class="controls">
                                    <input type="number" class="span11" placeholder="Price" name="price"
                                        value="{{ $product->price }}" required /> *
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Choose categories:</label>
                                <div class="controls">
                                    <select name="category_ids[]" multiple required>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ in_array($category->id, $product->categories->pluck('id')->toArray()) ? 'selected' : '' }}>
                                                {{ $category->name }}</option>
                                        @endforeach
                                    </select> *
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Quantity:</label>
                                <div class="controls">
                                    <input type="number" class="span11" placeholder="Quantity" name="quantity"
                                        value="{{ $product->quantity }}" required /> *
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Status:</label>
                                <div class="controls">
                                    <label><input type="radio" name="status" value="1"
                                            {{ $product->status == 1 ? 'checked' : '' }} required /> Available </label>
                                    <label><input type="radio" name="status" value="0"
                                            {{ $product->status == 0 ? 'checked' : '' }} required /> Disable </label>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Size:</label>
                                <div class="controls">
                                    <select name="size" class="" required>
                                        <option value="S" {{ $product->size == 'S' ? 'selected' : '' }}>S</option>
                                        <option value="M" {{ $product->size == 'M' ? 'selected' : '' }}>M</option>
                                        <option value="L" {{ $product->size == 'L' ? 'selected' : '' }}>L</option>
                                        <option value="XL" {{ $product->size == 'XL' ? 'selected' : '' }}>XL</option>
                                        <option value="XXL" {{ $product->size == 'XXL' ? 'selected' : '' }}>XXL</option>
                                    </select> *
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Featured:</label>
                                <div class="controls">
                                    <label><input type="radio" name="feature" value="1"
                                            {{ $product->feature == 1 ? 'checked' : '' }} required />Yes</label>
                                    <label><input type="radio" name="feature" value="0"
                                            {{ $product->feature == 0 ? 'checked' : '' }} required />No</label>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Discount</label>
                                <div class="controls">
                                    <input type="number" class="span11" placeholder="Discount" name="discount"
                                        value="{{ $product->discount }}" required /> *
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Choose image:</label>
                                <div class="controls">
                                    <input type="file" name="fileUpload" id="fileUpload" accept="image/*">
                                    <img id="preview" src="#" alt="your image"
                                        style="display: none; width: 100px;" />
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success"
                                    onclick="return confirm('Do you want to update this product?')">Update</button>
                            </div>
                        </form>


                        <!-- END USER FORM -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- END CONTENT -->
    <!-- <script src="{{ url('admin/ckeditor/ckeditor.js') }}"></script> -->
    <!-- <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script> -->
@endsection
