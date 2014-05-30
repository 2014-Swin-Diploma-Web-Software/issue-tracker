@extends('layouts.default')

@section('content')
	<div class="col-md-4"></div>

	<form class="form-horizontal col-md-4">
		<fieldset>
			<legend>Please registe</legend>
			<div class="control-group">
				<label class="control-label" for="username">User Name</label>
				<div class="controls">
					<input id="username" type="text">
					<p class="help-block">Please enter registration name.</p>
				</div>
			</div>

			<div class="control-group">
				<label class="control-lable" for="email">Email</label>
				<div class="controls">
					<input id="email" type="email">
					<p class="help-block">Please enter email</p>
				</div>
			</div>

			<div class="control-group">
				<label class="control-lable" for="password">Password</label>
				<div class="controls">
					<input id="password" type="password">
					<p class="help-block">Please enter password</p>
				</div>
			</div>
		</fieldset>

		<div class="form-actions">
		<button type="submit" class="btn btn-primary"><i class="icon-comment"></i> Registe</button>
		</div>
	</form>

	<div class="col-md-4"></div>
@stop