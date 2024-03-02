@extends('app')

@section('content')
    <div class="container">
        <p>所要時間：<span id="duration"></span></p>
        <div id="map"></div>
    </div>
@endsection

@section('script')
    <script
        src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_API_KEY') }}&callback=initMap&libraries=places&v=weekly&solution_channel=GMP_CCS_autocomplete_v1"
        defer></script>
    <script src="{{ asset('js/result-map.js') }}"></script>
@endsection
