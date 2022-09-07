@extends('layouts.default')

@section('content')
    <div class="container-fluid">
        <div class="card card-dark">
            <div class="card-header">
                <h3 class="card-title">Tambah Member</h3>
            </div>
            <form class="form-horizontal" method="POST" action="{{ route('add-member') }}">
                @csrf
                <div class="card-body">
                    <div class="form-group row">
                        <label for="upline_id" class="col-sm-2 col-form-label">Nama Upline</label>
                        <div class="col-sm-10">
                            <select name="upline_id"
                                class="custom-select form-control @error('upline_id') is-invalid @enderror"
                                id="exampleSelectBorder">
                                {{-- <option value="1">Value</option> --}}
                                @foreach ($member as $val)
                                    <option value="{{ $val->id }}">{{ $val->nama }}</option>
                                @endforeach
                            </select>
                            @error('upline_id')
                                <small id="emailHelp" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="no_id" class="col-sm-2 col-form-label">Nomor Id</label>
                        <div class="col-sm-10">
                            <input type="text" name="no_id" value="{{ rand() }}" readonly
                                class="form-control @error('no_id') is-invalid @enderror" id="no_id"
                                placeholder="Nomor Id">
                            @error('no_id')
                                <small id="emailHelp" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"
                                id="no_id" placeholder="Nama New Member">
                            @error('nama')
                                <small id="emailHelp" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="alamat"
                                placeholder="Alamat"></textarea>
                            @error('alamat')
                                <small id="emailHelp" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phone" class="col-sm-2 col-form-label">Nomor Telepon</label>
                        <div class="col-sm-10">
                            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror"
                                id="phone" placeholder="Nomor Telepon">
                            @error('phone')
                                <small id="emailHelp" class="form-text text-danger">{{ $message }}</small>
                            @enderror
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
