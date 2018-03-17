<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-20 p-b-30">
				<form action="<?php echo base_url().'Panitia/Login';?>" method="post" class="login100-form validate-form">
					<div class="login100-form-avatar">
						<img src="<?php echo base_url().'assets/img/logo_arek_w.png';?>" alt="AVATAR">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						Arek Comittee
					</span>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>