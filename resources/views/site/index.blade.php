<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tickets</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{ asset('css/ticket.css') }}">
    <!--===============================================================================================-->
</head>

<body>
    <div class="limiter">
        <div class="container-table100">
            <div class="wrap-table100">
                <h1 class="title__header">Tickets Pendentes</h1>
                <div class="table100">
                    <table>
                        <thead>
                            <tr class="table100-head">
                                <th class="column1">Descrição</th>
                                <th class="column2">Valor Previsto</th>
                                <th class="column3">Responsável</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pendentes as $pendente)
                                <tr>
                                    <td class="column1">{{ $pendente->descricao }}</td>
                                    <td class="column2">{{ $pendente->valorPrevisto }}€</td>
                                    <td class="column3">{{ $pendente->emailResponsavel }}</td>
                                </tr>
                            @endforeach
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{-- <p><a href="{{ route('app.sair') }}">LOGOUT</a></p> --}}


    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->

</body>

</html>
