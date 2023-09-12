@extends('main.layout')

@section('content')
<div class="row">
  <div class="clo-md-12">

    @if (session()->has('success'))
    <div class="alert alert-success">
      <p>{{session()->get('success')}}</p>
    </div>
    @endif

    <form action="{{route('main.register')}}" method="POST" enctype="multipart/form-data">
      @csrf

			<div class="container">
				<div class="row">
					<div class="form-group col-md-6">
						<label for="name" class="mb-2 mt-2"><b>Name:</b></label>
						<input class="form-control @error('name') is-invalid @enderror" type="text" name="name" placeholder="Name" />
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-6">
						<label for="email" class="mb-2 mt-2"><b>Email:</b></label>
						<input class="form-control @error('email') is-invalid @enderror" type="text" name="email" placeholder="Email" />
					</div>
				</div>
					<div class="row">
					<div class="form-group col-md-6">
						<label for="form-label" class="mb-2 mt-2"><b>Image:</b></label>
						<input class="form-control @error('image') is-invalid @enderror" type="file" name="image" placeholder="Image.." />
					</div>
				</div>
					<div class="row">
					<div class="form-group col-md-6">
						<label for="user_type" class="mb-2 mt-2"><b>User Type:</b></label>
						<input class="form-control @error('user_type') is-invalid @enderror" type="text" name="user_type" placeholder="User Type" />
					</div>
				</div>
					<div class="row">
					<div class="form-group col-md-6">
						<label for="password" class="mb-2 mt-2"><b>Password:</b></label>
						<input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" />
					</div>
				</div>
					<div class="mt-3">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>
    </form>
  </div>
</div>
@endsection
