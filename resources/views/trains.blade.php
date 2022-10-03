<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>trains table</title>
    </head>
    <body>
        <main>
            <div class="container">
                <table>
                    <tr>
                        <th>Azienda</th>
                        <th>Partenza</th>
                        <th>Arrivo</th>
                        <th>Ora Arrivo</th>
                        <th>Codice</th>
                        <th>Rritardi/Cancellazioni</th>
                    </tr>
                    @foreach ( $trains as $train)
                        <tr>
                            <td>{{$train['azienda']}}</td>
                            <td>{{$train['stazione_di_partenza']}}</td>
                            <td>{{$train['stazione_di_arrivo']}}</td>
                            <td>{{$train['orario_di_arrivo']}}</td>
                            <td>{{$train['codice_treno']}}</td>
                            <td>
                                @if ($train['cancellato'])
                                    Treno Cancellato
                                @elseif (!$train['in_oraio'])
                                    Treno in ritardo
                                @else
                                    Treno in orario
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </main>
    </body>
</html>



