<!DOCTYPE html>
<html>
<head>
    <title>Turbine UI Core</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

    @turbineUI
</head>

<body class="bg-gray-100">

<div class="container mx-auto p-6">

    @yield('content')

</div>

</body>
</html>