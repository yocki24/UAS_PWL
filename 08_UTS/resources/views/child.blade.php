@extends('layouts.app')

@section('title', 'Profil')

@component('components.alert')
<b>Anda berhasil login!</b>
@endcomponent

@section('sidebar')
@parent
<p>Sidebar halaman Profil.</p>
@endsection

@section('content')
 <p>Ini adalah bagian konten. 1941720144 - Zidan</p>
@endsection
