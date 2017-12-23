<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<style>

 

rect {
  fill: none;
  pointer-events: all;
}

circle {
  fill: none;
  stroke-width: 2px;
}

</style>
</head>
<body>
<div class="form-group row add">
    <div class="col-md-8">
        <input type="text" class="form-control" id="name" name="name"
            placeholder="Enter some name" required>
        <p class="error text-center alert alert-danger hidden"></p>
    </div>
    <div class="col-md-4">
        <button class="btn btn-primary" type="submit" id="add">
            <span class="glyphicon glyphicon-plus"></span> ADD
        </button>
    </div>
</div>
<div class="table-responsive text-center">
    <table class="table table-borderless" id="table">
        <thead>
            <tr>
                <th class="text-center">#</th>
                <th class="text-center">Name</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        @foreach($blogs as $item)
        <tr >
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td><button class="edit-modal btn btn-info" data-id="{{$item->id}}" data-name="{{$item->name}}">
             	<span class="glyphicon glyphicon-edit"></span> Edit</button>
                <button class="delete-modal btn btn-danger" data-id="{{$item->id}}" data-name="{{$item->name}}">
                 <span class="glyphicon glyphicon-trash"></span> Delete </button></td>
        </tr>
        @endforeach
    </table>
</div>
{{-- <div class="container">
	<table class="table">
	@foreach ($blogs as $blog)
		expr
	
		<tr>
			<td>{{ $blog->blog }}</td>
		</tr>
	@endforeach
	</table>
</div> --}}
	<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
{{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script> --}}
<script type="text/javascript">
	$("#add").click(function() {

 
    $.ajax({
        type: 'post',
        url: '/addItem',
        data: {
            '_token': $('input[name=_token]').val(),
            'name': $('input[name=name]').val()
        },

        success: function(data) {
            if ((data.errors)) {
                $('.error').removeClass('hidden');
                $('.error').text(data.errors.name);
            } else {
                $('.error').remove();
                $('#table').append("<tr class='item" + data.id + "'><td>" + data.id + "</td><td>" + data.name + "</td><td><button class='edit-modal btn btn-info' data-id='" + data.id + "' data-name='" + data.name + "'><span class='glyphicon glyphicon-edit'></span> Edit</button> <button class='delete-modal btn btn-danger' data-id='" + data.id + "' data-name='" + data.name + "'><span class='glyphicon glyphicon-trash'></span> Delete</button></td></tr>");
            }

        },
    });
    $('#name').val('');
});
</script>
<script src="//d3js.org/d3.v3.min.js"></script>

 
 
</body>
</html>