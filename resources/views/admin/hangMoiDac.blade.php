@extends('admin.nav')
@section('title', 'Chi Tiếc Cái cc ')
@section('content')
<!-- Bootstrap CSS -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"> -->
<h1>Manage Vouchers</h1>
</div>
<div class="container-fluid">
    <hr>
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"><a href="{{ url('add-voucher') }}"> <i class="icon-plus"></i>
                        </a></span>
                    <h5>Vouchers</h5>
                </div>
                <div class="widget-content nopadding">
                    <table class="table table-bordered
                                    table-striped">
                        <thead>
                            <tr>
                                <th>Tên Người Dùng</th>
                                <th>ảnh sản phẩm</th>
                                <th>Tên Sản Phẩm</th>
                                <th>Email</th>
                                <th>Số Điện Thoại</th>
                                <th>Nội Dung Khách Đặc</th>
                                <th>Địa Chỉ</th>
                                <th>Ngày Đặc</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tbody>
                            @foreach ($transactions as $transaction)
                            <tr>
                                <td>{{ $transaction->user->name }}</td>
                                <!-- Giả sử bạn đã có relation 'user' trong model Transaction -->
                                <td style="width: 20%;">
                                    @php $shown = false; @endphp
                                    @foreach ($images as $item)
                                    @if (!$shown && $transaction->product_id == $item->product_id)
                                    <img style="width: 100%; max-width: 200px;" src="{{ asset('app/images/products/'.$item->name) }}" alt="{{ $item->name }}">
                                    @php $shown = true; @endphp


                                    @endif
                                    @endforeach
                                </td>
                                <td>{{ $transaction->product->name }}</td> <!-- Hiển thị tên sản phẩm -->
                                <td>{{ $transaction->email }}</td>
                                <td>{{ $transaction->phone }}</td>
                                <td>{{ $transaction->order_content }}</td>
                                <td>{{ $transaction->shipping_address }}</td>
                                <td>{{ $transaction->created_at->format('d-m-Y') }}</td>
                                <td>
                                    @php $shown = false; @endphp
                                    @foreach ($images as $item)
                                    @if (!$shown && $transaction->product_id == $item->product_id)
                                    <button type="button" class="btn btn-primary btn-mini" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#exampleModal" 
                                    data-name="{{ $transaction->product->name }}" 
                                    data-image="{{ asset('app/images/products/'.$item->name) }}" 
                                    data-price="{{ $transaction->product->price }}" 
                                    data-description="{{ $transaction->product->description }}">
                                        Chi Tiết
                                    </button>
                                    @php $shown = true; @endphp
                                    @endif
                                    @endforeach
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                        </tbody>
                    </table>
                    <div class="modal" id="exampleModal" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Chi Tiết Sản Phẩm</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    <h1 id="productName" style="font-size: 36px; font-weight: bold;">Tên sản phẩm</h1>

                                    <img id="productImage" src="" alt="Hình Sản Phẩm" width="100%">
                                    <h1 id="productPrice" style="font-weight: bold; color: black;">Giá sản phẩm</h1>
                                    <h1 id="productDescription" style="font-weight: bold; color: black;">Mô tả sản phẩm</h1>

                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                </div>
                            </div>
                        </div>
                    </div>



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
<!-- Bootstrap Bundle JS -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var exampleModal = document.getElementById('exampleModal');
        exampleModal.addEventListener('show.bs.modal', function(event) {
            var button = event.relatedTarget;
            var productName = button.getAttribute('data-name');
            var productImage = button.getAttribute('data-image');
            var productPrice = button.getAttribute('data-price');
            var productDescription = button.getAttribute('data-description');

            var modalTitle = exampleModal.querySelector('#productName');
            var modalImage = exampleModal.querySelector('#productImage');
            var modalPrice = exampleModal.querySelector('#productPrice');
            var modalDescription = exampleModal.querySelector('#productDescription');

            modalTitle.textContent = productName;
            modalImage.src = productImage;
            modalImage.alt = productName;
            modalPrice.textContent = "Giá: " + productPrice;
            modalDescription.textContent = "Mô tả: " + productDescription;
        });
    });
</script>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
@endsection