@extends('layout.layout') @section('content')

<div class="card">
    <div class="card-header bg-dark text-white">
        <b> {{ $title }} </b>
        <span class="pull-right"> <a href="{{ url('/customers/create') }}"> <button class="btn btn-rounded btn-outline-success"> <i class="fa fa-plus"></i> Crear</button> </a> </span>
    </div>
    <div class="card-body">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Categoría</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $customer)
                <tr>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->address }} </td>
                    <td>{{ $customer->phone_number }}</td>
                    <td>
                        <form method="DELETE" action="/customers/{{ $customer }}">
                            {{ csrf_field() }}
                            <a href="{{ url('/customers/'.$customer->id.'/edit') }} " class=" btn btn-outline-primary "> <i class="fa fa-pencil-square-o "></i> </a>
                            <button type="submit" class="btn btn-outline-danger"> <i class="fa fa-trash-o"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>Codigo</th>
                    <th>Descripción</th>
                    <th>Peso en libras</th>
                    <th>Precio de compra</th>
                    <th>Fecha de compra</th>
                    <th>Edad en meses</th>
                    <th>Acciones</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>



@endsection