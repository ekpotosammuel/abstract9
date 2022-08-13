@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center> {{__('ACCOUNT STATUS') }}</center></div>

                <div class="card-body">
                    <center>
                        <h1>Deactivated</h1> 
                        <p>Acount Deactivated</p>
    
                        {{ __('You are logged in!') }}
                    </center>
 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection