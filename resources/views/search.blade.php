<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>InfoHub</title>
  <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    body {
      background-color: #f4f7fa;
      font-family: 'Arial', sans-serif;
    }
    h1 {
      color: #343a40;
      font-weight: 700;
    }
    .search_box input {
      width: 100%;
      max-width: 600px;
      padding: 12px 20px;
      border-radius: 50px;
      border: 2px solid #ced4da;
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
      font-size: 1.1rem;
      outline: none;
      transition: all 0.3s ease;
    }
    .search_box input:focus {
      border-color: #5c636a;
      box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.15);
    }
    .card {
      border: none;
      border-radius: 15px;
      transition: transform 0.2s, box-shadow 0.2s;
    }
    .card:hover {
      transform: translateY(-10px);
      box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
    }
    .card-body {
      padding: 25px;
    }
    .card-title {
      font-size: 1.5rem;
      font-weight: 600;
      color: #495057;
      margin-bottom: 15px;
    }
    .card-text {
      font-size: 1.1rem;
      margin-bottom: 10px;
      color: #6c757d;
    }
  </style>
</head>
<body>
  <div class="container text-center pt-5">
    <h1 class="display-4 mb-4">InfoHub - Search Users</h1>
    <div class="search_box mb-5">
      <input type="text" name="search" id="search" placeholder="Search by Name/Department/Designation">
    </div>
    <div class="row justify-content-center">
      @foreach($users as $user)
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title"><b> {{$user->name}}</b></h5>
            <p class="card-text">{{$user->designation->name}}</p>
            <p class="card-text">{{$user->department->name}}</p>
            <p class="card-text">{{$user->phone_number}}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  <script>
    $(document).ready(function(){
      $('#search').on('keyup', function(){
        var value = $(this).val().toLowerCase();
        $('.card').filter(function(){
          if($(this).text().toLowerCase().indexOf(value)>-1){
            $(this).closest('.col-md-4').show();
          } else {
            $(this).closest('.col-md-4').hide();
          }
        });
      });
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
