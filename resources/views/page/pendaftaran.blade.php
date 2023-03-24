@extends('layouts.app')

@section('nav')

@endsection

@section('content-header')
    <h1>
        Pendaftaran
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"><i class="fa fa-edit active"></i> Pendaftaran</a></li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <livewire:pendaftaran.form-input>
        <livewire:pendaftaran.table>
    </div>
@endsection

