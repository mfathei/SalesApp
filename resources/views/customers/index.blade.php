@extends('layouts.master')

<?php $langUrl = App::getLocale() === 'en' ? 'dataTables/json/English.json' : 'dataTables/json/Arabic.json' ?>

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h2>{{ Lang::get('customers.title') }}</h2>
        </div>
    </div>
    <hr/>
    <div class="row">
        <div class="col-md-12">
            <table id="custs_table" class="hover row-border" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Phone</th>


                    <th>Status</th>
                </tr>
                </thead>
                <tbody>

                @foreach($customers as $customer)
                    <tr>
                        <td>{{ $customer->id }}</td>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->address }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->phone }}</td>

                        <td>{{ $customer->active ? 'Active': 'InActive' }}</td>
                    </tr>

                @endforeach

                </tbody>
            </table>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
@endsection

@section('script')

    <script>
        $(document).ready(function () {
            $('#custs_table').DataTable({
                "language": {
                    "url": "<?php echo $langUrl; ?>"
                }
            });
        });
    </script>

@endsection

