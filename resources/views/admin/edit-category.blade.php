@extends('admin.nav')
@section('title', 'Add Category')
@section('content')

    <h1>Edit Category</h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                        <h5>Category info</h5>
                    </div>
                    <div class="widget-content nopadding">

                        <!-- BEGIN USER FORM -->
                        <form id="edit-category-form" action="{{ url('manage-category/edit/' . $category->id) }}" method="post"
                            class="form-horizontal" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="control-group">
                                <label class="control-label">Name :</label>
                                <div class="controls">
                                    <input type="text" class="span11" placeholder="Category name" name="name"
                                        value="{{ $category->name }}" />
                                </div>
                            </div>
                            <!-- <div class="control-group">
            <label class="control-label">Choose another logo :</label>
            <div class="controls">
                <input type="file" name="fileUpload" id="fileUpload">
            </div>
        </div> -->
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success" id="edit-category-button">Update</button>
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
@endsection
