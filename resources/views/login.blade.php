@extends('layouts.main')
@section('wrapper')
<div class="card-body">
		<!-- Form inputs -->
			<center>
				<div class="row">
					<div class="col-lg-3"></div>
						<div class="col-lg-6">
							<div class="card pt-4 px-3">	
							<img src="https://www.pinclipart.com/picdir/big/183-1831001_sugar-packet-clipart.png" class="mb-4 mx-auto d-block" width="120px">							
								<h1 class="font-weight-semibold ">LOGIN SISTEM</h1>
								<div class="card-body">
									<form action="{{route('home')}}">
										<fieldset class="mb-0">
											<div class="form-group">
												<div class="form-group form-group-feedback form-group-feedback-left">
													<input type="text" class="form-control form-control-lg" placeholder="Username">
													<div class="form-control-feedback form-control-feedback-lg">
														<i class="icon-user"></i>
													</div>
												</div>
												<div class="form-group form-group-feedback form-group-feedback-left">
													<input type="password" class="form-control form-control-lg" placeholder="Password">
													<div class="form-control-feedback form-control-feedback-lg">
															<i class="icon-lock	"></i>
													</div>
												</div>
												<a href="#"><p align="right"><i class="icon-unlocked small"></i> Lupa Password</p></a>
												<button class="btn btn-primary btn-lg px-5 py-2 font-weight-bold"> 
                                                            LOGIN
                                                </button>
                                                <br><br>
											</div>
										</fieldset>
									</form>
								</div>
							</div>
						</div>
					<div class="col-lg-3"></div>
				</div>
		</center>
	</div>
@endsection