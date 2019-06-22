@extends('partials.master')
@section('content')
<div class="row">
                    <!-- Analytics Header -->

                    <div class="col s12 m6 l3 center">
                        <div class="card ui-app__page-content">
                            <div class="card-content ui-app__page-content__analytics">

                                <div class="card-body">
                                    <div class="ui-app__page-content__analytics--data">
                                        <h3 class="headline">{{$aktif}}</h3>
                                        <div class="text-muted">Orderan Aktif</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l3 center">
                        <div class="card ui-app__page-content">
                            <div class="card-content ui-app__page-content__analytics">
                                <div class="card-body">
                                    <div class="ui-app__page-content__analytics--data">
                                        <h3 class="headline">{{$nonaktif}}</h3>
                                        <div class="text-muted">Orderan Tidak Aktif</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l3 center">
                        <div class="card ui-app__page-content">
                            <div class="card-content ui-app__page-content__analytics ">
                                <div class="card-body">
                                    <div class="ui-app__page-content__analytics--data">
                                        <h3 class="headline">{{$clear}}</h3>
                                        <div class="text-muted">Orderan Clear</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l3 center">
                        <div class="card ui-app__page-content">
                            <div class="card-content ui-app__page-content__analytics">
                                <div class="card-body">
                                    <div class="ui-app__page-content__analytics--data">
                                        <h3 class="headline">{{$sum}}</h3>
                                        <div class="text-muted">Total Penghasilan</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col s12">
                        <div class="card ui-app__page-content">
                            <div class="card-content">
                                <!-- title -->
                                <div class="card-title headline">Analytics report</div>

                                <div class="card-body">
                                    <div style="min-height: 375px">
                                        <canvas id="dashboard-analytics-report-chart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
@endsection
@include('additional')
