@extends('main.layout')

@section('content')
<div class="row">
  <div class="clo-md-12">

    @if ( session()->has('success') )
    <div class="alert alert-success block">
      <p>{{ session()->get('success') }}</p>
    </div>
    @endif

    @if ( session()->has('error') )
    <div class="alert alert-danger">
      <p>{{ session()->get('error') }}</p>
    </div>
    @endif

    <form action="{{route('main.login')}}" method="POST">
      @csrf

			<div class="container">
				<div class="row">
					<div class="form-group col-md-6">
						<label for="email" class="mb-2 mt-2"><b>Email:</b></label>
						<input class="form-control @error('email') is-invalid @enderror" type="text" name="email" placeholder="Email" />
					</div>
					<div class="row">
					<div class="form-group col-md-6">
						<label for="password" class="mb-2 mt-2"><b>Password:</b></label>
						<input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" />
					</div>
				</div>
					<div class="mt-3">
						<button type="submit" class="btn btn-primary">Login</button>
					</div>
				</div>
    </form>
  </div>
</div>
@endsection
