@extends('main')

@section('content')

			<div class="content about">
				<div class="title">About <br /> {{ $fullname }} Marketing</div>
				<div class="quote">{{ Inspiring::quote() }}</div>
			</div>

@endsection
