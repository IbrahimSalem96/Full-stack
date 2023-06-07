@extends('dashboard.layout.layout')
@section('title', 'Show Messages')
@section('body')
        <div class="container-fluid px-4">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fa-solid fa-file-signature"></i>
                    {{__('words.Contact')}}
                </div>
                <div class="card-body">
                    @include('dashboard.includes.success')
                    @include('dashboard.includes.errors')
                    <table id="table_id">
                        <thead>
                            <tr>
                                <th>{{__('words.id')}}</th>
                                <th>{{__('words.Name')}}</th>
                                <th>{{__('words.email')}}</th>
                                <th>{{__('words.Subject')}}</th>
                                <th>{{__('words.Msessage')}}</th>
                                <th>{{__('words.Sending Time')}}</th>
                                <th>{{__('words.Action')}}</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>


<div class="modal" tabindex="-1" id="deletemodal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ route('dashboard.messages.delete') }}" method="POST">
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
                ajax: "{{ Route('dashboard.messages.all') }}",
                columns: [
                    {
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'Name',
                        name: 'Name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'Subject',
                        name: 'Subject'
                    },
                    {
                        data: 'Msessage',
                        name: 'Msessage'
                    },
                    {
                        data: 'Sending Time',
                        name: 'Sending Time'
                    },
                    {
                        data: 'action',
                        name: 'action',
                    }
                ]
            });
        });
        $('#table_id tbody').on('click', '#deleteBtn', function(argument) {
            var id = $(this).attr("data-id");
            $('#deletemodal #id').val(id);
        })

    </script>
@endpush
