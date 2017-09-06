@extends('main')

@section('title', '| Create Post')
@endsection

@section('content')

	<div class="row">
		<div class="col-md-8 offset-md-2">
			{{-- <div class="title">Contact<br />Brad Weldy Marketing</div> --}}
			<h1>Create New Post</h1>
			<hr />
			
			{{-- <form>
				<div class="form-group">
					<label name="email">Email:</label>
					<input id="email" name="email" class="form-control">
				</div>
				<div class="form-group">
					<label name="subject">Subject:</label>
					<input id="subject" name="subject" class="form-control">
				</div>
				<div class="form-group">
					<label name="message">Message:</label>
					<input id="message" name="message" class="form-control">
				</div>

				<input type="submit" value="Send Message" class="btn btn-success">
			</form> --}}
			{{-- Collective\Html\HtmlServiceProvider::open --}}

			{!! Form::open(array('route' => 'posts.store')) !!}
			    
			    <?php echo Form::label('title', 'Title:'); ?>
			    <?php echo Form::text('title', null, array('class' => 'form-control')); ?>

			    <?php echo Form::label('body', 'Post Body:'); ?>
			    <?php echo Form::textarea('body', null, array('class' => 'form-control')); ?>

			    <?php echo Form::submit('Create Post'); ?>
			    {{-- {{ Form::label('title', 'Title:') }}
			    {{ Form::text('title', null, array('class' => 'form-control')) }} --}}

			{!! Form::close() !!}
			
		</div>

		{{-- <div class="title">Contact<br />Brad Weldy Marketing</div>
		<div class="quote">{{ Inspiring::quote() }}</div> --}}
	</div>

@endsection
