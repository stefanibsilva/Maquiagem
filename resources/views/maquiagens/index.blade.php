<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbmQv3Xipma34mD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2mZw1T" crossorigin="anonymous">

        <title>Lista de maquiagens</title>
    </head>
    <body>
        <div class="container">
            <h1>Lista de maquiagens</h1>

            <table class="table table-hover table-bordered table-primary">
                <tr class="table-dark">
                    <th>Nome</th>
                    <th>Valor</th>
                    <th>Descriçao</th>
                    <th></th>
                </tr>

                @foreach ($maquiagens as $maquiagem)
                    <tr>
                        <td>{{ $maquiagem->nome }}</td>
                        <td>{{ $maquiagem->valor }}</td>
                        <td>{{ $maquiagem->descrição }}</td>
                        <td></td>
                    </tr>
                @endforeach
            </table>
        </div>


    </body>
</html>
