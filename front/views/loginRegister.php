 <?php
$session = $this->session->userdata("session_data");
if($session){
        redirect('home');
        $user_id = $session->userssite_id;
        }else{
    
        $user_id = 0;
}
        $this->load->model('foodzoon_model', 'food');
        $data = $this->food->getCart($user_id);
        


    ?>
    <div class="breadcrumb-area mb-50">
        
    </div>
    
	<div class="page-content mb-50" style="margin-left:310px">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-xs-12 col-lg-8 mb-30">
					<!-- Login Form s-->
					

                                                <form action="<?php echo site_url('login', 'id=' .$this->input->get("id") ); ?>" method="post" enctype="multipart/form-data">
						<div class="login-form">
							<h4 class="login-title">Login</h4>

							<div class="row">
								<div class="col-md-12 col-12 mb-20">
									<label>Email Address*</label>
									<input class="mb-0" type="email" name="email" placeholder="Email Address">
								</div>
								<div class="col-12 mb-20">
									<label>Password</label>
                                                                        <input class="mb-0" type="password" name="pass" placeholder="Password">
								</div>
								<div class="col-md-8">
									
									<div class="check-box d-inline-block ml-0 ml-md-2 mt-10">
										<input type="checkbox" id="remember_me">
										<label for="remember_me">Remember me</label>
									</div>
									
								</div>

								<div class="col-md-4 mt-10 mb-20 text-left text-md-right">
									<a href="#"> Forgotten Password?</a>
								</div>

								<div class="col-md-12">
									<button class="register-button mt-0">Login</button>
								</div>

							</div>
						</div>

					</form>
				</div>

			</div>
		</div>
	</div>
	
	