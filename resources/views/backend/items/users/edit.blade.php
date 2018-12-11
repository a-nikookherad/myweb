@extends('backend.items.users.partials.layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    @include('backend.partials.error')

                    @if($user)
                        <div class="card-body">
                            <form method="POST" action="{{ route('users.edit_post',$user->id) }}">

                                @include('backend.items.users.partials.form')

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Update') }}
                                        </button>
                                        <a href="{{route('users.list')}}" class="btn btn-danger">
                                            {{ __('Cancel') }}
                                        </a>
                                    </div>
                                </div>


                            </form>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
