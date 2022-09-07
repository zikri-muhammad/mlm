@extends('layouts.default')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">List Member</h3>
                    </div>

                    <div class="card-body">
                        <table id="memberId" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Nomor Id</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Phone</th>
                                    {{-- <th>Action</th> --}}
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
@endsection

@push('custom-scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            // Swal.fire('Any fool can use a computer')
            // alert('ksh')
            let url = '{{ url('member-data') }}'
            console.log(url)
            $('#memberId').DataTable({
                processing: true,
                serverSide: true,
                ajax: url,
                columns: [{
                    data: 'no_id',
                }, {
                    data: 'nama',
                }, {
                    data: 'alamat',
                }, {
                    data: 'phone',
                }]
            });
        })
    </script>
@endpush
