@extends('layouts.master')


@section('content')

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{ Lang::get('dashboard.dashboard') }}</div>

                <div class="panel-body">
                    <div class="col-sm-3">
                        <a href="invoices" class="thumbnail" title="{{ Lang::get('dashboard.invoices') }}">
                            <p>{{ Lang::get('dashboard.invoices') }}</p>
                            <img src="images/mbuntu-0.jpg"/>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="images/mbuntu-0.jpg" class="thumbnail" title="{{ Lang::get('dashboard.transaction') }}">
                            <p>{{ Lang::get('dashboard.transaction') }}</p>
                            <img src="images/mbuntu-0.jpg"/>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="images/mbuntu-0.jpg" class="thumbnail" title="{{ Lang::get('dashboard.items') }}">
                            <p>{{ Lang::get('dashboard.items') }}</p>
                            <img src="images/mbuntu-0.jpg"/>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="/customers" class="thumbnail" title="{{ Lang::get('dashboard.customers') }}">
                            <p>{{ Lang::get('dashboard.customers') }}</p>
                            <img src="images/mbuntu-0.jpg"/>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="images/mbuntu-0.jpg" class="thumbnail" title="{{ Lang::get('dashboard.suppliers') }}">
                            <p>{{ Lang::get('dashboard.suppliers') }}</p>
                            <img src="images/mbuntu-0.jpg"/>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="images/mbuntu-0.jpg" class="thumbnail" title="{{ Lang::get('dashboard.reports') }}">
                            <p>{{ Lang::get('dashboard.reports') }}</p>
                            <img src="images/mbuntu-0.jpg"/>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="images/mbuntu-0.jpg" class="thumbnail" title="{{ Lang::get('dashboard.settings') }}">
                            <p>{{ Lang::get('dashboard.settings') }}</p>
                            <img src="images/mbuntu-0.jpg"/>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="images/mbuntu-0.jpg" class="thumbnail" title="{{ Lang::get('dashboard.about') }}">
                            <p>{{ Lang::get('dashboard.about') }}</p>
                            <img src="images/mbuntu-0.jpg"/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
