@extends('layouts.app',[
    'class' => '',
    'folderActive' => '',
    'elementActive' => 'charts'
])

@section('content')
    <div class="content">
        <p>Simple yet flexible JavaScript charting for designers & developers. Made by our friends from
            <a target="_blank" href="https://github.com/gionkunz/chartist-js">Chartist.js</a>. Please check
            <a target="_blank" href="https://gionkunz.github.io/chartist-js/api-documentation.html">the full
                documentation</a>.</p>
        <div class="row">
            <div class="col-md-6">
                <div class="card card-chart">
                    <div class="card-header">
                        <h5 class="card-title">24 Hours Performance</h5>
                        <p class="card-category">Line Chart</p>
                    </div>
                    <div class="card-body">
                        <canvas id="activeUsers"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-chart">
                    <div class="card-header">
                        <h5 class="card-title">NASDAQ: AAPL</h5>
                        <p class="card-category">Line Chart with Points</p>
                    </div>
                    <div class="card-body">
                        <canvas id="chartStock"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card card-chart">
                    <div class="card-header">
                        <h5 class="card-title">Views</h5>
                        <p class="card-category">Bar Chart</p>
                    </div>
                    <div class="card-body">
                        <canvas id="chartViews"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card car-chart">
                    <div class="card-header">
                        <h5 class="card-title">Activity</h5>
                        <p class="card-category">Multiple Bars Chart</p>
                    </div>
                    <div class="card-body">
                        <canvas id="chartActivity"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card ">
                    <div class="card-header ">
                        <h5 class="card-title">Email Statistics</h5>
                        <p class="card-category">Last Campaign Performance</p>
                    </div>
                    <div class="card-body ">
                        <canvas id="chartEmail" class="ct-chart ct-perfect-fourth" width="456" height="300"></canvas>
                    </div>
                    <div class="card-footer ">
                        <div class="legend">
                            <i class="fa fa-circle text-info"></i> Open
                        </div>
                        <hr>
                        <div class="stats">
                            <i class="fa fa-calendar"></i> Number of emails sent
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card ">
                    <div class="card-header ">
                        <h5 class="card-title">Users Behavior</h5>
                        <p class="card-category">24 Hours performance</p>
                    </div>
                    <div class="card-body ">
                        <canvas id=chartHours width="400" height="100"></canvas>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <i class="fa fa-history"></i> Updated 3 minutes ago
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
            demo.initChartPageCharts();
        });
    </script>
@endpush