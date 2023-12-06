@extends('layouts.app', [
    'class' => 'full-screen-map',
    'folderActive' => 'maps',
    'elementActive' => 'fullscreen'
])

@section('content')
    <div id="map"></div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            demo.initGoogleMaps();
        });
    </script>
@endpush