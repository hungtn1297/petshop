<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category Add</title>
</head>
<body>
    

@include('admin/header')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"> Category
                    <small>Add new</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="categoryadd" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Category Name</label>
                        <input class="form-control" name="name" required />
                    </div>
                    <br>

                    <button type="submit" class="btn btn-success">Add Category</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->


@include('admin/footer');