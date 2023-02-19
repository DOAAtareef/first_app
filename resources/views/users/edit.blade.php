<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bootstrap CRUD Data Table for Database with Modal Form</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="{{ url('user_style.css') }}">

</head>

<body>
   
   
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="{{ route('users.update' ,['id'=> $user ->id] )}}"   method="POST" >
            @csrf
			@method('PUT')
				<div class="modal-header">
					<h4 class="modal-title">Add User</h4>
					<button type="button" class="close"  data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label>Name</label>
						<input type="text" class="form-control" name='name' value="{{ $user->name}} required>
					</div>
                    <div class="form-group">
						<label>UserName</label>
						<input type="text" class="form-control" name='username' value="{{ $user->username}}"  required>
					</div>
                    <div class="form-group">
						<label>password</label>
						<input type="password" class="form-control" name='password'>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" name='email' value="{{ $user->email}}"  required>
					</div>
					<div class="form-group">
						<label>Address</label>
						<textarea class="form-control" name='address' ></textarea>
					</div>
					<div class="form-group">
						<label>Phone</label>
						<input type="text" class="form-control" name='phone' value="{{ $user->phone}}>
					</div>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" value="update">
				</div>
			</form>
		</div>
	



    </div>
</body>

</html>
