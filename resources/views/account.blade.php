@extends('layouts.master')
@section('title')
Account
@endsection
@section('content')
	<section class="row new-post">
		<div class="col-md-6 col-md-offset-3">
			<header>
				<h3>
					Your Account
				</h3>
			</header>
			<form action=" {{ route('account.save') }} " method="post" enctype="multipart/form-data">
			<div class="form-group">
                <label for="first-name">Your First Name</label>
                <input class="form-control" type="text" name="first_name" id="first_name" value="{{ $user->first_name }}">
            </div>

				<div class="form-group">
					 <label for="Image">Image</label>
					 <input class="form-control" type="file" name="image" id="image" value="">
				</div>
				<button type="submit" class="btn btn-primary">Save Account</button>
				<input type="hidden" name="_token" value="{{ Session::token() }}">
			</form>
		</div>	
	</section>

	@if(Storage::disk('local')->has($user->first_name. '-' .$user->id. '.jpg'))
	<section class="row new-post">
		<div class="col-md-6 col-md-offset-3">
			<img src="{{ route('account.image', ['filename' => $user->first_name. '-' .$user->id.  '.jpg']) }}"  alt="asdfsad" class="img-responsive"/>
		</div>	
	</section>
	@endif


@endsection