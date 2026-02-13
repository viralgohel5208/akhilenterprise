@extends('admin.layouts.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card mb-6">
        <div class="card-datatable table-responsive pt-0">
            <table id="contactRecord" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Sr No</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Inquiry Date</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 1; @endphp
                    @foreach($records as $record)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $record['first_name'] }}</td>
                        <td>{{ $record['last_name'] }}</td>
                        <td>{{ $record['email'] }}</td>
                        <td>{{ $record['phone_number'] }}</td>
                        <td>{{ date('d-m-Y', strtotime($record['created_at'])) }}</td>
                    </tr>
                    @php $i++; @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    $('#contactRecord').DataTable();
</script>
@stop