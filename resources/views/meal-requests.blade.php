<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('custom.css') }}">
    <title>Web Design</title>
</head>

<body>
    <!-- ********************** nav ************************ -->
    <nav>
        <div class="nav-bar">
            <a href="/">Home</a>
            <a href="{{ route('meals.index') }}">Requests</a>
        </div>
        <div class="logo">
            Web
        </div>
    </nav>
    <!-- ********************** header ************************ -->

    <header>
    </header>

    <!-- ********************** main ************************ -->
    <main>
      <table class="table table-bordered">
        <tr class="table-info">
            <th>الكمية </th>
            <th>اسم الوجبة</th>
        </tr>
        @foreach ($mealRequests as $mealRequest)
        <tr>
            <td>{{ $mealRequest->quantity }}</td>
            <td>{{ $mealRequest->meal->name }}</td>
        </tr>
        @endforeach
      </table>
    </main>
    <!-- ********************** footer ************************ -->
    <footer>
        <p> &copy desinged by Makani</p>
    </footer>
</body>

</html>