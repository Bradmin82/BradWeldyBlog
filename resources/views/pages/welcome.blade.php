@extends('main')

@section('title', '| Homepage')
@endsection

@section('stylesheets')
	{{-- <link rel="stylesheet" type="text/css" href="styles.css"> --}}
		<style>
		</style>
@endsection

@section('content')

			<div class="row">
				<div class="col-md-12">
					<div class="jumbotron">
						<h1>Brad Weldy Marketing</h1>
						<p class="lead">Thanks for visiting pilgrim.</p>
						<p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
					</div>
				</div>
			</div><!-- end of header .row -->

			<div class="row">
				<div class="col-md-8">
					<div class="post">
						<h3>Post Title</h3>
						<p>Lorem ipsum dolor sit amet</p>
						<a href="#" class="btn btn-primary">Read More</a>
					</div>
					<hr>
					<div class="post">
						<h3>Post Title</h3>
						<p>Lorem ipsum dolor sit amet</p>
						<a href="#" class="btn btn-primary">Read More</a>
					</div>
					<hr>
					<div class="post">
						<h3>Post Title</h3>
						<p>Lorem ipsum dolor sit amet</p>
						<a href="#" class="btn btn-primary">Read More</a>
					</div>
					<hr>
					<div class="post">
						<h3>Post Title</h3>
						<p>Lorem ipsum dolor sit amet</p>
						<a href="#" class="btn btn-primary">Read More</a>
					</div>
					<hr>
				</div>
				<div class="col-md-3 col-md-offset-1">
					<h2>Sidebar</h2>
				</div>
			</div>	
			{{-- <div class="content">
				<div class="title">Brad Weldy Marketing</div>
				<div class="quote">{{ Inspiring::quote() }}</div>
			</div> --}}

@endsection


