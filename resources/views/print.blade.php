<!DOCTYPE html>
<html>
<head>
	<title>Form UP-SA</title>
	<body>
		<div class="panel panel-default">
			<div class="panel-heading clearfix">
				<div class="pull-right">
					<a href="{{route('index.form')}}" class="btn btn-sm btn-primary">New Form</a>
				</div>
				<table class="table">
					<tbody>
						<tr>
							<th>Name</th>
							<th>Email</th>
							<th>Gender</th>
							<th>State</th>
						</tr>
						@foreach ($forms as $form)
						<tr>
							<td>{{ $form->name }}</td>
							<td>{{ $form->email }}</td>
							<td>{{ $form->gender }}</td>
							<td>{{ $form->state }}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</body>
</html>