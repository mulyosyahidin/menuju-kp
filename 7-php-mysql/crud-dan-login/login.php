<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Login</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
	<style>
		body {
			font-family: 'PT Sans', sans-serif;
			padding: 50px 20px 0;
		}

		.required {
			color: red;
			font-weight: bold;
		}
	</style>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-6 mx-auto">

				<form action="do-login.php" method="post">



					<div class="card shadow-lg">
						<div class="card-header">
							<h5 class="display-6">Log in Mahasiswa</h5>
						</div>
						<div class="card-body">
							<div class="mb-3">
								<label for="username" class="form-label">Username:</label>
								<input type="text" name="username" class="form-control" id="username" required="required">


							</div>

							<div class="mb-3">
								<label for="password" class="form-label">Password:</label>

								<input type="password" name="password" id="password" class="form-control" required="required">
								
							</div>
						</div>
						<div class="card-footer">
							<input type="submit" name="submit" value="Login" class="btn btn-primary">
						</div>
					</div>
				</form>

			</div>
		</div>
	</div>
</body>

</html>