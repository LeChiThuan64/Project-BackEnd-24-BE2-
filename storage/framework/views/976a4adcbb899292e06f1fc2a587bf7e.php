<?php $__env->startSection('title', 'Dashboard'); ?>
<?php $__env->startSection('content'); ?>
    <style>
        .revenue-chart {
            width: 600px;
            position: absolute;
            display: inline-block;
            top: 100px;
            left: 10px;
            background: #fff;
            border-radius: 25px;
            border: 15px solid #fff;
            border-bottom: 50px solid #fff;
            box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
        }

        .button {
            position: absolute;
            bottom: -30px;
            right: 10px;
        }

        .most-chart {
            position: absolute;
            top: 100px;
            right: 50px;
            width: 600px;
            background: #fff;
            border-radius: 25px;
            border: 15px solid #fff;
            border-bottom: 50px solid #fff;
            box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
        }

        .card {
            position: absolute;
            background: rgb(255, 68, 0);
            padding: 20px 10px;
            color: #fff;
            top: 550px;
            left: 20px;
            width: 250px;
            box-shadow: 10px 10px 5px 0px rgba(85, 82, 82, 0.75);
        }
    </style>
    <h1>Dashboard</h1>
    <div class="container-fluid">
        <div class="revenue-chart">
            <canvas id="myChart"></canvas>
            <div class="btn-group button">
                <div class="btn btn-primary">Tháng</div>
                <div class="btn btn-success">Năm</div>
            </div>
        </div>
        <div class="most-chart">
            <canvas id="myChart1"></canvas>
        </div>
        <div class="card">
            <h4>Total revenue on year</h4>
            <p><span class="total" style="font-size: 1.5em;"></span>vnd</p>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Tài liệu Môn Học\Kì 4\BE2\Git\nhom3_ST5_BE2_NH23-24\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>