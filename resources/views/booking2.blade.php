<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">

<title>Mysa</title>
<!-- Bulma CSS -->	
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
<!-- Fontawesome-->
<script src="https://kit.fontawesome.com/3b6fb5d974.js" crossorigin="anonymous"></script>
<!-- Material Icons-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- Javascript-->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<!-- Datatable-->
 
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bulma.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
	
	
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bulma.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>

<script type="text/javascript" class="init">
	$(document).ready(function() {
	var table = $('#example').DataTable( {
		
		responsive: true,
		columnDefs: [
        { responsivePriority: 1, targets: 0 },
      
    ]
	} );
} );
</script>
</head>

<body>
<div class="section">
    <div class="container">
        <h1 class="title">
       BOOKING INFORMATION
        </h1>
        <h3 class="subtitle">
       List of booking that was submitted in the form. 
        </h3>
    </div>
</div>
<section class="section">								
		<table id="example" class=" table is-striped " style="width:100%;">
	
		<thead>
				<tr>
							<th >Surname</th>
							<th >Middlename</th>
							<th >Firstname</th>
							<th >Bithday</th>
							<th >Age</th>
							<th >City</th>
							<th >Postalcode</th>
							<th >Phonenumber</th>
                            <th >Mobilenumber</th>
							<th >Email Address</th>
							<th >Fullname</th>
							<th >EmergencyMobileNumber</th>
                            <th >Relationship</th>
                           

				</tr>
			</thead>
			<tbody>
			@foreach($bookings as $booking)
				<tr>
					<td >{{$booking->Surname}}</td>
					<td >{{ $booking->Middlename}}</td>
					<td>{{ $booking->Firstname}}</td>
					<td>{{$booking->Bithday}}</td>
                    <td >{{$booking->Age}}</td>
					<td >{{ $booking->City}}</td>
					<td>{{ $booking->Postalcode}}</td>
					<td>{{$booking->Phonenumber}}</td>
                    <td >{{$booking->Mobilenumber}}</td>
					<td >{{ $booking->Email}}</td>
					<td>{{ $booking->Fullname}}</td>
					<td>{{$booking->EmergencyMobileNumber}}</td>
                    <td>{{$booking->Relationship}}</td>
					
					</tr>
			@endforeach				
			</tbody>
			
		</table>					
	</div>
	
</section>
<section class="section">

    <div class="container buttons is-centered ">
        <div class="row justify-content-center">
          <a href="{{route('booking.index')}}" class="button is-danger  " > BACK </a>
        </div>
      </div>
</section>
</body>
</html>
