@extends('layouts.master')

<?php $langUrl = App::getLocale() === 'en' ? 'dataTables/json/English.json' : 'dataTables/json/Arabic.json' ?>
<?php $search = Lang::get('language.search') ?>
<?php $actions = Lang::get('customers.th_action') ?>

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
            <table id="custs_table" class="display" cellspacing="0" width="100%">
                <thead>
                <tr>

                    <th>{{ Lang::get('customers.edit_id') }}</th>
                    <th>{{ Lang::get('customers.edit_name') }}</th>
                    <th>{{ Lang::get('customers.edit_address') }}</th>
                    <th>{{ Lang::get('customers.edit_mail') }}</th>
                    <th>{{ Lang::get('customers.edit_phone') }}</th>
                    <th>{{ Lang::get('customers.edit_fax') }}</th>
                    <th>{{ Lang::get('customers.edit_fbal') }}</th>
                    <th>{{ Lang::get('customers.edit_balance') }}</th>
                    <th>{{ Lang::get('customers.edit_limit') }}</th>
                    <th>{{ Lang::get('customers.edit_notes') }}</th>
                    <th>{{ Lang::get('customers.edit_active') }}</th>
                    <th>{{ Lang::get('customers.th_created') }}</th>
                    <th>{{ Lang::get('customers.th_updated') }}</th>
                    <th>{{ Lang::get('customers.th_action') }}</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>{{ Lang::get('customers.edit_id') }}</th>
                    <th>{{ Lang::get('customers.edit_name') }}</th>
                    <th>{{ Lang::get('customers.edit_address') }}</th>
                    <th>{{ Lang::get('customers.edit_mail') }}</th>
                    <th>{{ Lang::get('customers.edit_phone') }}</th>
                    <th>{{ Lang::get('customers.edit_fax') }}</th>
                    <th>{{ Lang::get('customers.edit_fbal') }}</th>
                    <th>{{ Lang::get('customers.edit_balance') }}</th>
                    <th>{{ Lang::get('customers.edit_limit') }}</th>
                    <th>{{ Lang::get('customers.edit_notes') }}</th>
                    <th>{{ Lang::get('customers.edit_active') }}</th>
                    <th>{{ Lang::get('customers.th_created') }}</th>
                    <th>{{ Lang::get('customers.th_updated') }}</th>
                    <th>{{ Lang::get('customers.th_action') }}</th>
                </tr>
                </tfoot>
                <tbody>

                <!-- @foreach($customers as $customer) -->
                    <tr>
              <!--           <td>{{ $customer->id }}</td>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->address }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->phone }}</td>

                        <td>{{ $customer->active ? 'Active': 'InActive' }}</td> -->

                        <td>id</td>
						<td>name</td>
						<td>address</td>
						<td>email</td>
						<td>phone</td>
						<td>fax</td>
						<td>first_balance</td>
						<td>balance</td>
						<td>limit</td>
						<td>notes</td>
						<td>active</td>
						<td>created_at</td>
						<td>updated_at</td>
                        <td align="center">
<!--                             <a href="/customers/edit/{{ $customer->id  }}" title="{{ Lang::get('customers.edit') }}">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a>

                            <a href="/customers/delete/{{ $customer->id  }}"
                               title="{{ Lang::get('customers.delete') }}">
                                <span class="glyphicon glyphicon-trash"
                                      onclick="return confirm('Are you sure?')"></span>
                            </a> -->

                        </td>
                    </tr>

                <!-- @endforeach -->

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
$(document).ready(function() {
    // Setup - add a text input to each footer cell
    var actions = "<?php echo $actions; ?>";
    $('#custs_table tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="<?php echo $search; ?> '+title+'" />' );
        if(title == actions){
            $(this).html( '<input type="text" placeholder="<?php echo $search; ?> '+title+'" disabled />' );
        }
    } );
 
    // DataTable
    var tbl = $('#custs_table').DataTable({
        // "scrollX": true, // horizontal scroll
        "columnDefs": [
            {
                "targets": [ 6 ],// first_balance
                "visible": false,
                "searchable": false
            },
            {
                "targets": [ 12 ],// updated_at
                "visible": false,
                "searchable": false
            },
            {
                "targets": [ 9 ],// notes
                "visible": false,
                // "searchable": true // default
            },
            {
                "targets": [ 13 ],// action
                "orderable": false,
                "searchable": false,
                "data": null,
                "defaultContent":  "&nbsp;&nbsp;<a class='edit' href='javascript: ;' title='edit'><span class='glyphicon glyphicon-edit'></span>&nbsp;&nbsp;</a><a class='delete' href='javascript: ;' title='delete'><span class='glyphicon glyphicon-trash'></span></a>"
            }
        ],
        "language": {
            "url": ""
        },
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": '/customersgrid'
        },
        "deferRender": true
    });
 
    // select row
    $('#custs_table tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            tbl.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );
    
    
    // edit and delete icons for each row
    $('#custs_table tbody').on( 'click', 'a', function () {
        var data = tbl.row( $(this).parents('tr') ).data();
        // alert( data[0] +"'s salary is: "+ data[ 5 ] );
        console.log($(this).attr('class'));
        if($(this).attr('class') === 'edit'){
            window.location.href = "/customers/edit/" + data[0];
        }

        if($(this).attr('class') === 'delete'){
            if (confirm('Are you sure? id : ' + data[0])){
                window.location.href = "/customers/delete/" + data[0];
            }
        }

    } );
            
    // Apply the search
    tbl.columns().every( function () {
        var that = this;
 
        $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );

    $('#custs_table tbody').append('<br/>');

} );
</script>

@endsection

