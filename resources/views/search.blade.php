<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>InfoHub</title>
  <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <div class="container text-center pt-5">
    <h1 class="display-4 mb-4"> Infohub - Search Users</h1>
    <div class="search_box mb-5">
      <input type="text" name="search" id="search" placeholder="Search by Name/Department/Designation">
    </div>
    <div class="row justify-content-center ">
      @foreach($users as $user)
      <div class="col-md-4 mb-4 data_card">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title"><b>Name:</b> {{$user->name}}</h5>
            <p class="card-text"><b>Designation:</b> {{$user->designation->name}}</p>
            <p class="card-text"><b>Department:</b> {{$user->department->name}}</p>
            <p class="card-text"><b>Phone:</b> {{$user->phone_number}}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  {{-- <h1>Search Users</h1>
  <input type="text" name="search" id="search" placeholder="Search by Name/Department/Designation">
  <table>
    <thead>
      <tr>
        <th>Name</th>
        <th>Department</th>
        <th>Designation</th>
        <th>Phone Number</th>
      </tr>
    </thead>
    <tbody id="userTable">
      @foreach ($users as $user)
      <tr>
        <td>{{$user->name}}</td>
        <td>{{$user->Department->name}}</td>
        <td>{{$user->Designation->name}}</td>
        <td>{{$user->phone_number}}</td>
      </tr>
      @endforeach
    </tbody>
  </table> --}}
  <script>
    $(document).ready(function(){
      $('#search').on('keyup', function(){
        var value = $(this).val().toLowerCase();
        $('.card').filter(function(){
          $(this).toggle($(this).text().toLowerCase().indexOf(value)>-1)
        });
      });
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>