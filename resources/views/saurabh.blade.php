@extends('layout',['title'=>'Saurabh Test'])

@section('content')
<div class="charts-container grid grid-cols-2 lg:grid-cols-3 gap-4">
    <div class="col-12 col-md-4">
        @include('components.chartCard', ['cardTitle'=>'Chart title goes heresss', 'cardDescription'=>'15 April - 21 April', 'id'=>'chart-1'])
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
        @include('components.chartCard', ['cardTitle'=>'Chart title goes heresss', 'cardDescription'=>'15 April - 21 April', 'id'=>'chart-3'])
    </div>
    <div class="col-12 col-md-4">
        @include('components.chartCard', ['cardTitle'=>'Chart title goes heresss', 'cardDescription'=>'15 April - 21 April', 'id'=>'chart-4'])
    </div>
    <div class="col-12 col-md-4">
        @include('components.chartCard', ['cardTitle'=>'Chart title goes heresss', 'cardDescription'=>'15 April - 21 April', 'id'=>'chart-5'])
    </div>
</div>
@endsection