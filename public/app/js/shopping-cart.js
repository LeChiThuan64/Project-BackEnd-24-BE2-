$(document).ready(function () {
    //

    // Load value price

    let date = new Date();
    getProductInfo();
    async function getProductInfo() {
        let voucherContent = document.querySelectorAll(".voucher");
        const url = "/get-product-info";
        const response = await fetch(url);
        const result = await response.json();
        console.log(result);
        voucherContent.forEach((e) => {
            result.vouchers.forEach((element) => {
                let due = element.due_date.replace(" ", "T");
                let dueDate = new Date(due);
                if (dueDate > date) {
                    e.innerHTML += `	
             <input type="radio" id="option${element.id}" name="options" value="${element.id}">
             <label for="option${element.id}">
             ${element.title} - giảm ${element.discount} vnd
             </label>`;
                }
            });
        });
    }

    //

    $('.cart-romove.item input[type="checkbox"]').change(function () {
        var isChecked = $(this).prop("checked");

        // Cập nhật trạng thái của các checkbox sản phẩm trong từng hàng
        $("tbody tr").each(function () {
            var checkbox = $(this).find(".form-check-input");
            checkbox.prop("checked", isChecked);

            // Lấy ID của sản phẩm
            var productId = $(this).data("id");

            // Tính toán lại giá trị khi checkbox thay đổi
            if (isChecked) {
                calculateSelectedProducts(productId);
            } else {
                // Nếu checkbox được bỏ chọn, cập nhật lại tổng khi bỏ sản phẩm này
                updateGrandTotal(productId);
            }
        });

        // Tính lại tổng giá trị
        calculateTotal();
    });

    // Xử lý sự kiện thay đổi của các checkbox sản phẩm
    $("tbody tr .form-check-input").change(function () {
        var isChecked = $(this).prop("checked");
        var productId = $(this).closest("tr").data("id");

        if (isChecked) {
            calculateSelectedProducts(productId);
        } else {
            updateGrandTotal(productId);
        }

        // Tính lại tổng giá trị
        calculateTotal();
    });

    /*
        // Hàm tính toán và cập nhật tổng số lượng và tổng giá trị sản phẩm đã chọn
    function updateCartTotals() {
        var totalProducts = 0;
        var totalAmount = 0;
    
        // Lặp qua từng sản phẩm trong bảng giỏ hàng
        $('tbody tr').each(function () {
            var checkbox = $(this).find('.form-check-input');
            var quantity = parseInt($(this).find('.quant-input input').val());
           
            var priceString = $(this).find('.cart-grand-total-price').text().trim(); 
            var priceWithoutDecimal = priceString.replace('.', '');
            var price = parseFloat(priceWithoutDecimal);
            
            console.log(price);
    
    
            if (checkbox.prop('checked')) {
                totalProducts += quantity;
                totalAmount += price * quantity;
    
                 // Lặp qua các hàng và gán giá trị tổng cộng vào trường input ẩn
           
                 var productId = $(this).closest('tr').data('id');
                 var quantity = parseInt($('#quant-input-' + productId + ' input').val(), 10);
     
                 // Lấy giá trị chuỗi tiền tệ từ thành phần DOM
                 var priceString = $(this).text().trim(); // Đảm bảo loại bỏ khoảng trắng thừa
                 //console.log('Giá trị chuỗi ban đầu:', priceString);
     
                 // Loại bỏ dấu chấm phân cách thập phân (ví dụ: "522.000" -> "522000")
                 var priceWithoutDecimal = priceString.replace('.', '');
                 //console.log('Giá trị sau khi loại bỏ dấu chấm:', priceWithoutDecimal);
     
                 // Chuyển đổi chuỗi thành số để sử dụng trong tính toán
                 var price = parseFloat(priceWithoutDecimal);
                 //console.log('Giá trị số sau khi chuyển đổi:', price);
     
                 subtotal += quantity;
                 grandTotal += price * quantity;
            }
    
            
        });
    
        console.log(totalAmount);
        console.log(formatCurrency(totalAmount));
        $('.sub-total').text(totalProducts + ' Sản Phẩm');
         $('.grand-total').text(formatCurrency(totalAmount) + ' VND');
    }
    */

    // Load value price
    function updateGrandTotal(productId) {
        var quantity = parseInt(
            $("#quant-input-" + productId + " input").val(),
            10
        );
        var priceString = $("#cart-sub-total-price-" + productId)
            .text()
            .trim();

        // Loại bỏ dấu chấm phân cách thập phân (ví dụ: "522.000" -> "522000")
        var priceWithoutDecimal = priceString.replace(".", "");
        // Chuyển đổi chuỗi thành số dấu phẩy động
        var price = parseFloat(priceWithoutDecimal);
        var grandTotal = price * quantity; // Tính toán tổng cộng

        // Định dạng kết quả tổng cộng thành định dạng tiền tệ và gán vào thành phần DOM
        $("#cart-grand-total-price-" + productId).text(
            formatCurrency(grandTotal)
        );

        // Lặp qua các hàng và gán giá trị tổng cộng vào trường input ẩn
        $("tr[data-id]").each(function () {
            var productId = $(this).data("id");
            var totalValueStrng = $("#cart-grand-total-price-" + productId)
                .text()
                .trim();
            var totalValueWithoutDecimal = totalValueStrng.replace(".", "");
            var totalValue = parseFloat(totalValueWithoutDecimal);
            // console.log('totalValue = ' + totalValue);
            $("#redirectValue").val(totalValue);
        });
    }
    function calculateSelectedProducts(productId) {
        // Lặp qua từng sản phẩm
        $("tbody tr").each(function () {
            var quantity = parseInt(
                $("#quant-input-" + productId + " input").val(),
                10
            );
            var priceString = $("#cart-sub-total-price-" + productId)
                .text()
                .trim();

            // Loại bỏ dấu chấm phân cách thập phân (ví dụ: "522.000" -> "522000")
            var priceWithoutDecimal = priceString.replace(".", "");
            // Chuyển đổi chuỗi thành số dấu phẩy động
            var price = parseFloat(priceWithoutDecimal);
            var grandTotal = price * quantity; // Tính toán tổng cộng

            // Định dạng kết quả tổng cộng thành định dạng tiền tệ và gán vào thành phần DOM
            $(".sub-total").text(formatCurrency(quantity));
            $(".grand-total").text(formatCurrency(grandTotal) + " VND");
            $(".result").text(formatCurrency(grandTotal) + " VND");
            $("#redirectValue").val(formatCurrency(grandTotal));

            // Lặp qua các hàng và gán giá trị tổng cộng vào trường input ẩn
            $("tr[data-id]").each(function () {
                var productId = $(this).data("id");
                var totalValueStrng = $("#cart-grand-total-price-" + productId)
                    .text()
                    .trim();
                var totalValueWithoutDecimal = totalValueStrng.replace(".", "");
                var totalValue = parseFloat(totalValueWithoutDecimal);
                // console.log('totalValue = ' + totalValue);
                $("#redirectValue").val(totalValue);
            });
        });

        // console.log(formatCurrency(totalPrice) + ' VND');
        // // Hiển thị tổng số lượng và tổng tiền của các sản phẩm được chọn
        // $('.sub-total').text(quantity);
        // $('.grand-total').text(formatCurrency(grandTotal) + ' VND');
    }

    // Tính toán tổng Subtotal và Grand Total
    function calculateTotal() {
        var subtotal = 0;
        var grandTotal = 0;

        // Lặp qua từng sản phẩm để tính tổng giá trị
        $("tbody tr").each(function () {
            var checkbox = $(this).find(".form-check-input");
            var productId = $(this).data("id");
            var quantity = parseInt(
                $("#quant-input-" + productId + " input").val(),
                10
            );

            if (checkbox.prop("checked")) {
                var priceString = $("#cart-sub-total-price-" + productId)
                    .text()
                    .trim();
                var priceWithoutDecimal = priceString.replace(".", "");
                var price = parseFloat(priceWithoutDecimal);
                subtotal += quantity;
                grandTotal += price * quantity;
            }
        });

        // Hiển thị tổng số lượng và tổng giá trị
        $(".sub-total").text(formatCurrency(subtotal));
        $(".grand-total").text(formatCurrency(grandTotal) + " VND");
        $(".result").text(formatCurrency(grandTotal) + " VND");
        $("#redirectValue").val(formatCurrency(grandTotal));
    }

    function formatCurrency(amount) {
        return amount.toFixed(0).replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }

    // Cập nhật tổng số lượng ngay khi trang tải lần đầu tiên
    $(".cart-product-grand-total").each(function () {
        var productId = $(this).parent().parent().data("id");
        updateGrandTotal(productId);
    });

    // Tính toán và hiển thị tổng Subtotal và Grand Total lần đầu tiên khi trang tải
    //calculateTotal();

    // Xử lý sự kiện khi nhấn vào nút "UPDATE CART"
    $(".update-cart").click(function (e) {
        e.preventDefault();
        updateCart();
    });

    // Hàm cập nhật giỏ hàng thông qua Ajax
    async function updateCart() {
        var updatedCart = {};

        // Lặp qua mỗi sản phẩm trong giỏ hàng
        $("tr[data-id]").each(function () {
            var productId = $(this).data("id");
            var quantity = $("#quant-input-" + productId + " input").val();

            // Thêm ID sản phẩm và số lượng vào đối tượng updatedCart
            updatedCart[productId] = quantity;
        });

        // Lấy mã CSRF token
        var csrfToken = $('meta[name="csrf-token"]').attr("content");

        // Gửi yêu cầu Ajax để cập nhật giỏ hàng
        $.ajax({
            url: "/shopping-cart/update",
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": csrfToken,
            },
            data: JSON.stringify({
                cart: updatedCart,
                _token: csrfToken,
            }),
            success: function (response) {
                alert(response); // Hiển thị thông báo thành công
                location.reload(); // Tải lại trang để cập nhật giỏ hàng
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert("Error: " + textStatus + " " + errorThrown); // Hiển thị thông báo lỗi nếu có
            },
        });
    }

    // // Lấy tổng giá trị của giỏ hàng và gán vào nút "PROCEED TO CHECKOUT"
    // function setCheckoutValue() {
    //     var totalPrice = 0;

    //     // Lặp qua mỗi sản phẩm trong giỏ hàng và tính tổng giá trị
    //     $('.cart-product-grand-total .cart-grand-total-price').each(function () {
    //         totalPrice += parseFloat($(this).text());
    //     });

    //     // Gán giá trị tổng giá trị vào nút "PROCEED TO CHECKOUT"
    //     $('.checkout-btn').val(totalPrice.toFixed(0));
    // }

    // // Gọi hàm để gán giá trị cho nút "PROCEED TO CHECKOUT"
    // setCheckoutValue();

    // Xử lý sự kiện tăng số lượng
    // Xử lý sự kiện tăng số lượng
    $(".arrow.plus").click(function () {
        var productId = $(this).closest("tr").data("id");
        var input = $("#quant-input-" + productId + " input");
        var quantity = parseInt(input.val(), 10) + 1;
        input.val(quantity); // Cập nhật số lượng mới

        // Cập nhật tổng khi thay đổi số lượng
        updateGrandTotal(productId);
        calculateSelectedProducts(productId);
        calculateTotal();

        // Kiểm tra và tính lại giá trị nếu đã chọn voucher
        if ($('input[name="selectedVoucher"]:checked').length > 0) {
            applyVoucherDiscount();
        }
    });

    // Xử lý sự kiện giảm số lượng
    $(".arrow.minus").click(function () {
        var productId = $(this).closest("tr").data("id");
        var input = $("#quant-input-" + productId + " input");
        var quantity = parseInt(input.val(), 10) - 1;

        if (quantity >= 1) {
            input.val(quantity); // Cập nhật số lượng mới

            // Cập nhật tổng khi thay đổi số lượng
            updateGrandTotal(productId);
            calculateSelectedProducts(productId);
            calculateTotal();

            // Kiểm tra và tính lại giá trị nếu đã chọn voucher
            if ($('input[name="selectedVoucher"]:checked').length > 0) {
                applyVoucherDiscount();
            }
        }
    });

    // Hàm áp dụng giảm giá từ voucher và cập nhật lại tổng giá trị hiển thị
    function applyVoucherDiscount() {
        var selectedVoucher = $('input[name="selectedVoucher"]:checked');
        var discountPercentage = parseFloat(
            selectedVoucher.siblings("label").text().match(/\d+/)
        );

        if (!isNaN(discountPercentage)) {
            var originalTotalString = $(".grand-total").text().trim(); // Lấy tổng giá trị ban đầu
            var originalTotalWithoutDecimal = originalTotalString
                .replace(/\./g, "")
                .replace(" VND", "");
            var originalTotal = parseFloat(originalTotalWithoutDecimal);

            // Kiểm tra xem có sản phẩm nào còn trong giỏ hàng không
            var hasProductsInCart = $("tbody tr").length > 0;

            if (hasProductsInCart) {
                var discountedAmount =
                    (originalTotal * discountPercentage) / 100; // Tính số tiền giảm
                var newTotal = originalTotal - discountedAmount; // Tính tổng giá trị mới

                // Cập nhật tổng giá trị mới
                $(".deduction").text(formatCurrency(discountedAmount) + " VND");
                $(".result").text(formatCurrency(newTotal) + " VND");
                $("#redirectValue").val(formatCurrency(newTotal));
            } else {
                // Nếu không còn sản phẩm nào trong giỏ hàng, đặt giá giảm về 0
                $(".deduction").text("0 VND");
                $(".result").text("0 VND");
                $("#redirectValue").val(0);
            }
        } else {
            console.error("Invalid discount percentage.");
        }
    }

    $(".remove-cooke").click(function (e) {
        e.preventDefault();

        // Lấy productId từ thuộc tính data-id của hàng
        var productId = $(this).closest("tr").data("id");

        $.ajax({
            url: "/shopping-cart/" + productId,
            method: "get",
            success: function (response) {
                alert("The product has been removed from the cart");
                location.reload(); // Tải lại trang để cập nhật giỏ hàng
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert("Lỗi: " + textStatus + " " + errorThrown);
            },
        });
    });

    $(".cooke").click(function () {
        var product_id = $(this).data("id");

        $.ajax({
            url: "/home/" + product_id,
            method: "get",
            success: function (response) {
                alert("Product added to cart");
                fetchCartData();
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert("Error: " + textStatus + " " + errorThrown);
            },
        });
    });

    function updateCartUI(cartData) {
        // Xóa dữ liệu cũ
        $("#cart-products").empty();
        var totalPrice = 0;
        var qtyItem = 0;
        const result = document.querySelector('#cart-products');
        result.innerHTML = "";
        // Thêm dữ liệu mới
        $.each(cartData, function (index, product) {
            totalPrice += product.price;
            qtyItem++;


            result.innerHTML += `
                <div class="row" id="removeItem-${product.id}">
                    <div class="col-xs-4">
                        <div class="image">
                            <a href="/detail/${product.id}"><img src="/app/images/products/p${product.id}.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xs-7">
                        <h3 class="name"><a href="index.php?page-detail">${product.name}</a></h3>
                        <div class="price">${product.price}</div>
                    </div>
                    <div class="col-xs-1 action">
                        <a href="#"><i class="fa fa-trash"></i></a>
                    </div>
                </div>
            `;
        });

        // $('#qtyItem').innerHTML = `<span class="count">${qtyItem}</span>`
        $("#qtyItem .count").html(qtyItem);
        $(
            "#totalPrice"
        ).innerHTML = `<span class="sign"></span><span class="value">${totalPrice}</span>`;
        // $('#subTotal').innerHTML = `Sub Total :</span><span class='price'>${totalPrice}`
        $("#subTotal .price").html(totalPrice);
        console.log(qtyItem);
        console.log(totalPrice);
    }

    function fetchCartData() {
        $.ajax({
            url: "/get-cart-data",
            method: "get",
            success: function (response) {
                updateCartUI(response);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.error(
                    "Error fetching cart data:",
                    textStatus,
                    errorThrown
                );
            },
        });
    }

    fetchCartData();


    // Xóa sản phẩm trên giỏ hảng nhỏ ở thanh navigation
    $(document).on('click', '.fa-trash', function () {
        var productId = $(this).closest('.row').attr('id').split('-')[1];
        // $('#removeItem-' + productId).remove();
        $.ajax({
            url: "/shopping-cart/" + productId,
            method: "get",
            success: function (response) {
                alert("The product has been removed from the cart");
                location.reload(); // Tải lại trang để cập nhật giỏ hàng
                fetchCartData();
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert("Lỗi: " + textStatus + " " + errorThrown);
            },
        });
    });


    // $(".checkout-btn-child").click(function () {
    //     // Lấy product_id từ thuộc tính 'data-id' của hàng sản phẩm
    //     var productId = $(this).closest("tr").data("id");

    //     // Lấy giá trị tổng cộng của sản phẩm từ phần tử có id tương ứng
    //     var totalValue = $("#cart-grand-total-price-" + productId).text();

    //     // Gán giá trị tổng cộng vào trường input ẩn có id 'redirectValue-' cùng với product_id
    //     $("#redirectValue").val(totalValue);

    //     // Tiếp tục với hành động submit form nếu cần
    // });

    function updateCartDataOnLoad() {
        // Lặp qua mỗi hàng sản phẩm để cập nhật dữ liệu
        $("tr[data-id]").each(function () {
            var productId = $(this).data("id");

            // Cập nhật tổng giá trị cho sản phẩm
            updateGrandTotal(productId);
        });

        // Tính toán và hiển thị tổng Subtotal và Grand Total khi màn hình được tải xong
        //calculateTotal();
    }

    updateCartDataOnLoad();

    $("#openVoucherModalBtn").click(function () {
        $.ajax({
            url: "/get-all-vouchers", // Địa chỉ URL để lấy danh sách vouchers từ Laravel
            type: "GET",
            success: function (response) {
                if (response) {
                    var voucherList = $("#voucherList");
                    voucherList.empty(); // Xóa nội dung hiện tại trong danh sách voucher

                    response.forEach(function (voucher) {
                        var voucherRow = `
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="selectedVoucher" id="voucher${voucher.id}" value="${voucher.discount}">
                                <label class="form-check-label" for="voucher${voucher.id}">
                                    ${voucher.title} - Giảm ${voucher.discount} % (${voucher.due_date})
                                </label>
                            </div>
                        `;
                        voucherList.append(voucherRow);
                    });
                }
            },
            error: function (xhr, status, error) {
                console.error("Error while fetching vouchers:", error);
            },
        });
    });

    $(".save-vocher").click(function () {
        var selectedVoucher = $('input[name="selectedVoucher"]:checked');
        const myModal = new bootstrap.Modal(".modal");
        if (selectedVoucher.length > 0) {
            var discountPercentage = parseFloat(
                selectedVoucher.siblings("label").text().match(/\d+/)
            ); // Lấy phần trăm giảm giá từ label

            if (!isNaN(discountPercentage)) {
                var originalTotalString = $(".grand-total").text().trim(); // Lấy tổng giá trị ban đầu
                var originalTotalWithoutDecimal = originalTotalString
                    .replace(".", "")
                    .replace(" VND", "");
                var originalTotal = parseFloat(originalTotalWithoutDecimal);

                var discountPercentage = parseFloat(
                    selectedVoucher.siblings("label").text().match(/\d+/)
                ); // Lấy phần trăm giảm giá từ label
                var discountedAmount =
                    (originalTotal * discountPercentage) / 100; // Tính số tiền giảm

                var newTotal = originalTotal - discountedAmount; // Tính tổng giá trị mới

                console.log(discountedAmount);
                console.log(newTotal);
                // Cập nhật tổng giá trị mới
                $(".deduction").text(formatCurrency(discountedAmount) + " VND");
                $(".result").text(formatCurrency(newTotal) + " VND");

                console.log(formatCurrency(discountedAmount) + " VND");
                console.log(formatCurrency(newTotal) + " VND");

                // Đóng modal sau khi cập nhật thành công
                // myModal.hide();
            } else {
                console.error("Invalid discount percentage.");
            }
        } else {
            console.error("No voucher selected.");
            // myModal.hide();
        }
        myModal.hide();
    });

    function formatCurrency(amount) {
        return amount.toFixed(0).replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }


    


    $(".checkout-btn").click(function () {
        var selectedProducts = [];
        var hasChecked = false;  // Biến để kiểm tra xem có checkbox nào được chọn hay không
        var userLogin = $("#user").val();
        console.log(userLogin);

        $("tbody tr").each(function () {
            var checkbox = $(this).find(".form-check-input");
            if (checkbox.prop("checked")) {
                hasChecked = true;  // Nếu có ít nhất một checkbox được chọn, đặt biến hasChecked thành true
    
                var productId = $(this).data("id");
                var productName = $(this)
                    .find(".cart-product-description a")
                    .text()
                    .trim();
                var productPrice = $(this)
                    .find(".cart-sub-total-price")
                    .text()
                    .trim();
                var productQuantity = $("#quant-input-" + productId + " input")
                    .val()
                    .trim();
                var productTotal = $(this)
                    .find(".cart-grand-total-price")
                    .text()
                    .trim();
    
                selectedProducts.push({
                    id: productId,
                    name: productName,
                    price: productPrice,
                    quantity: productQuantity,
                    total: productTotal,
                });
            }
        });
    
        if (!hasChecked) {
            // Nếu không có checkbox nào được chọn, hiển thị thông báo và không thực hiện sự kiện
            alert("Please select at least one product to checkout.");
            event.preventDefault();
            return;  // Dừng thực hiện sự kiện click
        }
        	if (userLogin == 0) {
            // Nếu không có checkbox nào được chọn, hiển thị thông báo và không thực hiện sự kiện
            alert("Please login to Checkout.");
            event.preventDefault();
            return;  // Dừng thực hiện sự kiện click
        }
    
        // Đặt giá trị cho input ẩn với chuỗi JSON của mảng selectedProducts
        $("#selectedProductsInput").val(JSON.stringify(selectedProducts));
    
        // In mảng selectedProducts ra console để kiểm tra
        console.log(selectedProducts);
    
        // Chuyển hướng đến trang vnpay_pay.php
        document.getElementById("checkoutForm").action = checkoutUrl;
        // document.getElementById('checkoutForm').action = "http://localhost:8080/Git/nhom3_ST5_BE2_NH23-24/resources/views/vnpay_php/vnpay_pay.php";
    
        // Submit form
        document.getElementById("checkoutForm").submit();
    });
    




    

    
});

document.addEventListener("DOMContentLoaded", function () {
    document
        .getElementById("checkoutFormB")
        .addEventListener("submit", function (e) {
            e.preventDefault(); // Ngăn không cho form submit tự động

            // Lấy dữ liệu từ localStorage và đặt nó vào trường input ẩn

            // Kiểm tra xem radio button nào được chọn và submit form
            if (document.getElementById("cash_payment").checked) {
                // Nếu "Pay cash upon receipt" được chọn, chuyển hướng đến trang A
                this.action = cashPaymentUrl;
            } else if (document.getElementById("online_payment").checked) {
                // Nếu "online payment" được chọn, chuyển hướng đến trang B
                this.action = onlinePaymentUrl;
            }

            // Submit form
            this.submit();
        });


        const cashPayment = document.querySelector("#cash_payment");
    const onlinePayment = document.querySelector("#online_payment");

    cashPayment.addEventListener("change", function() {
        onlinePayment.checked = false;
    });

    onlinePayment.addEventListener("change", function() {
        cashPayment.checked = false;
    });



   
});
