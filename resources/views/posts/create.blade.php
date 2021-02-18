@extends('main')

@section('stylesheets')

	<link rel="stylesheet" href="{{ asset('css/parsely.css')}}">

@endsection

@section('content')
	
	<div class="container">
		<div class="row">
		
			<div class="col-md-8  col-md-offset-2">
				
				<h2>Create New Post</h2>
				<hr>

					{!! Form::open(array('route' => 'posts.store', 'data-parsley-validate'=>'')) !!}
		    			{{ Form:: label('title', 'Title:')}}
		    			{{Form::text('title', null, array('class' => 'form-control','required'=> '', 'maxlength'=> '255'))}}

		    			{{Form:: label('body', 'Post Body:')}}
		    			{{Form::textarea('body', null, array('class' => 'form-control', 'required'=> ''))}}

		    			{{Form:: label('post_by', 'Posted By:')}}
		    			{{Form::text('post_by', null, array('class' => 'form-control', 'required'=> ''))}}

		    			{{Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block','style' => 'margin-top:20px;'))}}
		    			
					{!! Form::close() !!}
			</div>

		</div>
	</div>

@endsection


@section('script')

	<script src="{{asset('js/parsely.min.js')}}"></script>

@endsection