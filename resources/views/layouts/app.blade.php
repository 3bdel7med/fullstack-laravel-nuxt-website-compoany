<!DOCTYPE html>
<html>
<head>
	<title>Dashboard Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Header -->
<header>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">My Dashboard</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home</a>
				</li>
                <li class="nav-item active">
					<a class="nav-link" href="/about">About</a>
				</li>
                <li class="nav-item active">
					<a class="nav-link" href="#">Contacts</a>
				</li>
                <li class="nav-item active">
					<a class="nav-link" href="#">Teams</a>
				</li>
                <li class="nav-item active">
					<a class="nav-link" href="#">Out_works</a>
				</li>
                <li class="nav-item active">
					<a class="nav-link" href="#">Testimonials</a>
				</li>
				
			</ul>
		</div>
	</nav>
</header>


<!-- Main Content -->
<main class="content">
	<div class="container-fluid">
		<h1>Dashboard</h1>
        @yield('section')
	</div>
</main>

<!-- Footer -->
<footer class="footer">
	<div class="container-fluid">
		<p>&copy; 2023 My Company</p>
	</div>
</footer>

<!-- jQuery, Popper.js, and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>