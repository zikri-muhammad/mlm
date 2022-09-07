@extends('layouts.default')

@section('content')
    <div class="container-fluid">
        <div class="card card-dark">
            <div class="card-header">
                <h3 class="card-title">Downline Member</h3>
            </div>

            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <h3 class="profile-username text-center">{{ $member->nama }}</h3>
                    <h5 class="text-muted text-left">downline</h5>
                    <ul class="list-group list-group-unbordered mb-3">
                        @foreach ($member->memberUpline as $item)
                            <li class="list-group-item">
                                <b>{{$item->upline_id}}</b>
                            </li>
                        @endforeach
                    </ul>
                    {{-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> --}}
                </div>

            </div>

        </div>

    </div>
@endsection

@push('custom-scripts')
    <script type="text/javascript">
        $(document).ready(function() {

        });
    </script>
@endpush
