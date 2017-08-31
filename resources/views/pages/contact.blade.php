@extends('main')

@section('content')

	<div class="content contact">
		<div class="col-md-12">
			{{-- <div class="title">Contact<br />Brad Weldy Marketing</div> --}}
			<h1>Contact<br />Brad Weldy Marketing</h1>
			<hr />
			<form>
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
			</form>
		</div>

		{{-- <div class="title">Contact<br />Brad Weldy Marketing</div>
		<div class="quote">{{ Inspiring::quote() }}</div> --}}
	</div>

@endsection
