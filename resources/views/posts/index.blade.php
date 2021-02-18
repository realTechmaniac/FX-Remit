@extends('main')


@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h1 class="text-dark">All Posts</h1>
			</div>
			<div class="col-md-2">
				<a href="{{route('posts.create')}}" class="btn btn-sm btn-primary btn-h1-spacing">Create New Post</a>
			</div>
			<hr>
			<div class="col-md-12">
				<hr>
			</div>

			<div class="row">
				<div class="col-md-12">
					<table class="table">
						<thead>
							<th></th>
							<th>Title</th>
							<th>Posted by</th>
							<th>Body</th>
							<th>Created At</th>
						</thead>

						<tbody>
							
							@foreach($posts as $post)

								<tr>
									<th>{{$post->id}}</th>
									<td>{{$post->title}}</td>
									<td>{{$post->post_by}}</td>
									<td>{{substr($post->body,0,50)}}{{strlen($post->body)>50 ? '...' : ''}}</td>
									<td>{{date('M j, Y', strtotime($post->created_at))}}</td>
									<td><a href="{{route('posts.show', $post->id )}}" class="btn btn-default mb-2">View</a><a href="{{route('posts.edit', $post->id)}}" class="btn btn-default">Edit</a></td>
								</tr>

							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

@endsection 