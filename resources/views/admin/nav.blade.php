<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{ asset('app\images\admin\logo.png') }}" type="image/icon type">
    <link rel="stylesheet" href="{{ asset('app\css\bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('app\css\bootstrap-responsive.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('app\css\uniform.css') }}" />
    <link rel="stylesheet" href="{{ asset('app\css\select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('app\css\matrix-style.css') }}" />
    <link rel="stylesheet" href="{{ asset('app\css\matrix-media.css') }}" />
    <link href="{{ asset('app\fonts\css\font-awesome.css') }}" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
    <style type="text/css">
        ul.pagination {
            list-style: none;
            float: right;
        }

        ul.pagination li.active {
            font-weight: bold
        }

        ul.pagination li {
            display: flex;
            padding: 10px
        }
    </style>
</head>

<body>
    <!--Header-part-->
    <div id="header">
        <h1><a href="#"><img src="{{ asset('app\images\admin\logo.png') }}" alt=""></a></h1>
    </div>
    <!--close-Header-part-->
    <!--top-Header-menu-->
    <div id="user-nav" class="navbar navbar-inverse">
        <ul class="nav">
            <li class="dropdown" id="profile-messages"><a title="" href="#" data-toggle="dropdown"
                    data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i> <span
                        class="text">Welcome Super Admin</span><b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
                    <li class="divider"></li>
                    <li><a href="logout.html"><i class="icon-key"></i> Log
                            Out</a></li>
                </ul>
            </li>
            <li class="dropdown" id="menu-messages"><a href="{{ url('chat') }}" data-toggle="dropdown"
                    data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i>
                    <span class="text">Messages</span> <span class="label label-important">5</span> <b
                        class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
                    <li class="divider"></li>
                    <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
                    <li class="divider"></li>
                    <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
                    <li class="divider"></li>
                    <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
                </ul>
            </li>
            <li class=""><a title="" href="#"><i class="icon icon-cog"></i>
                    <span class="text">Settings</span></a></li>
            <li class=""><a title="" href="{{ url('login') }}"><i
                        class="icon
                            icon-share-alt"></i> <span
                        class="text">Logout</span></a>
            </li>
        </ul>
    </div>
    <!--start-top-serch-->
  
    <!--close-top-serch-->
    <!--sidebar-menu-->
    <div id="sidebar"> <a href="#" class="visible-phone"><i
                class="icon
                    icon-th"></i>Tables</a>
        <ul>
            <li><a href="{{ url('dashboard') }}"><i class="icon icon-home"></i> <span>Dashboard</span></a>
            <li><a href="{{ url('manage-product') }}"><i class="icon icon-th-list"></i> <span>Products</span></a>
            </li>
            <li> <a href="{{ url('manage-category') }}"><i class="icon icon-th-list"></i>
                    <span>Categories</span></a></li>
            <li> <a href="{{ url('manage-user') }}"><i class="icon icon-th-list"></i>
                    <span>Users</span></a></li>
            <li> <a href="{{ url('manage-blog') }}"><i class="icon icon-th-list"></i>
                    <span>Blogs</span></a></li>
            <li> <a href="{{ url('manage-voucher') }}"><i class="icon icon-th-list"></i>
                    <span>Vouchers</span></a></li>
            <li> <a href="{{ url('hangMoiDac') }}"><i class="icon icon-th-list"></i>
                    <span>Special New Product Information</span></a></li>

        </ul>
    </div> <!-- BEGIN CONTENT -->
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="{{ url('dashboard') }}" title="Go to Home" class="tip-bottom current"><i
                        class="icon-home"></i> Home</a></div>


            @yield('content')



            <!-- END CONTENT -->
            <div class="row-fluid">
            </div>
            <!--end-Footer-part-->
            <script src="{{ asset('app\js\jquery.min.js') }}"></script>
            <script src="{{ asset('app\js\jquery.ui.custom.js') }}"></script>
            <script src="{{ asset('app\js\bootstrap.min.js') }}"></script>
            <script src="{{ asset('app\js\jquery.uniform.js') }}"></script>
            <script src="{{ asset('app\js\select2.min.js') }}"></script>
            <script src="{{ asset('app\js\jquery.dataTables.min.js') }}"></script>
            <script src="{{ asset('app\js\matrix.js') }}"></script>
            <script src="{{ asset('app\js\matrix.tables.js') }}"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script src="{{ asset('app/js/chart.js') }}"></script>
            <script src="{{ asset('app/js/chart1.js') }}"></script>
            <script>
                $(document).ready(function() {
                    $(".delete-btn").click(function(e) {
                        e.preventDefault();
                        let form = $(this).closest("form");
                        let confirmDelete = confirm("Do you want to delete this product?");
                        if (confirmDelete) {
                            $.ajax({
                                url: form.attr('action'),
                                type: 'POST',
                                data: form.serialize(),
                                success: function(result) {
                                    // Xóa dòng sản phẩm khỏi bảng
                                    form.closest('tr').remove();
                                }
                            });
                        }
                    });
                });
            </script>

            <script src="{{ url('admin/ckeditor/ckeditor.js') }}"></script>
            <script>
                ClassicEditor
                    .create(document.querySelector('#editor'))
                    .catch(error => {
                        console.error(error);
                    });
            </script>
            <script>
                document.getElementById('fileUpload').addEventListener('change', function() {
                    var file = this.files[0];
                    if (file.type.match('image.*')) {
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            document.getElementById('preview').src = e.target.result;
                            document.getElementById('preview').style.display = 'block';
                        };
                        reader.readAsDataURL(file);
                    } else {
                        alert('Please select an image file.');
                        this.value = ''; // Reset the input
                        document.getElementById('preview').style.display = 'none'; // Hide the image element
                    }
                });

                document.getElementById('productForm').addEventListener('submit', function(e) {
                    if (!document.getElementById('fileUpload').value) {
                        alert('Please select an image before submitting the form.');
                        e.preventDefault(); // Stop form submission
                    }
                });
            </script>

</body>

</html>
