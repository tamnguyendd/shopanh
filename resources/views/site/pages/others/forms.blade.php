<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>@yield('title') - {{ $settings["site_name"] }}</title>
    @include('site.partials.styles')
</head>
<body>
    
<header class="section-header">
<section class="header-main border-bottom">
<div class="container">
	<a href="http://bootstrap-ecommerce.com" class="brand-wrap"><img class="logo" src="https://bootstrap-ecommerce.com/templates/alistyle-html/images/logo.png"></a>
</div> <!-- container.// -->
</section>
</header> <!-- section-header.// -->


<section class="section-content padding-y bg">
<div class="container">

<div class="row">
	<aside class="col-md-6">

<!-- ============================ COMPONENT REGISTER ================================= -->
<div class="card mb-4">
<article class="card-body">
<header class="mb-4">
	<h4 class="card-title">Sign up</h4>
</header>
<form>
	<div class="form-row">
		<div class="col form-group">
			<label>First name</label>
		  	<input type="text" class="form-control" placeholder="">
		</div> <!-- form-group end.// -->
		<div class="col form-group">
			<label>Last name</label>
		  	<input type="text" class="form-control" placeholder="">
		</div> <!-- form-group end.// -->
	</div> <!-- form-row end.// -->
	<div class="form-group">
		<label>Email</label>
		<input type="email" class="form-control" placeholder="">
		<small class="form-text text-muted">We'll never share your email with anyone else.</small>
	</div> <!-- form-group end.// -->
	
	<div class="form-row">
		<div class="form-group col-md-6">
			<label>Create password</label>
		    <input class="form-control" type="password">
		</div> <!-- form-group end.// --> 
		<div class="form-group col-md-6">
			<label>Repeat password</label>
		    <input class="form-control" type="password">
		</div> <!-- form-group end.// -->  
	</div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Register  </button>
    </div> <!-- form-group// -->      
                                          
</form>
<hr>
<p class="text-center">Have an account? <a href="">Log In</a></p>
</article> <!-- card-body end .// -->
</div> <!-- card.// -->
<!-- ============================ COMPONENT REGISTER END .// ================================= -->

	</aside> 
	<aside class="col-md-6">


<!-- ============================ COMPONENT PROFILE  ================================= -->
	<div class="card mb-4">
      <div class="card-body">
      <h4 class="card-title mb-4">Profile</h4>
     <form>

     	<div class="form-group">
	     	<img src="https://bootstrap-ecommerce.com/templates/alistyle-html/images/avatars/avatar2.jpg" class="img-sm rounded-circle border">
	     </div>
        <div class="form-row">
			<div class="col form-group">
				<label>Name</label>
			  	<input type="text" class="form-control" value="John">
			</div> <!-- form-group end.// -->
			<div class="col form-group">
				<label>Email</label>
			  	<input type="email" class="form-control" value="Michael">
			</div> <!-- form-group end.// -->
		</div> <!-- form-row.// -->
		
		<div class="form-row">
			<div class="form-group col-md-6">
			  <label>Country</label>
			  <select id="inputState" class="form-control">
			    <option> Choose...</option>
			      <option>Uzbekistan</option>
			      <option>Russia</option>
			      <option selected="">United States</option>
			      <option>India</option>
			      <option>Afganistan</option>
			  </select>
			</div> <!-- form-group end.// -->
			<div class="form-group col-md-6">
			  <label>City</label>
			  <input type="text" class="form-control">
			</div> <!-- form-group end.// -->
		</div> <!-- form-row.// -->

		<div class="form-row">
			<div class="form-group col-md-6">
			  <label>Zip</label>
			  <input type="text" class="form-control" value="123009">
			</div> <!-- form-group end.// -->
			<div class="form-group col-md-6">
			  <label>Phone</label>
			  <input type="text" class="form-control" value="+123456789">
			</div> <!-- form-group end.// -->
		</div> <!-- form-row.// -->

		<button class="btn btn-primary btn-block">Send</button>
      </form>
      </div> <!-- card-body.// -->
    </div> <!-- card .// -->
<!-- ============================ COMPONENT PROFILE END.// ================================= -->


	</aside>
	<aside class="col-md-4">

<!-- ============================ COMPONENT LOGIN 1  ================================= -->
	<div class="card mb-4">
      <div class="card-body">
      <h4 class="card-title mb-4">Sign in</h4>
       
       <a href="#" class="btn btn-facebook btn-block mb-2"> <i class="fab fa-facebook-f"></i> &nbsp  Sign in with Facebook</a>
       <a href="#" class="btn btn-google btn-block mb-4"> <i class="fab fa-google"></i> &nbsp  Sign in with Google</a>

      <form>
          <div class="form-group">
             <label>Email</label>
             <input name="" class="form-control" placeholder="ex. name@gmail.com" type="email">
          </div> <!-- form-group// -->
          <div class="form-group">
            <a class="float-right" href="#">Forgot</a>
            <label>Password</label>
            <input class="form-control" placeholder="******" type="password">
          </div> <!-- form-group// --> 
          <div class="form-group"> 
            <label class="custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input" checked=""> <div class="custom-control-label"> Remember </div> </label>
          </div> <!-- form-group form-check .// -->
          <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block"> Login  </button>
          </div> <!-- form-group// -->    
      </form>
      </div> <!-- card-body.// -->
    </div> <!-- card .// -->
<!-- ============================ COMPONENT LOGIN 1  END.// ================================= -->

	</aside>
	<aside class="col-md-4">

<!-- ============================ COMPONENT FEEDBACK  ================================= -->
	<div class="card mb-4">
      <div class="card-body">
      <h4 class="card-title mb-4">Feedback</h4>
      <form>
		<div class="form-group">
			<label>Email</label>
		  	<input type="text" class="form-control" placeholder="">
		</div> <!-- form-group end.// -->
		<div class="form-group">
			<label>What is message about?</label>
			<select class="form-control">
				<option>Select</option>
				<option>Technical issue</option>
				<option>Money refund</option>
				<option>Recommendation</option>
			</select>
		</div>
		<div class="form-group">
			<label>What is message about?</label>
			<textarea class="form-control" rows="3"></textarea>
		</div>
		<div class="form-group">
			<label  for="exampleFormControlFile1">
    			<input type="file" class="form-control-file">
    		</label>
		</div>
		<button class="btn btn-primary btn-block">Send</button>
      </form>
      </div> <!-- card-body.// -->
    </div> <!-- card .// -->
<!-- ============================ COMPONENT FEEDBACK END.// ================================= -->

	</aside>

	<aside class="col-md-4">


<!-- ============================ COMPONENT PAYMENT  ================================= -->
	<div class="card mb-4">
      <div class="card-body">
      <h4 class="card-title mb-4">Payment</h4>
      <form role="form">
<div class="form-group">
<label for="username">Name on card</label>
<input type="text" class="form-control" name="username" placeholder="Ex. John Smith" required="">
</div> <!-- form-group.// -->

<div class="form-group">
<label for="cardNumber">Card number</label>
<div class="input-group">
	<input type="text" class="form-control" name="cardNumber" placeholder="">
	<div class="input-group-append">
		<span class="input-group-text">
			<i class="fab fa-cc-visa"></i> &nbsp; <i class="fab fa-cc-amex"></i> &nbsp; 
			<i class="fab fa-cc-mastercard"></i> 
		</span>
	</div>
</div> <!-- input-group.// -->
</div> <!-- form-group.// -->

<div class="row">
    <div class="col-md flex-grow-0">
        <div class="form-group">
            <label><span class="hidden-xs">Expiration</span> </label>
        	<div class="form-inline" style="min-width: 220px">
        		<select class="form-control" style="width:100px">
				  <option>MM</option>
				  <option>01 - Janiary</option>
				  <option>02 - February</option>
				  <option>03 - February</option>
				</select>
	            <span style="width:20px; text-align: center"> / </span>
	            <select class="form-control" style="width:100px">
				  <option>YY</option>
				  <option>2018</option>
				  <option>2019</option>
				</select>
        	</div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label data-toggle="tooltip" title="" data-original-title="3 digits code on back side of the card">CVV <i class="fa fa-question-circle"></i></label>
            <input class="form-control" required="" type="text">
        </div> <!-- form-group.// -->
    </div>
</div> <!-- row.// -->

<p class="alert alert-success"> <i class="fa fa-lock"></i> Some secureity information Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
<button class="subscribe btn btn-primary btn-block" type="button"> Confirm  </button>
</form>
      </div> <!-- card-body.// -->
    </div> <!-- card .// -->
<!-- ============================ COMPONENT PAYMENT END.// ================================= -->

	</aside>
</div> <!-- row.// -->




</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->


<!-- ========================= FOOTER ========================= -->
<footer class="section-footer border-top padding-y">
	<div class="container">
		
<a href="http://bootstrap-ecommerce.com">Bootstrap-ecommerce UI kit</a>

	</div><!-- //container -->
</footer>
<!-- ========================= FOOTER END // ========================= -->

</body>
</html>
