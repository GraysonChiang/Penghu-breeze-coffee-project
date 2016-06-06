@extends('layouts.app')
@section('content')
@include('layouts.navigation')


<section id="login" class="home-section nopadd-bot color-dark bg-white text-center">
			
		<div class="row marginbot-20">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="{{ count($errors) > 0 ?  :'wow flipInY' }}" data-wow-offset="0" data-wow-delay="0.4s">
					<div class="section-heading text-center">
					<h2 class="h-bold">Login</h2>
					</div>
					</div>
				</div>
			</div>

		<div class="container">
			<div class="row marginbot-80">
				<div class="col-md-8 col-md-offset-2">
						<div class="panel-body">


	<form id="contact-form" action="{{ url('/auth/login') }}" method="POST" 
	class="{{ count($errors) > 0 ?  :'wow bounceInUp' }}" data-wow-offset="10" data-wow-delay="0.2s">




					{{ csrf_field() }}
						<div class="row marginbot-20">
						<div class="form-group">
							<div class="col-md-12">
						<input type="text" class="form-control input-lg" name="name" value="{{ old('name') }}" placeholder="type User Name">

							</div>
						</div>
						</div>

						<div class="row marginbot-20">
						<div class="form-group">
							<div class="col-md-12">
								<input type="password" class="form-control input-lg" name="password" placeholder="Password">
							</div>
						</div>
						</div>	
					@if (count($errors) > 0)
						<div class="alert alert-danger text-left " role="alert">
  							<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>Something Error!
						</div>
					@endif
						<div class="form-group text-left">
							<div class="col-md-12 col-md-offset-4t">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember">Remember Me
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-12">
								<button type="submit" class="btn btn-skin btn-lg btn-block">Login</button>

								<a class="" href="{{ url('/password/email') }}">Forgot Your Password?</a>
							</div>
						</div>
					</form>
			</div>
		</div>
	</div>
</div>

    </section>


@endsection
