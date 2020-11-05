@extends('layouts.default')
@section('content')
<table border=1 class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Módulo</th>
            <th scope="col">Descripción</th>
            <th scope="col">Opciones</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Módulo de ventas</td>
            <td>Este módulo está orientado a las ventas realizadas</td>
            <td>
                <div>
                    <button type="button" class="btn btn-success btn-sm">Instalar</button>
                    <button type="button" class="btn btn-primary btn-sm">Ver</button>
                    <button type="button" class="btn btn-danger btn-sm">Eliminar</button>
                </div>
            </td>
        </tr>
        <tr>
            <td>Plugin para descargar PDF</td>
            <td>Este plugin sirve para descargar una venta en formato PDF A4</td>
            <td>
                <div>
                    <button type="button" onClick="installModule('printPdf');" value="printPdf" class="btn btn-success btn-sm">Instalar</button>
                    <button type="button" class="btn btn-primary btn-sm" onClick="location.href='/products'" type="button">Ver</button>
                    <button type="button" class="btn btn-danger btn-sm">Eliminar</button>
                </div>
            </td>
        </tr>
        <tr>
            <td>Módulo de reportes</td>
            <td>Este módulo está diseñado para poder mostrar el resúmen de tus reportes</td>
            <td>
                <div>
                    <button type="button" class="btn btn-success btn-sm">Instalar</button>
                    <button type="button" class="btn btn-primary btn-sm">Ver</button>
                    <button type="button" class="btn btn-danger btn-sm">Eliminar</button>
                </div>
            </td>
        </tr>
        <tr>
            <td>Módulo de estadísticas</td>
            <td>Este módulo está diseñado para poder ver gráficos estadísticos</td>
            <td>
                <div>
                    <button type="button" class="btn btn-success btn-sm">Instalar</button>
                    <button type="button" class="btn btn-primary btn-sm">Ver</button>
                    <button type="button" class="btn btn-danger btn-sm">Eliminar</button>
                </div>
            </td>
        </tr>
        <tr>
            <td>Módulo de cotizaciones</td>
            <td>Este módulo está orientado a realizar cotizaciones</td>
            <td>
                <div>
                    <button type="button" class="btn btn-success btn-sm">Instalar</button>
                    <button type="button" class="btn btn-primary btn-sm">Ver</button>
                    <button type="button" class="btn btn-danger btn-sm">Eliminar</button>
                </div>
            </td>
        </tr>
    </tbody>
</table>

@stop