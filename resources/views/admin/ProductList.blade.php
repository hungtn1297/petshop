<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
	<title>Product List</title>
</head>	 

<body>
		@include('admin/header');
		
		<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Product
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Image</th>
                                <th>Category</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($products as $product)
		                        <tr class="odd gradeX" align="center">
		                        	
		                            <td>{{ $product->name }}</td>
		                            <td>{{ $product->price }}</td>
		                            <td>{{ $product->quantity }}</td>
		                            <td>
		                            	<img src="{{ $product->image }}" alt="" width="80" height="80">
		                            </td>
		                            <td>{{ $product->category['name']  }}</td>


		                            <td>
		                            	<form action="productdelete" 
		                            	onsubmit="return submitDelete('{{$product->name}}');" method="POST">
		                            		{{csrf_field()}}
		                            		<input name="_method" type="hidden" value="DELETE">
		                            		<input type="hidden" name="id" value="{{ $product->id }}">
		                            		<input type="submit" name="" value="Delete" class="btn btn-danger">
		                            	</form>
		                        	</td>
		                            <td>
		                            	<form action="productedit" method="get">
		                            		<input type="hidden" name="id" value="{{ $product->id }}">
		                            		<input type="submit" name="" value="Edit" class="btn btn-primary">
		                            	</form>
		                        	</td>
		                        </tr>
		                        @endforeach
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
		@include('admin/footer');
<script>
	checkAll = (e)=>{
		var checkOne = document.getElementsByName('checkOne');
		for (var i = 0; i < checkOne.length; i++) {
			checkOne[i].checked = e.checked;
		}
	}

	 function submitDelete($name){
   		if(confirm('Do you want to delete post '+$name+'?')){
   			return true;
   		}else{
   			return false;
   		}
   	}

</script>
</body>

</html>