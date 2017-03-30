{{-- /resources/views/books/calculator.blade.php --}}
@extends('layouts.master')

@section('content')
	<div id="container">
		<h1>The Bill Splitter</h1>

		<form method="POST" action="/calculator">
			{{ csrf_field() }}

			<label for="billAmount">Bill Amount*</label>
				<input type="text" name="billAmount" id="billAmount" class="inputNum">

			<label for="numPeople">No. of People*</label>
				<input type="text" name="numPeople" id="numPeople" class="inputNum">

			
			<label for="tipIncluded">Tip Included?</label>
				<label for="tipIncluded"><input type="checkbox" name="tipIncluded" id="tipIncluded" >Yes</label>
			

			<label for="tipPercentage">Tip Percentage</label>
			<input list="tipPercentage" name="tipPercentage" id="list" class="inputNum">
				<datalist id="tipPercentage">
					<option value="10%">
					<option value="15%">
					<option value="20%">
					<option value="25%">
				</datalist>

				
				<label for="round">Round?</label>
				<label for="round"><input type="checkbox" name="round" id="round" value="yes" >Yes</label>

				<button type="submit" id="submitBtn">Calculate</button>

		</form>


		 <div id="results">
			@if($personAmount != null)
				<p>Each person will pay ${{ $personAmount }}</p>
			@endif
		</div>

		<div id="alert">
			@if(count($errors) > 0)
			    <ul>
			        @foreach ($errors->all() as $error)
			            <li>{{ $error }}</li>
			        @endforeach
			    </ul>
			@endif
		</div>
		

	</div> {{-- End Container Div --}}

@endsection