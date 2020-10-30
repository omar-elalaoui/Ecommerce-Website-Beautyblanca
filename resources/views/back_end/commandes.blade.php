@extends('layouts.layout')
@section('content')
<!-- start: page -->
<header class="page-header">
    <h2 class="pull-left">Commandes</h2>
</header>
<!-- Modal -->


@foreach ($orders as $order)
    <div id="commande_{{$order->id}}" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <section class="panel panel-warning">
                        <header class="panel-heading">
                            <h2 class="panel-title">Commande</h2>
                        </header>
                        <div class="panel-body">
                            <table class="table table-striped">
                                <tbody>
                                <tr>
                                    <td>Nom & Prénom</td>
                                    <td>{{$order->name}}</td>
                                </tr>
                                <tr>
                                    <td>Telephone</td>
                                    <td>{{$order->tel}}</td>
                                </tr>
                                <tr>
                                    <td>Adresse</td>
                                    <td>{{$order->address}}</td>
                                </tr>
                                <tr>
                                    <td>Date & Heure</td>
                                    <td>{{ $order->created_at->format('d-m-Y || H:i') }}</td>
                                </tr>
                                <tr>
                                    <td >Produit</td>
                                    <td>
                                        @foreach ($order->cart->items as $item)
                                            {{$item['item']->designation}} <span class="text-primary">&ensp;x{{$item['qty']}}</span> | {{$item['item']->prix_vente}} DH
                                            <br>
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td>Prix Total: </td>
                                    <td style="color: #005cbf">{{$order->cart->totalPrice}} DH</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-warning modal-confirm"><i class="fas fa-check"></i> Ajouter</button>
                    <button class="btn btn-default" data-dismiss="modal"><i class="fas fa-times"></i> Annuler</button>
                </div>
            </div>
        </div>
    </div>
@endforeach
<!-- table -->
<section class="panel">
    <header class="panel-heading">
        <div class="panel-actions">
            <a href="#" class="fa fa-caret-down"></a>
            <a href="#" class="fa fa-times"></a>
        </div>

        <h2 class="panel-title">Commandes</h2>
    </header>
    <div class="panel-body">
        <table #dataTable class="table table-bordered table-striped mb-none" id="datatable-default">
            <thead>
            <tr>
                <th style="width: 30px; font-weight: bold">#</th>
                <th>Nom & prénom</th>
                <th>Telephone</th>
                <th>Adresse</th>
                <th class="hidden-phone">Date & Heure</th>
                <th class="center hidden-phone">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($orders as $order)
                <tr class="gradeX {{$order->status}}_pp" >
                    <td>{{$order->id}}</td>
                    <td>{{$order->name}}</td>
                    <td>{{$order->tel}}</td>
                    <td>{{$order->address}}</td>
                    <td>{{ $order->created_at->format('d-m-Y || H:i') }}</td>
                    <td class="center hidden-phone">
                        <a data-toggle="modal" data-target="#commande_{{$order->id}}"><i class="fas fa-file text-primary"></i></a>&ensp;|&ensp;<i class="fas fa-trash-alt text-danger"></i>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</section>
<!-- end: page -->
@endsection
