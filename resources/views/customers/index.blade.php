@extends('layouts.master')

<?php $langUrl = App::getLocale() === 'en' ? 'dataTables/json/English.json' : 'dataTables/json/Arabic.json' ?>

@section('content')

    <div class="row">
        <div class="col-sm-4">
            <h2> {{ Lang::get('customers.title') }} </h2>
        </div>

        <div class="col-sm-offset-10 col-sm-2">
            <form action="">
                <input type="button" class="btn-primary btn-lg" value="{{ Lang::get('customers.add') }}">
            </form>
        </div>
    </div>

    <hr/>
    <div class="row">
        <div class="col-sm-12">
            <table id="custs_table" class="table table-responsive table-striped hover row-border" cellspacing="0"
                   width="100%">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Phone</th>


                    <th>Status</th>
                    <th>Action</th>
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
                        <td align="center">
                            <a href="/customers/edit/{{ $customer->id  }}" title="{{ Lang::get('customers.edit') }}">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a>

                            <a href="/customers/delete/{{ $customer->id  }}"
                               title="{{ Lang::get('customers.delete') }}">
                                <span class="glyphicon glyphicon-trash"
                                      onclick="return confirm('Are you sure?')"></span>
                            </a>

                        </td>
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

