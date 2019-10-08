<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Add</title>
</head>
<body>
    

@include('admin/header')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"> Product
                    <small>Add new</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="productadd" enctype="multipart/form-data" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Product Name</label>
                        <input class="form-control" name="name" required />
                    </div>
                    <br>

                    <div class="form-group">
                        <label>Price</label>
                        <input class="form-control" name="price" type="number" required />
                    </div>
                    <br>

                    <div class="form-group">
                        <label>Quantity</label>
                        <input class="form-control" name="quantity" type="number" required />
                    </div>
                    <br>

                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image">
                    </div>
                    <br>

                    
                    <div class="form-group">
                        <label>Category</label> <br>

                        <select name="category_id">
                            @foreach($category as $cate)
                            <option value="{{ $cate->id }}">
                                {{ $cate->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>

                    <div class="ckeditor">
                        <label>Description</label>
                        <textarea class="form-control" rows="3" id="editor1" name="description" required></textarea>
                        
                    </div>

                    <br>
                    <button type="submit" class="btn btn-success">Add Product</button>
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