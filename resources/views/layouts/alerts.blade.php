@if ($errors->any())

	<div class="container align-content-center">
		<div class="form-group">

			<div class="col-md-12">

				<div class="alert alert-danger text-left" role="alert">

					<ul>

						@foreach ($errors->all() as $error)

							<li> {{ $error }} </li>

						@endforeach


					</ul>

				</div>

			</div>

		</div>

	</div>

@endif