<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
    <div class="sidebar">


        <a href="/km-anos-luz" class="{{ request()->is('km-anos-luz') ? 'active' : '' }}">Km → Anos-Luz</a>
        <a href="/anos-luz-km" class="{{ request()->is('anos-luz-km') ? 'active' : '' }}">Anos-Luz → Km</a>
    </div>
    <div class="content">
        <h2>Projeto PHP Netcon - Conversor de Anos-luz/KM</h2>
        <p>Vinicius José da Silva - 20 anos</p>
        @yield('content')
        <img src="{{ asset('images/logo.png') }}" alt="Descrição da imagem">


        <!-- Modal -->
<div id="resultModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <p id="modalMessage">O resultado aparecerá aqui</p>
    </div>
</div>

    </div>
</body>
</html>
