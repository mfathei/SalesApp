@extends('layouts.master')


@section('content')

    <div class="row">
        <div class="col-md-12">
            <h2>{{ Lang::get('invoices.title') }}</h2>
        </div>
    </div>
    <hr/>
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-tabs nav-justified">
                <li class="active">
                    <a href="#sales" data-toggle="tab">{{ Lang::get('invoices.sales') }}</a>
                </li>
                <li>
                    <a href="#buys" data-toggle="tab">{{ Lang::get('invoices.buys') }}</a>
                </li>
                <li>
                    <a href="#resales" data-toggle="tab">{{ Lang::get('invoices.resales') }}</a>
                </li>
                <li>
                    <a href="#rebuys" data-toggle="tab">{{ Lang::get('invoices.rebuys') }}</a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="sales" class="tab-pane active fade in">
                    <h4>Home Page</h4>
                    <p>This is the home page</p>
                </div>
                <div id="buys" class="tab-pane fade">
                    <h4>Contact Page</h4>
                    <p>This is the contact page</p>
                </div>
                <div id="resales" class="tab-pane fade">
                    <h4>Home Page</h4>
                    <p>This is the home page</p>
                </div>
                <div id="rebuys" class="tab-pane fade">
                    <h4>Contact Page</h4>
                    <p>This is the contact page</p>
                </div>
            </div>
        </div>
    </div>

@endsection
