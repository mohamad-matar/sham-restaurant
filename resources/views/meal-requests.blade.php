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
        <h1 class="text-center text-white my-3">الطلبات المعلقة</h1>
      <table class="table table-bordered">
        <tr class="table-info">
            <th>الكمية </th>
            <th>اسم الوجبة</th>
            <th>ايميل الزبون</th>
            <th>وقت الطلب</th>
        </tr>
        @foreach ($serviceRequests as $serviceRequest)
        <tr>
            <td>{{ $serviceRequest->quantity }}</td>
            <td>{{ $serviceRequest->service->name_ar }}</td>
            <td>{{ $serviceRequest->email }}</td>
            <td>{{ $serviceRequest->created_at }}</td>
            
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