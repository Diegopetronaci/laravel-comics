@extends('layouts.app')

@section('content')
    <h2>Admin/HomePage</h2>

    <div class="container">
        <div class="d-flex row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <a class="btn-warning" href=" {{route('admin.comics.index')}} "><div class="card-header p-3"> COMIC </div></a>
                    <a class="btn-danger" href="#"><div class="card-header p-3"> POST </div></a>
                </div>
            </div>
            
        </div>
    </div>
@endsection