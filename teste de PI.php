<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Agendamento - Sala de Informática</title>  

    <style>

        body{
            font-family: Arial;
            background-color: #f0f0f0;
            text-align: center;
        }

        h1{
            margin-top: 30px;
        }

        .sala{
            width: 500px;
            margin: auto;
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 10px;
            margin-top: 30px;
        }

        .pc{
            background-color: green;
            color: white;
            padding: 20px;
            border-radius: 10px;
            cursor: pointer;
            transition: 0.3s;
        }

        .pc:hover{
            transform: scale(1.05);
        }

        .ocupado{
            background-color: red;
        }

    </style>
</head>
<body>

    <h1>Reserva da Sala de Informática</h1>

    <h3>Clique em um computador para reservar</h3>

    <div class="sala">

        <?php

        for($i = 1; $i <= 20; $i++){ // E SO UM EXEMPLO, NAO SEI A QUANTIDADE EXATA DOS PCS

            echo "
                <div class='pc'
                     onclick='gerenciarReserva($i)'>

                    PC $i

                </div>
            ";

        }

        ?>

    </div>              

    <script>

        // OBJETO DAS RESERVAS    // USEI OUTRAS LINGUAGENS PORQUE SE NAO IA FICAR MUITO FEIO
        let reservas = {};
                                          
        function gerenciarReserva(pc){

            // SE O PC ESTIVER OCUPADO
            if(reservas[pc]){

                let dados = reservas[pc];

                // MOSTRA OS DADOS
                let opcao = confirm(
                    "PC " + pc + " está reservado.\n\n" +
                    "Nome: " + dados.nome + "\n" +
                    "Horário: " + dados.horario + "\n\n" +
                    "Deseja remover a reserva?"
                );

                // REMOVE A RESERVA
                if(opcao){

                    delete reservas[pc];

                    atualizarTela();

                    alert("Reserva removida com sucesso.");

                }

            }else{

                // PEDE O NOME
                let nome = prompt("Digite seu nome:");

                if(nome == null || nome == ""){
                    return;
                }

                // PEDE O HORÁRIO
                let horario = prompt("Digite o horário de uso:");

                if(horario == null || horario == ""){
                    return;
                }

                // SALVA A RESERVA
                reservas[pc] = {
                    nome: nome,
                    horario: horario
                };

                atualizarTela();

                alert(
                    "Reserva realizada com sucesso!\n\n" +
                    "PC: " + pc + "\n" +
                    "Nome: " + nome + "\n" +
                    "Horário: " + horario
                );

            }

        }

        // ATUALIZA AS CORES DOS COMPUTADORES
        function atualizarTela(){

            let pcs = document.querySelectorAll(".pc");

            pcs.forEach(function(pcDiv, index){

                let numeroPC = index + 1;

                if(reservas[numeroPC]){

                    pcDiv.classList.add("ocupado");

                }else{

                    pcDiv.classList.remove("ocupado");

                }

            });

        }

    </script>

</body>
</html>