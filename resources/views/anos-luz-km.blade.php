@extends('layout')

@section('title', 'Anos-Luz para Km')

@section('content')
    <h1>Conversão: Anos-Luz para Km</h1>
    <form id="formAnosLuz">
        <label for="anosLuz">Anos-Luz:</label>
        <input type="number" id="anosLuz">
        <div class="enviar">
            <button type="button" onclick="converter()">Converter</button>
        </div>
    </form>
    <div id="resultado" style="margin-top: 20px;"></div>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>

        function openModal(message) {
            // Atualiza a mensagem do modal
            document.getElementById('modalMessage').textContent = message;

            // Exibe o modal
            document.getElementById('resultModal').style.display = 'block';
        }

        function closeModal() {
            // Esconde o modal
            document.getElementById('resultModal').style.display = 'none';
        }

        function converter() {
            const anosLuz = document.getElementById('anosLuz').value;

            if (anosLuz <= 0) {
                openModal('Por favor, insira um valor numérico positivo.');
                return;
            }

            axios.post('/api/anosLuz', { anosLuz: parseFloat(anosLuz) })
                .then(response => {
                    openModal(`Resultado: ${response.data.quilometros} quilometros`);
                })
                .catch(error => {
                    openModal('Erro ao realizar a conversão. Verifique os dados e tente novamente.');
                });
        }
    </script>
@endsection
