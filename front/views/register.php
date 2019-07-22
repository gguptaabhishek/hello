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
    
<div class="page-content " style="margin-left:310px">
		<div class="container">
			<div class="row">

				<div class="col-sm-12 col-md-12 col-xs-12 col-lg-8 ">
					<form action="<?php echo site_url('register') ?>" method="post" enctype="multipart/form-data">

						<div class="login-form">
							<h4 class="login-title">Register</h4>

							<div class="row">
								<div class="col-md-6 col-12 mb-20">
									<label>First Name</label>
                                                                        <input class="mb-0" type="text" name="fname" placeholder="First Name">
								</div>
								<div class="col-md-6 col-12 mb-20">
									<label>Last Name</label>
                                                                        <input class="mb-0" type="text" name="lname" placeholder="Last Name">
								</div>
								<div class="col-md-12 mb-20">
									<label>Email Address*</label>
                                                                        <input class="mb-0" type="email" name="email" placeholder="Email Address">
								</div>
								<div class="col-md-6 mb-20">
									<label>Password</label>
                                                                        <input class="mb-0" type="password" name="password" placeholder="Password">
								</div>
								<div class="col-md-6 mb-20">
									<label>Confirm Password</label>
                                                                        <input class="mb-0" type="password" name="cpass" placeholder="Confirm Password">
								</div>
								<div class="col-12">
									<button class="register-button mt-0">Register</button>
								</div>
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
	
	