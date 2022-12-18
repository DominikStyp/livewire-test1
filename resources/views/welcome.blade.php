@extends('layouts.app')

@section('content')
    <style>
        #counterComponent button {
            padding: 10px 20px;
            margin: 10px;
            background: #6c757d;
            border: 1px solid;
            border-radius: 10px;
        }
    </style>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        <livewire:counter />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
