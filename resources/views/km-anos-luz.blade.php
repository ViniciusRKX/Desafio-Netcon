@extends('layout')

@section('title', 'Km para Anos-Luz')

@section('content')
    <h1>Conversão: Km para Anos-Luz</h1>
    <form id="formKm">
        <label for="quilometros">Quilômetros:</label>
        <input type="number" id="quilometros">
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
    const quilometros = document.getElementById('quilometros').value;

    if (quilometros <= 0 || quilometros === '') {
        openModal('Por favor, insira um valor numérico positivo.');
        return;
    }

    axios.post('/api/quilometros', { quilometros: parseFloat(quilometros) })
        .then(response => {
            // Exibe o resultado no modal
            openModal(`Resultado: ${response.data.anosLuz} anos-luz`);
        })
        .catch(error => {
            // Mostra mensagem de erro no modal
            openModal('Erro ao realizar a conversão. Verifique os dados e tente novamente.');
        });
}
    </script>
@endsection
