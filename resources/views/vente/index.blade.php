@extends('index')
@section('header_content')
    <h6 class="m-0 font-weight-bold text-primary">Point des ventes</h6>
@stop
@section('content')
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>ID_AUTO</th>
                    <th>DATE_VENTE</th>
                    <th>User</th>
                </tr>
            </thead>
            @foreach ($ventes as $vente)
            <tr>
                <td>{{$vente['ID_AUTO']}}</td>
                <td>{{Carbon\Carbon::parse($vente['DATE_VENTE'])->format('d/m/Y H:i:s')}}</td>
                <td>{{$vente['UserId']}}</td>  
            </tr>
            @endforeach
            </table>
        </div>
    </div>
@stop
