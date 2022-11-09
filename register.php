<?php include 'layout/header.php'; ?>
<body>
<div class="auth-wrapper">
	<div class="auth-content container">
		<div class="card">
			<div class="row align-items-center">
				<div class="col-md-6">
					<div class="card-body">
						<h2 class="img-fluid mb-4">Exit Interview</h2>
						<h4 class="mb-3 f-w-400">Registration</h4>
						<form action="function/authentication.php" method="post">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="feather icon-user"></i></span>
                                </div>
                                <input name="idnumber" type="text" class="form-control" placeholder="ID Number" required>
                            </div>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="feather icon-user"></i></span>
                                </div>
                                <input name="fullname" type="text" class="form-control" placeholder="Full name" required>
                            </div>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="feather icon-mail"></i></span>
                                </div>
                                <input name="email" type="email" class="form-control" placeholder="Email address" required>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="feather icon-lock"></i></span>
                                </div>
                                <input name="password" type="password" class="form-control" placeholder="Password" required>
                            </div>
                            <input name="register-student" class="btn btn-primary mb-4 col-md-12" type="submit" value="Sign up">
                        </form>
						<p class="mb-2">Already have an account? <a href="login.php" class="f-w-400">Log in</a></p>
					</div>
				</div>
				<div class="col-md-6 d-none d-md-block">
					<img src="layout/assets/images/auth-bg.jpg" alt="" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</div>

</body>
<?php include 'layout/footer.php'; ?>
