@extends('layouts.app')

@section('content')
<form action="#" method="POST">
@csrf
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center> {{__('ADMIN') }}</center></div>
                <div>
                    <table class="table table-bordered small" width="100%" id="office_table" cellspacing="0">
                        <thead>
                            <tr>
                               
                                <th>USER NAME</th>
                                <th>USER ROLE</th>
                                <th>Action</th>
                  
                
                            </tr>
                        </thead>
                        <tbody>
                
                            {{-- <tr>
                                <td>{{ $role->user->name }}</td>
                                <td>{{ $role->role->name }}</td>                
                                    <br>
                            </tr> --}}
                
                        </tbody>
                    </table> 
                </div>               
            </div>
        </div>
    </div>
</div>

@endsection