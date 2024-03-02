@extends('app')

@section('content')
    <p>{{ session('ryokan') }}</p>
    <form action="/onsen" method="post">
        @csrf
        <x-auto-complete-input name="onsen" placeholder="温泉名を入力" />

        <button type="submit">next</button>
    </form>
@endsection

@section('script')
    <script
        src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_API_KEY') }}&callback=initMap&libraries=places&v=weekly&solution_channel=GMP_CCS_autocomplete_v1"
        defer></script>
    <script src="{{ asset('js/auto-complete.js') }}"></script>
@endsection
