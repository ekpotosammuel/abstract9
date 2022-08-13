@extends('layouts.app')

@section('content')
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
                
                            @foreach ($roles as $role)
                               <tr>
                                    <td>{{ $role->user->name }}</td>
                                    <td>{{ $role->role->name }}</td>                
                                        <br>
                                    </td>
                        
                           @endforeach
                
                        </tbody>
                    </table> 
                </div>               
            </div>
        </div>
    </div>
</div>

@endsection