@extends('admin.nav')
@section('title', 'Add New Product')
@section('content')
    <h1>Add New Product</h1>
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
                       <form action="{{route('blog.update')}}" method="post" class="form-horizontal"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="control-group">
                                <label class="control-label">Title:</label>
                                <div class="controls">
                                    <input type="text" class="span11" placeholder="Tên sản phẩm" name="title"
                                        required value="{{$blog->title}}" /> *
                                    <input type="hidden" name="id"
                                        value="{{$blog->id}}" /> *
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Content:</label>
                                <div class="controls">
                                    <textarea class="span11" id="editor" placeholder="Mô tả sản phẩm" name="content"><?php echo $blog->content ?></textarea> *
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success">Post</button>
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
