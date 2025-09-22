<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
   <h1>Hi, I am  {{ auth()->user()->first_name ?? 'Guest' }}!</h1>

   <!-- Logout Button -->
   <form action="{{ route('logout') }}" method="POST">
       @csrf  <!-- CSRF Token for security -->
       <button type="submit">Logout</button>
   </form>
</body>
</html>
