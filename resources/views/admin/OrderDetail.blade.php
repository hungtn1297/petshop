<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
	<title>OrderDetail</title>
</head>	 

<body>
		@include('admin/header');
		
		<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Order Detail

                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                
                                <th>Product</th>
                                <th>Product Image</th>
                                <th>Product Price</th>
                                <th>Quantity</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $total = 0 ?>
                        	@foreach($order_detail as $detail)
		                        <tr class="odd gradeX" align="center">
		                            <td>{{ $detail->product['name'] }}</td>
                                    <td>
                                        <img src="{{ $detail->product['image'] }}" alt="" width="80" height="80">
                                    </td>
		                            <td>{{ $detail->productPrice }}</td>
                                    <td>{{ $detail->quantity }}</td>
                                    <td>{{ $detail->quantity*$detail->productPrice }}</td>
                                    <?php $total += $detail->quantity*$detail->productPrice ?>
		                        </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                                <tr>
                                    <th colspan="4" style="text-align:right">Total:</th>
                                    <th style="text-align:center"></th>
                                </tr>
                            </tfoot>
                    </table>
                    
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
		@include('admin/footer');
<script>


	 function submitStatus($name){
   		if(confirm('Do you want to change status of order '+$name+'?')){
   			return true;
   		}else{
   			return false;
   		}
   	}

</script>
</body>

</html>