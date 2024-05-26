@extends('admin.nav')
@section('title', 'Add New Voucher')
@section('content')
    <style>
        #data{
            display: none;
        }
        .data{
            display: none;
        }
        #input:checked~#data {
            display: unset;
        }
        #input:checked~.data {
            display: unset;
        }
    </style>
    <h1>Edit New Voucher</h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                        <h5>Voucher info</h5>
                    </div>
                    <div class="widget-content nopadding">

                        <!-- BEGIN USER FORM -->
                        <form action="{{route('voucher.update')}}" method="post" class="form-horizontal"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="control-group">
                                <label class="control-label">Title:</label>
                                <div class="controls">
                                    <input type="text" class="span11" placeholder="tên voucher" name="title"
                                        required value="{{$voucher->title}}"/> *
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Số giảm giá tính theo $:</label>
                                <div class="controls">
                                    <input type="number" class="span11" placeholder="giảm gía $" name="discount"
                                        required value="{{$voucher->discount}}"/> *
                                    <input type="hidden" name="id"
                                        required value="{{$voucher->id}}"/> *
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Số lượng:</label>
                                <div class="controls">
                                    <input type="number" class="span11" placeholder="số lượng" name="quantity"
                                        required value="{{$voucher->quantity}}"/> *
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Ngày hết hạn:</label>
                                <div class="controls">
                                    <input type="date" class="span11" name="duedate"
                                        required value="{{$voucher->due_date}}"/> *
                                </div>
                            </div>
                            {{-- <div class="control-group">
                                <label class="control-label">Chọn phạm vi áp dụng:</label>
                                <div class="controls">
                                    <label for="all">Tất cả người dùng</label>
                                    <input type="radio" name="application" id="all" value="1">
                                   <br> <label for="buy">Đã mua hàng</label>
                                    <input type="radio" name="application" id="buy" value="2">
                                   <br> <label for="input">Đạt mốc</label>
                                    <input type="radio" name="application" id="input" value="3">
                                    <br><label class="data" for="input">Nhập Vào đây</label>
                                    <input type="number" name="application_value" id="data">
                                </div>
                            </div> --}}
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success">Edit</button>
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
