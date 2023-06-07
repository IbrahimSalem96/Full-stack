@extends('dashboard.layout.layout')
@section('title', 'Show All Users')
@section('body')
<div class="alert alert-dark" role="alert">
    <p class="m-0">{{__('words.All Users')}}</p>
</div>
@include('dashboard.includes.success')
@include('dashboard.includes.errors')
<div class="container">
    <table id="table_id" class="table table-striped table-bordered table-responsive table-hover " >
        <thead>
            <tr>
                <th>{{__('words.id')}}</th>
                <th>{{__('words.Username')}}</th>
                <th>{{__('words.Email')}}</th>
                <th>{{__('words.Status')}}</th>
                <th>{{__('words.Action')}}</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</div>

<div class="modal" tabindex="-1" id="deletemodal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ Route('dashboard.users.delete') }}" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <p>{{ __('words.You want to delete this user, are you sure?') }}</p>
                        @csrf
                        <input type="hidden" name="id" id="id">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal">{{ __('words.close') }}</button>
                    <button type="submit" class="btn btn-danger">{{ __('words.delete') }} </button>
                </div>
            </div>
        </form>
    </div>
</div>





@endsection
@push('javascripts')
    <script type="text/javascript">


        $(function() {
            var table = $('#table_id').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ Route('dashboard.users.all') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'status',
                        name: 'status',
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });
        });
        $('#table_id tbody').on('click', '#deleteBtn', function(argument) {
            var id = $(this).attr("data-id");
            console.log(id);
            $('#deletemodal #id').val(id);
        })
    </script>
@endpush
