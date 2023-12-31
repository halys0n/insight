@extends('layouts.app', [
    'class' => '',
    'folderActive' => 'maps',
    'elementActive' => 'google'
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-body ">
                        <div id="satelliteMap" class="map"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card ">
                    <div class="card-header ">
                        <h4 class='card-title'>Regular Map</h4>
                    </div>
                    <div class="card-body ">
                        <div id="regularMap" class="map"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card ">
                    <div class="card-header ">
                        <h4 class='card-title'>Custom Skin & Settings Map</h4>
                    </div>
                    <div class="card-body ">
                        <div id="customSkinMap" class="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            demo.initSmallGoogleMaps();
        });
    </script>
@endpush