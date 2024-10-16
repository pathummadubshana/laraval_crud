<!DOCTYPE html>
<html lang="en">
<head>
  <title>Index</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body>

<div class="container">

  <!-- Trigger the modal with a button -->
  <a type="button" href="/create" class="btn btn-info btn-lg" style="margin-top:5%" id="myBtn">Add detils</a>

  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">email</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($crud as $item)
      <tr>
        <td>{{ $item['id'] }}</td>
        <td>{{ $item['fname'] }}</td>
        <td>{{ $item['lname'] }}</td>
        <td>{{ $item['email'] }}</td>

        <td>
            <div class="d-inline-flex ">

                <a href="/show/{{ $item->id }}" class="p-2">
                    <button type="button" class="btn btn-primary"
                    >Show</button>
                </a>


                <a href="/edit/{{ $item->id }}" class="p-2">
                    <button type="button" class="btn btn-secondary">Edit</button>
                </a>
                <form action="/delete/{{ $item->id }}" method="POST" class="p-2">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>




            </div>

        </td>
      </tr>

      @endforeach

    </tbody>
  </table>



</div>


</body>
</html>
