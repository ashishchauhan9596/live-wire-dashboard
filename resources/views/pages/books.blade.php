@extends('layouts.dashboardLayout')

@push('css')
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@section('title', 'My Books')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row-reverse align-items-center justify-content-between">
            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#">
                <i class="fas fa-user-plus"></i> Add New Book
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="books" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Created At</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{-- <script>
        @if ($errors->has('name'))
            $(window).on('load',function() {
            $("#addNewSystemUser").modal();
            });
        @endif

    </script> --}}
    <!-- Page level plugins -->
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('js/books.js') }}"></script>
@endpush
