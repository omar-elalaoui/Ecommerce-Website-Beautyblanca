@extends('layouts.layout')
@section('content')
    <!-- start: page -->
    <header class="page-header">
        <h2 class="pull-left">Ajouter Produit</h2>
    </header>
    <section class="panel">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#" class="fa fa-caret-down"></a>
                <a href="#" class="fa fa-times"></a>
            </div>

            <h2 class="panel-title">Ajouter Produit</h2>
        </header>

        <style>
            .images-eco .imgs label {
                cursor: pointer;
                margin-right: 10px;

            }

            .images-eco .imgs input {
                display: none;
            }

            .images-eco .imgs img {
                width: 100px;
                height: 100px;
            }



        </style>
        <div class="panel-body">
            <form enctype="multipart/form-data" class="form-horizontal form-bordered" method="post" action="{{url('produits/'.$produit->id)}}">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                    <label class="col-md-3 control-label">Designation</label>
                    <div class="col-md-6">
                        <input value="{{$produit->designation}}" name="designation" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Qnt en stock</label>
                    <div class="col-md-6">
                        <input value="{{$produit->qnt_stock}}" name="qnt_stock" type="number" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Prix avant</label>
                    <div class="col-md-6">
                        <input value="{{$produit->prix_avant}}" name="prix_avant" type="number" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Prix vente</label>
                    <div class="col-md-6">
                        <input value="{{$produit->prix_vente}}" name="prix_vente" type="number" class="form-control" required>
                    </div>
                </div>

                @if (count($errors))
                    <div class="alert alert-danger">
                        <p>! uploader les images</p>
                    </div>
                @endif

                <div class="form-group images-eco">
                    <label class="col-md-3 control-label" style="line-height: 80px">Images</label>
                    <div class="col-md-9 imgs">
                        <label style="border: 2px solid green;">
                            <input value="{{$produit->image1}}" type="file" name='image1' onchange="readURL(this, 'img1_eco');" />
                            <img id="img1_eco" src="{{asset('storage/'.$produit->image1)}}" alt="image" />
                        </label>
                        <label>
                            <input type="file" name='image2' onchange="readURL(this, 'img2_eco');" />
                            <img id="img2_eco" src="{{asset('storage/'.$produit->image2)}}" alt="image" />
                        </label>
                        <label>
                            <input type="file" name='image3' onchange="readURL(this, 'img3_eco');" />
                            <img id="img3_eco" src="{{asset('storage/'.$produit->image3)}}" alt="image" />
                        </label>
                        <label>
                            <input type="file" name='image4' onchange="readURL(this, 'img4_eco');" />
                            <img id="img4_eco" src="{{asset('storage/'.$produit->image4)}}" alt="image" />
                        </label>
                    </div>
                </div>



                <div class="form-group">
                    <label class="col-md-3 control-label">Summernote</label>
                    <div class="col-md-9">
                        <textarea  id="description" name="description" data-plugin-summernote class="summernote" data-plugin-options='{ "height": 180, "codemirror": { "theme": "ambiance" } }'></textarea>

                        {{--                    <div  data-plugin-summernote data-plugin-options='{ "height": 180, "codemirror": { "theme": "ambiance" } }'>Start typing...</div>--}}
                    </div>
                </div>




                <div class="text-center">
                    <button class="btn btn-success" type="submit"><i class="fas fa-check"></i> Ajouter</button>
                    <a class="btn btn-default" href="{{route('produits.index')}}"><i class="fas fa-times"></i> Annuler</a>
                </div>
            </form>
        </div>
    </section>
    <!-- end: page -->
    <script>


        function readURL(input, img) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#' + img).attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        setTimeout(function()
        {
            show_desc('{!! $produit->description !!}');
        }, 500);
    </script>
@endsection
