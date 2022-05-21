
@extends('layouts.layout-v1')

@section('template')

  <navigation-bar></navigation-bar>

  <div class="tw-bg-gray-100 tw-pt-8 tw-pb-16">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          @yield('content')
        </div>
      </div>
    </div>
  </div>

@append

@section('extra-js')
@append

@section('extra-css')
@append
