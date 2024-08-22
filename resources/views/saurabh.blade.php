@extends('layout',['title'=>'Saurabh Test'])

@section('content')
<div class="charts-container grid grid-cols-2 lg:grid-cols-3 gap-4">
    <div class="col-12 col-md-4">
        <div class="chart-card">
            <div class="card-header">
                <div class="chart-title">Chart title goes here</div>
                <div class="chart-subtitle">15 April - 21 April</div>
            </div>
            <div id="chart-1" class="chart-wrapper"></div>
        </div>
    </div>
    <div class="col-12 col-md-4">
        <div class="chart-card">
            <div class="guage-slider">
                <div>
                    <div class="card-header">
                        <div class="chart-title">Chart title goes here</div>
                        <div class="chart-subtitle">Here go numbers XX of total XX</div>
                    </div>
                    <div id="chart-2" class="chart-wrapper" style="height: 275px;"></div>
                </div>
                <div>
                    <div class="card-header">
                        <div class="chart-title">Chart title goes here</div>
                        <div class="chart-subtitle">Here go numbers XX of total XX</div>
                    </div>
                    <div id="chart-6" class="chart-wrapper" style="height: 275px;"></div>
                </div>
                <div>
                    <div class="card-header">
                        <div class="chart-title">Chart title goes here</div>
                        <div class="chart-subtitle">Here go numbers XX of total XX</div>
                    </div>
                    <div id="chart-7" class="chart-wrapper" style="height: 275px;"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-4">
        <div class="chart-card">
            <div class="card-header">
                <div class="chart-title">Chart title goes here</div>
                <div class="chart-subtitle">15 April - 21 April</div>
            </div>
            <div id="chart-3" class="chart-wrapper"></div>
        </div>
    </div>
    <div class="col-12 col-md-4">
        <div class="chart-card">
            <div class="card-header">
                <div class="chart-title">Chart title goes here</div>
                <div class="chart-subtitle">15 April - 21 April</div>
            </div>
            <div id="chart-4" class="chart-wrapper"></div>
        </div>
    </div>
    <div class="col-12 col-md-4">
        <div class="chart-card">
            <div class="card-header">
                <div class="chart-title">Chart title goes here</div>
                <div class="chart-subtitle">15 April - 21 April</div>
            </div>
            <div id="chart-5" class="chart-wrapper"></div>
        </div>
    </div>
</div>
@endsection