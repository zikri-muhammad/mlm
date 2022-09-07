@extends('layouts.default')

@section('content')
    <div class="container-fluid">
        <div class="card card-dark">
            <div class="card-header">
                <h3 class="card-title">Tambah Kategory Product</h3>
            </div>


            <form class="form-horizontal" method="POST" action="{{ route('edit-kategori-product', ['id'=> $kategoriProduct->id]) }}">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group row">
                        <label for="namaProduct" class="col-sm-2 col-form-label">Nama Product</label>
                        <div class="col-sm-10">
                            <input type="text" name="namaProduct" class="form-control" id="namaProduct"
                                placeholder="Nama Product">
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-info">Sign in</button>
                </div>

            </form>
        </div>

    </div>
@endsection

@push('custom-scripts')
    <script type="text/javascript">
        $(document).ready(function() {

        });
    </script>
@endpush
