  
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Users</div>

                    <div class="card-body">
                        <table class="table table-bordered table-striped printable" id="datatable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Created_At</th>
                            </tr>
                            </thead>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script type="text/javascript">
        $('#datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('users-list') }}",
            columns: [
               { data: 'id', name: 'id' },
                { data: 'name', name: 'name' },
                { data: 'email', name: 'email' },
                { data: 'created_at', name: 'created_at' }
            ]
        });
    </script>

    @endpush

