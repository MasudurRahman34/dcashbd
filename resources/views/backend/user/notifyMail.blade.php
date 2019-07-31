<!DOCTYPE html>
<html>
<head>
	
	<style type="text/css">
		table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;    
}
	</style>
</head>
<body>
	<h1 style="color:#0700EE;">Currency Exchange Description</h1>
	<table width="100%">
			<tr>
				<th>Transaction Type</th>
				<td>{!!$data['type']!!}</td>
			</tr>
				<tr><th>Name</th>
				<td>{{$data['name']}}</td>
			</tr>
				<tr>
				<th>Email</th>
				<td>{{$data['email']}}</td>
			</tr>
				<tr><th>Send_Method</th>
				<td>{{$data['sendMethod']}}</td>
			</tr>
				<tr><th>Receive_Method</th>
				<td>{{$data['recieveMethod']}}</td>
			</tr>
				<tr><th>Send Account</th>
				<td>{{$data['sendAccount']}}</td>
			</tr>
				<tr><th>Recieve Account</th>
					<td>{{$data['recieveAccount']}}</td>
				
			</tr>
				<tr><th>Send Amount</th>
				<td>{{$data['sendAmount']}}</td>
			</tr>
				<tr><th>Recieve Amount</th>
					<td>{{$data['recieveAmount']}}</td>
				
			</tr>
				<tr><th>Transaction ID</th>
				<td>{{$data['trnasID']}}</td>
			</tr>
			

	</table>

</body>
</html>