<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Toko Belanja</title>
    @livewireStyles
</head>

<body style="background-color: #635985">
        <nav class="navbar navbar-expand-lg" style="background-color: #393053">
          <div class="container-fluid">
            <a class="navbar-brand text-light" href="#">CHOOPY</a>
          </div>
        </nav>
    @livewire('shopping')
    @livewireScripts
</body>

</html>
