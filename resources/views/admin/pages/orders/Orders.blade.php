@extends('Master_pages.Admin')
@section('title','Orders')
@section('content')
<div class='container'>
    <div class="row">
              <div class="col-md-12">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">All Orders </h1>
                </div>
                {!! $dataTable->table() !!}
              </div>
  
        </div>
      </div>

@endsection
@push('scripts')
{!! $dataTable->scripts() !!}
@endpush


