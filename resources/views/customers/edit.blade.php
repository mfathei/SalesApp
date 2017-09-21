@extends('layouts.master')


@section('content')

    <div class="row">
        <div class="col-sm-4">
            <h2> {{ Lang::get('customers.edit_title') }} </h2>
        </div>
    </div>
    <hr>
    <form action="/customers/update/{{ $customer->id }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="id">{{ Lang::get('customers.edit_id') }}</label>
            <input readonly type="text" class="form-control" id="id" placeholder="id" value="{{ $customer->id }}">
        </div>
        <div class="form-group">
            <label for="name">{{ Lang::get('customers.edit_name') }}</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Customer Name" value="{{ $customer->name }}">
        </div>
        <div class="form-group">
            <label for="email">{{ Lang::get('customers.edit_mail') }}</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ $customer->email }}">
        </div>
        <div class="form-group">
            <label class="control-label" for="phone">{{ Lang::get('customers.edit_phone') }}</label>

            <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" value="{{ $customer->phone }}">
        </div>
        <div class="form-group">
            <label class="control-label" for="fax">{{ Lang::get('customers.edit_fax') }}</label>
            <input type="text" class="form-control" id="fax" name="fax" placeholder="Fax" value="{{ $customer->fax }}">
        </div>
        <div class="form-group">
            <label for="address">{{ Lang::get('customers.edit_address') }}</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="{{ $customer->address }}">
        </div>
        <div class="form-group">
            <label for="first_balance">{{ Lang::get('customers.edit_fbal') }}</label>
            <input readonly type="text" class="form-control" id="first_balance" name="first_balance" placeholder="First balance"
                   value="{{ $customer->first_balance }}">
        </div>
        <div class="form-group">
            <label for="balance">{{ Lang::get('customers.edit_balance') }}</label>
            <input readonly type="text" class="form-control" id="balance" name="balance" placeholder="Balance"
                   value="{{ $customer->balance }}">
        </div>
        <div class="form-group">
            <label for="limit">{{ Lang::get('customers.edit_limit') }}</label>
            <input type="number" class="form-control" id="limit" name="limit" placeholder="Transaction Limit"
                   value="{{ $customer->limit }}">
        </div>
        <div class="form-group">
            <label for="notes">{{ Lang::get('customers.edit_notes') }}</label>
            <textarea class="form-control" name="notes" id="notes"  name="notes" rows="5">{{ $customer->notes }}</textarea>
        </div>
        <div class="checkbox">
            <label>
                <input name="active" type="checkbox" {{ $customer->active? ' checked' : '' }} > {{ Lang::get('customers.edit_active') }}
            </label>
        </div>
        <button type="submit" class="btn btn-primary">{{ Lang::get('customers.edit_submit') }}</button>
    </form>

    <br><br><br>
    <br><br><br>
@endsection