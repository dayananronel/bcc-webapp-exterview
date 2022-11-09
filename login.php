<?php include 'layout/header.php'; ?>
<body>
<div class="auth-wrapper">
	<div class="auth-content container">
		<div class="card">
			<div class="row align-items-center">
				<div class="col-md-6">
					<div class="card-body"> 
                        <form action="function/authentication.php" method="post">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="feather icon-lock"></i></span>
                                </div>
                                <input name="idnumber" type="text" class="form-control" placeholder="ID Number">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="feather icon-lock"></i></span>
                                </div>
                                <input name="password" type="password" class="form-control" placeholder="Password">
                            </div>
                            
                            <div class="form-group text-left mt-2">
                                <div class="checkbox checkbox-primary d-inline">
                                    <input type="checkbox" name="checkbox-fill-1" id="checkbox-fill-a1" checked="">
                                    <label for="checkbox-fill-a1" class="cr"> Save credentials</label>
                                </div>
                            </div>
                            <input name="login-student" type="submit" value="Login" class="btn btn-primary mb-4 col-md-12">
                        </form>
						<p class="mb-2 text-muted">Forgot password? <a href="reset.php" class="f-w-400">Reset</a></p>
						<p class="mb-0 text-muted">Don’t have an account? <a href="register.php" class="f-w-400">Signup</a></p>
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