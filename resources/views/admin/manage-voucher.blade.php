@extends('admin.nav')
@section('title', 'Manage Product')
@section('content')
    <h1>Manage Vouchers</h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"><a href="{{ url('add-voucher') }}"> <i
                                    class="icon-plus"></i>
                            </a></span>
                        <h5>Vouchers</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered
                                    table-striped">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Discount</th>
                                    <th>Due date</th>
                                    <th>Quantity</th>        
                                    <th>Type</th>        
                                    <th>Status</th>        
                                                        </tr>
                            </thead>
                            <tbody>
                             @foreach ($vouchers as $voucher )
                                 
                             <tr class="">
                                 <td>{{$voucher->title}}</td>
                                 <td>{{$voucher->discount}}</td>
                                 <td>{{$voucher->due_date}}</td>
                                 <td>{{$voucher->quantity}}</td>
                                 <td>{{$voucher->type}}</td>
                                 @if ($voucher->due_date <= date('Y-m-d H:i:s'))
                                 <td>{{'Đã quá hạn'}}</td>
                                 @endif
                                 @if ($voucher->due_date > date('Y-m-d H:i:s'))
                                 <td>{{'Còn hiệu lực'}}</td>
                                 @endif
                                 <td>
                                     <a href="{{url('edit-voucher/'.$voucher->id)}}"
                                     class="btn btn-success btn-mini">Edit</a>
                                     <form action="{{ route('voucher.delete',$voucher->id) }}" method="POST"
                                     class="delete-form">
                                     @csrf
                                     @method('DELETE')
                                     <button type="submit"
                                     class="btn btn-danger btn-mini delete-btn">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="row" style="margin-left: 18px;">
                            <ul class="pagination">
                                <li class="active"><a href="">1</a>
                                </li>
                                <li><a href="">2</a></li>
                                <li><a href="">3</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
