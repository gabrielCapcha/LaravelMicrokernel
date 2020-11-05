@extends('layouts.default')
@section('content')
<table border=1 class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">N° DOC</th>
            <th scope="col">FECHA</th>
            <th scope="col">RUC/DNI CLIENTE</th>
            <th scope="col">PAGO Y MONTO</th>
            <th scope="col">OPCIONES</th>
        </tr>
    </thead>
    <tbody>
        @foreach($jsonResponse as $sale)
        <tr>
            <td>{{ $sale['ticket'] }}</td>
            <td>{{ $sale['created_at'] }}</td>
            <td>{{ $sale['data_client'][0]['client_names'] }} {{ $sale['data_client'][0]['client_lastnames'] }} - {{ $sale['data_client'][0]['document'] }}</td>
            <td>S/. {{ $sale['amount'] }} <br> {{ $sale['type_payment'] == 1 ? 'EFECTIVO' : 'VISA' }}</td>
            <td>
                <div>
                    <button type="button" class="btn btn-primary btn-sm">Ver</button>
                    <button type="button" class="btn btn-danger btn-sm">Anular</button>
                    @if($sale['flag_pdf'] == 1)
                    <button type="button" onClick="download({{ $sale['id'] }});" class="btn btn-success btn-sm">PDF</button>
                    @endif
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@stop