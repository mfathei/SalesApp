@extends('layouts.master')


@section('content')

    <div class="row">
        <div class="col-sm-4">
            <h2> {{ Lang::get('customers.create_title') }} </h2>
        </div>
    </div>
    <hr>
    <form action="/customers/add" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="id">{{ Lang::get('customers.edit_id') }}</label>
            <input readonly type="text" class="form-control" id="id" name="id" placeholder="{{ Lang::get('customers.edit_id') }}" value="{{ $new_id }}">
        </div>
        <div class="form-group">
            <label for="name">{{ Lang::get('customers.edit_name') }}</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="{{ Lang::get('customers.edit_name') }}" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label for="email">{{ Lang::get('customers.edit_mail') }}</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="{{ Lang::get('customers.edit_mail') }}" value="{{ old('email') }}">
        </div>
        <div class="form-group">
            <label class="control-label" for="phone">{{ Lang::get('customers.edit_phone') }}</label>

            <input type="text" class="form-control" id="phone" name="phone" placeholder="{{ Lang::get('customers.edit_phone') }}" value="{{ old('phone') }}">
        </div>
        <div class="form-group">
            <label class="control-label" for="fax">{{ Lang::get('customers.edit_fax') }}</label>
            <input type="text" class="form-control" id="fax" name="fax" placeholder="{{ Lang::get('customers.edit_fax') }}" value="{{ old('fax') }}">
        </div>
        <div class="form-group">
            <label for="address">{{ Lang::get('customers.edit_address') }}</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="{{ Lang::get('customers.edit_address') }}" value="{{ old('address') }}">
        </div>
        <div class="form-group">
            <label for="first_balance">{{ Lang::get('customers.edit_fbal') }}</label>
            <input type="text" onChange="syncCredit()" class="form-control" id="first_balance" name="first_balance" placeholder="{{ Lang::get('customers.edit_fbal') }}"
                   value="{{ old('first_balance') }}">
        </div>
        <div class="form-group">
            <label for="balance">{{ Lang::get('customers.edit_balance') }}</label>
            <input readonly type="text" class="form-control" id="balance" name="balance" placeholder="{{ Lang::get('customers.edit_balance') }}"
                   value="{{ old('balance') }}">
        </div>
        <div class="form-group">
            <label for="limit">{{ Lang::get('customers.edit_limit') }}</label>
            <input type="number" class="form-control" id="limit" name="limit" placeholder="{{ Lang::get('customers.edit_limit') }}"
                   value="{{ old('limit') }}">
        </div>
        <div class="form-group">
            <label for="notes">{{ Lang::get('customers.edit_notes') }}</label>
            <textarea class="form-control" name="notes" id="notes" placeholder="{{ Lang::get('customers.edit_notes') }}"  name="notes" rows="5">{{ old('notes') }}</textarea>
        </div>
        <div class="checkbox">
            <label>
                <input name="active" type="checkbox" checked> {{ Lang::get('customers.edit_active') }}
        </div>
        <button type="submit" class="btn btn-primary">{{ Lang::get('customers.edit_submit') }}</button>
    </form>

    <br><br><br>
    <br><br><br>
@endsection

@section('script')

<script>

function syncCredit(){
    $('#balance').val($('#first_balance').val());
}

</script>

@endsection
