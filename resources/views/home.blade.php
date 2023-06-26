@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="GET" action="{{ route('softDeleteUsers') }}">
                            @csrf

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('delete 10 users') }}
                                    </button>
                                </div>
                            </div>
                        </form>

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
