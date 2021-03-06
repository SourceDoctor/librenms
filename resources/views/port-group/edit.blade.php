@extends('layouts.librenmsv1')

@section('title', __('Edit Port Group'))

@section('content')
    <div class="container">
        <div class="row">
            <form action="{{ route('port-groups.update', $port_group->id) }}" method="POST" role="form"
                  class="form-horizontal device-group-form col-md-10 col-md-offset-1 col-sm-12">
                <legend>@lang('Edit Port Group'): {{ $port_group->name }}</legend>
                {{ method_field('PUT') }}
                @csrf

                @include('port-group.form')

                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-sm-offset-2">
                        <button type="submit" class="btn btn-primary">@lang('Save')</button>
                        <a type="button" class="btn btn-danger"
                           href="{{ route('port-groups.index') }}">@lang('Cancel')</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
