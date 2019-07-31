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
	<h1 style="color:#0700EE;"> Hi! {{$data['userName']}} . Your Currency Exchange Description</h1>
	<table width="100%">
		<tr>
				<th>Requested Time</th>
				<td>{!!$data['created_at']!!}</td>
			</tr>
			<tr><th>Status</th>
				<td style="background-color: yellow;">{{$data['status']}}</td>
			</tr>
			<tr>
				<th>Transaction Type</th>
				<td style="background-color: yellow;">{!!$data['type']!!}</td>
			</tr>
				<tr><th>Name</th>
				<td>{{$data['userName']}}</td>
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
	<h1 style="color:#0700EE;">Thanks For With us</h1>
	<h1 style="color:#B211F7;">dcashbd.com</h1>

</body>
</html>