<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
<div class="container">
<form method="post" action="create">
{{ csrf_field() }}
 <div class="form-group">
    <label for="email">Purpose</label>
    <input type="text" class="form-control" name="purpose" value="test">
  </div>
   
    <div class="form-group">
    <label for="email">amount:</label>
    <input type="text" class="form-control" name="amount" value="500">
  </div>
   
   <div class="form-group">
    <label for="email">phone:</label>
    <input type="text" class="form-control" name="phone" value="8083274127">
  </div>
   <div class="form-group">
    <label for="email">Name:</label>
    <input type="text" class="form-control" name="name" value="ashok kumar">
  </div>
   <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" name="email" value="ashokkumar2342@gmail.com">
  </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
</body>
</html>