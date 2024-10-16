<!DOCTYPE html>
<html lang="en">
<head>
  <title>Create</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body>

<div class="container">


  <a type="button" href="/create" class="btn btn-info btn-lg" style="margin-top:5%" id="myBtn">Add detils</a>

  <form  method="POST" action="/store">
    @csrf

    <div class="form-group">
      <label for="email">Email address</label>
      <input type="email" name='email' class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">Well never share your email with anyone else.</small>

    </div>
    <div class="form-group">
      <label for="firstname">First name</label>
      <input type="text" class="form-control" name="fname" id="fname" placeholder="First name">

    </div>
    <div class="form-group">
        <label for="lastname">Last name</label>
        <input type="text" class="form-control" name="lname" id="lname" placeholder="lasts name">

      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>



</div>


</body>
</html>
