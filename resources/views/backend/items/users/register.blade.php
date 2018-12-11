

@extends('backend.items.users.partials.layout')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add User') }}</div>

                    @include('backend.partials.error')
                    <div class="card-body">
                        <form method="POST" action="{{ route('users.register_post') }}">

                            @include('backend.items.users.partials.form')

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Add User') }}
                                    </button>
                                    <a href="{{route('users.list')}}" class="btn btn-danger">
                                        {{ __('Cancel') }}
                                    </a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
