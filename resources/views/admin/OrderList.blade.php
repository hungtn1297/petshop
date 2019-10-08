<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
	<title>Order List</title>
</head>	 

<body>
		@include('admin/header');
		
		<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Order
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                
                                <th>Customer</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Order Date</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th>Change Status</th>
                                <th>Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($orders as $order)
		                        <tr class="odd gradeX" align="center">
		                            <td>{{ $order->customername }}</td>
		                            <td>{{ $order->phone }}</td>
		                            <td>{{ $order->email }}</td>
                                    <td>{{ $order->orderdate }}</td>
                                    <td>{{ $order->total }}</td>
                                    @if ($order->status===0)
                                    <td style="color:red">Not Payment</td>
                                    @else
                                    <td style="color:green">Payment</td>    
                                    @endif
		                            <td>
		                            	<form action="orderchangestatus" 
		                            	onsubmit="return submitStatus('{{$order->name}}');" method="POST">
		                            		{{csrf_field()}}
		                            		<input type="hidden" name="id" value="{{ $order->id }}">
		                            		<input type="submit" name="" value="Change" class="btn btn-success">
		                            	</form>
		                        	</td>
		                            <td>
		                            	<form action="orderdetail" method="get">
		                            		<input type="hidden" name="id" value="{{ $order->id }}">
		                            		<input type="submit" name="" value="Detail" class="btn btn-primary">
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