@extends('layouts.kfd')
@section('content')

<div class="content">
    <div class="main">
        <h2>Dashboard</h2>
        <div class="card-group">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="..." alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h4>25</h4>
                            Items
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="..." alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h4>7</h4>
                            Suppliers
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="..." alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h4>20</h4>
                            Customers
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="..." alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h4>30</h4>
                            Users
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-3">Lorem Ipsum</h4>
                        <div class="row">
                            <div class="col-6 col-md-3">
                                <div class="text-center py-3 border-end">
                                    <h5>3215</h5>
                                    <span class="text-muted">Lorem Ipsum</span>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="text-center py-3 border-end">
                                    <h5>124731</h5>
                                    <span class="text-muted">Lorem Ipsum</span>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="text-center py-3 border-end">
                                    <h5>3238947</h5>
                                    <span class="text-muted">Lorem Ipsum</span>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="text-center py-3">
                                    <h5>7123</h5>
                                    <span class="text-muted">Lorem Ipsum</span>
                                </div>
                            </div>
                        </div>
                        <div id="overview-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-0">Recent Transaction</h4>
                        <div id="basic-bar-chart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
