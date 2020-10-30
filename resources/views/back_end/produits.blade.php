@extends('layouts.layout')
@section('content')
<!-- start: page -->

<!-- table -->
<header class="page-header">
    <h2 class="pull-left">Produits</h2>
</header>
<section class="panel">
    <div class="panel-body">
        <a class="btn btn-primary" href="/admin/produits/create"><i class="fas fa-plus-circle"></i> Ajouter</a>
        <hr>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table #dataTable class="table table-bordered table-striped mb-none" id="datatable-default">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Image</th>
                        <th>Designation</th>
                        <th class="hidden-phone">Qte Stock</th>
                        <th class="hidden-phone">Prix avant</th>
                        <th class="hidden-phone">Prix Vente</th>
                        <th class="center hidden-phone">Action</th>
                    </tr>
                </thead>
            <tbody>

            @foreach ($produits as $produit)
                <tr class="gradeX">
                    <td>{{$produit->id}}</td>
                    <td><img width="50px" height="50px" src="{{asset('storage/'.$produit->image1)}}" alt="image" /></td>
                    <td>{{$produit->designation}}</td>
                    <td>{{$produit->qnt_stock}}</td>
                    <td>{{$produit->prix_avant}}</td>
                    <td>{{$produit->prix_vente}}</td>
                    <td class="center hidden-phone">
{{--                        <form action="{{url('/produits/'.$produit->id)}}" method="post" class="form-delete-produit{{$produit->id}}">--}}
{{--                            {{csrf_field()}}--}}
{{--                            {{method_field('DELETE')}}--}}
                            <i class="fas fa-file text-info"></i>
{{--                            <span class="om-tab">|</span>--}}
{{--                        <a href="{{url('produits/'.$produit->id.'/edit')}}"><i class="fas fa-edit text-primary"></i></a>--}}
                            <span class="om-tab">|</span>
                            <a class="delete-confirm" href="/admin/produits/delete/{{$produit->id}}" ><i class="fas fa-trash-alt text-danger"></i></a>
{{--                        </form>--}}
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
</section>
<script>
    $('.delete-confirm').on('click', function (event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Êtes-vous sûr?',
            text: 'Cet enregistrement et ses détails seront définitivement supprimés!',
            confirmButtonColor: "#DD6B55",
            icon: 'warning',
            buttons: ["annuler", "supprimer"],
        }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
    });
</script>
<!-- end: page -->
@endsection


