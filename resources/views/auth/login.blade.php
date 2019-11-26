@extends('web.layout')
@section('content')
<!-- login Content -->
<section class="page-area">
	<div class="container">


			<div class="row">
					<div class="col-12 col-sm-12">
							<div class="row justify-content-end">
									<nav aria-label="breadcrumb">
											<ol class="breadcrumb">
												<li class="breadcrumb-item"><a href="{{ URL::to('/')}}">@lang('website.Home')</a></li>
												<li class="breadcrumb-item active" aria-current="page">@lang('website.Login')</li>
											</ol>
										</nav>
							</div>
					</div>
				<div class="col-12 col-sm-12 col-md-6">
					@if(Session::has('loginError'))
							<div class="alert alert-danger alert-dismissible fade show" role="alert">
									<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
									<span class="sr-only">@lang('website.Error'):</span>
									{!! session('loginError') !!}

									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
							</div>
					@endif
					@if(Session::has('success'))
							<div class="alert alert-success alert-dismissible fade show" role="alert">
									<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
									<span class="sr-only">@lang('website.success'):</span>
									{!! session('success') !!}

									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
							</div>
					@endif
						<div class="col-12"><h4 class="heading login-heading">@lang('website.Login')</h4></div>
					<div class="registration-process">

						<form  enctype="multipart/form-data"   action="{{ URL::to('/process-login')}}" method="post">
							{{csrf_field()}}
								<div class="from-group mb-3">
									<div class="col-12"> <label for="inlineFormInputGroup">@lang('website.Email')</label></div>
									<div class="input-group col-12">
										<div class="input-group-prepend">
											<div class="input-group-text"><i class="fas fa-at"></i></div>
										</div>
										<input type="email" name="email" id="email" placeholder="@lang('website.Please enter your valid email address')"class="form-control email-validate">
										<span class="help-block" hidden>@lang('website.Please enter your valid email address')</span>
								 </div>
								</div>
								<div class="from-group mb-3">
										<div class="col-12"> <label for="inlineFormInputGroup">@lang('website.Password')</label></div>
										<div class="input-group col-12">
											<div class="input-group-prepend">
												<div class="input-group-text"><i class="fas fa-lock"></i></div>
											</div>
											<input type="password" name="password" id="password" placeholder="Please Enter Password" class="form-control field-validate">
											<span class="help-block" hidden>@lang('website.This field is required')</span>										</div>
									</div>
									<div class="col-12 col-sm-12">
											<button type="submit" class="btn btn-secondary">@lang('website.Login')</button>
										<a href="{{ URL::to('/forgotPassword')}}" class="btn btn-link">@lang('website.Forgot Password')</a>
									</div>
						</form>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-6">
						<div class="col-12"><h4 class="heading login-heading">NEW CUSTOMER</h4></div>
						<div class="registration-process">
							@if( count($errors) > 0)
								@foreach($errors->all() as $error)
									<div class="alert alert-danger alert-dismissible fade show" role="alert">
																	<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
																	<span class="sr-only">@lang('website.Error'):</span>
																	{{ $error }}
																	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
																			<span aria-hidden="true">&times;</span>
																	</button>
									</div>
								 @endforeach
							@endif

							@if(Session::has('error'))
								<div class="alert alert-danger alert-dismissible fade show" role="alert">
										<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
										<span class="sr-only">@lang('website.Error'):</span>
										{!! session('error') !!}

																<button type="button" class="close" data-dismiss="alert" aria-label="Close">
																			<span aria-hidden="true">&times;</span>
																	</button>
								</div>
							@endif

							@if(Session::has('success'))
								<div class="alert alert-success alert-dismissible fade show" role="alert">
										<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
										<span class="sr-only">@lang('website.Success'):</span>
										{!! session('success') !!}

																<button type="button" class="close" data-dismiss="alert" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																</button>
								</div>
							@endif

							<form name="signup" enctype="multipart/form-data"  action="{{ URL::to('/signupProcess')}}" method="post">
								{{csrf_field()}}
								<div class="from-group mb-3">
									<div class="col-12"> <label for="inlineFormInputGroup"><strong style="color: red;">*</strong>@lang('website.First Name')</label></div>
									<div class="input-group col-12">
										<div class="input-group-prepend">
												<div class="input-group-text"><i class="fas fa-signature"></i></div>
										</div>
										<input  name="firstName" type="text" class="form-control field-validate" id="firstName" placeholder="@lang('website.Please enter your first name')" value="{{ old('firstName') }}">
										<span class="help-block" hidden>@lang('website.Please enter your first name')</span>
									</div>
								</div>
								<div class="from-group mb-3">
									<div class="col-12"> <label for="inlineFormInputGroup"><strong style="color: red;">*</strong>@lang('website.Last Name')</label></div>
									<div class="input-group col-12">
										<div class="input-group-prepend">
												<div class="input-group-text"><i class="fas fa-signature"></i></div>
										</div>
										<input  name="lastName" type="text" class="form-control field-validate field-validate" id="lastName" placeholder="@lang('website.Please enter your first name')" value="{{ old('lastName') }}">
										<span class="help-block" hidden>@lang('website.Please enter your last name')</span>
									</div>
								</div>
									<div class="from-group mb-3">
										<div class="col-12"> <label for="inlineFormInputGroup"><strong style="color: red;">*</strong>@lang('website.Email Adrress')</label></div>
										<div class="input-group col-12">
											<div class="input-group-prepend">
													<div class="input-group-text"><i class="fas fa-at"></i></div>
											</div>
											<input  name="email" type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter Your Email or Username" value="{{ old('email') }}">
											<span class="help-block" hidden>@lang('website.Please enter your valid email address')</span>
										</div>
									</div>
									<div class="from-group mb-3">
											<div class="col-12"> <label for="inlineFormInputGroup"><strong style="color: red;">*</strong>@lang('website.Password')</label></div>
											<div class="input-group col-12">
												<div class="input-group-prepend">
														<div class="input-group-text"><i class="fas fa-lock"></i></div>
												</div>
												<input name="password" id="password" type="password" class="form-control"  placeholder="@lang('website.Please enter your password')">
												<span class="help-block" hidden>@lang('website.Please enter your password')</span>

											</div>
										</div>
										<div class="from-group mb-3">
												<div class="col-12"> <label for="inlineFormInputGroup"><strong style="color: red;">*</strong>@lang('website.Confirm Password')</label></div>
												<div class="input-group col-12">
													<div class="input-group-prepend">
															<div class="input-group-text"><i class="fas fa-lock"></i></div>
													</div>
													<input type="password" class="form-control" id="re_password" name="re_password" placeholder="Enter Your Password">
													<span class="help-block" hidden>@lang('website.Please re-enter your password')</span>
													<span class="help-block" hidden>@lang('website.Password does not match the confirm password')</span>
												</div>
											</div>
											<div class="from-group mb-3">
												<div class="col-12" > <label for="inlineFormInputGroup"><strong  style="color: red;">*</strong>@lang('website.Gender')</label></div>
												<div class="input-group col-12">
													<div class="input-group-prepend">
															<div class="input-group-text"><i class="fas fa-signature"></i></div>
													</div>
													<select class="form-control field-validate" name="gender" id="inlineFormCustomSelect">
														<option selected value="">@lang('website.Choose...')</option>
														<option value="0" @if(!empty(old('gender')) and old('gender')==0) selected @endif)>@lang('website.Male')</option>
														<option value="1" @if(!empty(old('gender')) and old('gender')==1) selected @endif>@lang('website.Female')</option>
													</select>
													<span class="help-block" hidden>@lang('website.Please select your gender')</span>
												</div>
											</div>
											<div class="from-group mb-3">
													<div class="input-group col-12">
														<input required style="margin:4px;"class="form-controlt checkbox-validate" type="checkbox">
														@lang('website.Creating an account means you are okay with our')  @if(!empty($result['commonContent']['pages'][3]->slug))&nbsp;<a href="{{ URL::to('/page?name='.$result['commonContent']['pages'][3]->slug)}}">@endif @lang('website.Terms and Services')@if(!empty($result['commonContent']['pages'][3]->slug))</a>@endif, @if(!empty($result['commonContent']['pages'][1]->slug))<a href="{{ URL::to('/page?name='.$result['commonContent']['pages'][1]->slug)}}">@endif @lang('website.Privacy Policy')@if(!empty($result['commonContent']['pages'][1]->slug))</a> @endif &nbsp; and &nbsp; @if(!empty($result['commonContent']['pages'][2]->slug))<a href="{{ URL::to('/page?name='.$result['commonContent']['pages'][2]->slug)}}">@endif @lang('website.Refund Policy') @if(!empty($result['commonContent']['pages'][3]->slug))</a>@endif.
														<span class="help-block" hidden>@lang('website.Please accept our terms and conditions')</span>
													</div>
												</div>
										<div class="col-12 col-sm-12">
												<button type="submit" class="btn btn-primary">Create an Account</button>

										</div>
							</form>
						</div>
				</div>
				<div class="col-12 col-sm-12 my-5">
						<div class="registration-socials">
					<div class="row align-items-center justify-content-between">
									<div class="col-12 col-sm-6">
											Access Your Account Through Your Social Networks
									</div>
									<div class="col-12 col-sm-6 right">
										  @if($result['commonContent']['setting'][61]->value==1)
											<a href="login/google" type="button" class="btn btn-google"><i class="fab fa-google-plus-g"></i>&nbsp;Google</a>
											@endif
											@if($result['commonContent']['setting'][2]->value==1)
											<a  href="login/facebook" type="button" class="btn btn-facebook"><i class="fab fa-facebook-f"></i>&nbsp;Facebook</a>
											@endif
									</div>
							</div>
					</div>
				</div>
			</div>

	</div>
</section>


@endsection
