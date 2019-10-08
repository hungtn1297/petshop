<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category Edit</title>
</head>
<body>
    
@include('admin/header')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"> Category
                    <small>Edit</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="categoryadd" enctype="multipart/form-data" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Category Name</label>
                    <input class="form-control" name="name" value="{{$category->name}}" required />
                    </div>
                    <br>

                   
                    <input type="hidden" name="id" value="{{$category->id}}">
                    <button type="submit" class="btn btn-success">Update Product</button>
                    <button onclick="goBack()" class="btn btn-danger">Cancel</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->


<script>
    function goBack(){
        window.history.back();
    }
</script>
@include('admin/footer');