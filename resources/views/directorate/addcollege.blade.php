@extends('directorate.app')
<style>
    .user_card {
		height: 400px;
		width: 60%;
		margin-top: auto;
		margin-bottom: auto;
		background: #2ab1ce;
		position: relative;
		display: flex;
		justify-content: center;
		flex-direction: column;
		padding: 10px;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		border-radius: 5px;
 
		}
		.brand_logo_container {
		position: absolute;
		height: 150px;
		width: 170px;
		top: -75px;
		border-radius: 50%;
		background: #C8C3C3;
		padding: 10px;
		text-align: center;
		}
		.brand_logo {
		height: 130px;
		width: 150px;
		border-radius: 50%;
		border: 2px solid white;
		}
		.form_container {
		margin-top: 100px;
		}
		.login_btn {
		width: 70%;
		background: #4d4d4d !important;
		color: white !important;
		}
		.login_btn:focus {
		box-shadow: none !important;
		outline: 0px !important;
		}
		.login_container {
		padding: 0 2rem;
		}
		.input-group-text {
		background: #4d4d4d  !important;
		color: white !important;
		border: 0 !important;
		border-radius: 0.25rem 0 0 0.25rem !important;
		}
		.input_user,
	.input_pass:focus {
		box-shadow: none !important;
		outline: 0px !important;
		}
		.custom-checkbox .custom-control-input:checked~.custom-control-label::before {
		background-color: #4d4d4d !important;
		}
a {
    color: white;
    text-decoration: none;
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
}
</style>

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
          <li class="breadcrumb-item active">Directorate</li>
        <li class="breadcrumb-item">
          <a href="/addcollege">Add Colleges</a>
        </li>
      </ol>
      <div class="container h-100">
		<div class="d-flex justify-content-center h-100">
		    <div class="user_card">
		        <div class="d-flex justify-content-center">
		            <div class="brand_logo_container">
		                <img src="/assets/img/directorate.jfif" class="brand_logo" alt="Logo">
		            </div>
		        </div>
		        <div class="d-flex justify-content-center form_container"><br>
				<form method = "post" action="{{Route('college.save')}}">
					@csrf
                    <div class="input-group mb-1">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
		                </div>
		                <input id="clgname" type="text" name="clgname" class="form-control input_user" value="" placeholder="College Name">
                    </div>
                    <div class="input-group mb-1">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fa fa-user-circle-o"></i></span>
		                </div>
		                <input id="clgshort" type="text" name="clgshort" class="form-control input_user" value="" placeholder="College registered short form">
                    </div>
                    <div class="input-group mb-1">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
		                </div>
		                <input id="email" type="text" name="email" class="form-control input_user" value="" placeholder="College email">
		            </div>
		            <div class="input-group mb-1">
		                <div class="input-group-append">
		                    <span class="input-group-text"><i class="fa fa-key"></i></span>
		                </div>
		                <input id="newpass" type="password" name="newpass" class="form-control input_pass" value="" placeholder="New password">
                    </div>
                    <div class="input-group mb-1">
		                <div class="input-group-append">
		                    <span class="input-group-text"><i class="fa fa-unlock-alt"></i></span>
		                </div>
		                <input id="newpass2" type="password" name="newpass2" class="form-control input_pass" value="" placeholder="Confirm password">
		            </div>
					<div class="d-flex justify-content-center mt-2 login_container">
						<button type="submit" name="button" class="btn login_btn">ADD COLLEGE</button>
					</div>
				</form>
		        </div>
		        
		        <div class="mt-1">
                    <div class="d-flex justify-content-center links" >
                        <a href="#" style="color:black">Forgot your password?</a>
                    </div>
		        </div>
		    </div>
		</div>
	</div>
    </div>
</div>
<script>
	
		//toastr.success('afdj')
	
</script>
@endsection