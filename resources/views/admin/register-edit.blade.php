@extends('layouts.master')

@section('title')

 Edit Registered Roles | Shameersha Of web

@endsection



@section('content')

   <div class="container">
   	<div class="row">
   		<div class="col-md-12">
   			<div class="card">
   				<div class="card-body">
   					<div class="card-header">
   						<h3>Edit Role For registered User</h3>

                
   						<form action="/role-register-update/{{ $user->id }}" method="post">
   							@csrf
   							@method('PUT')
                            <div class="form-group">
                                <label >Name</label>
                                <input type="text" class="form-control" name="username" value="{{ $user->name }}">   
                            </div>


                            <div class="form-group">
                                <label >Give Role</label>
                                <select name="usertype" class="form-control">
                                   	<option value="admin">Admin</option>
                                   	<option value="vendor">Vendor</option>
                                   	<option value="">None</option>
                                </select>   
                            </div>

                            <button type="submit" class="btn btn-success"> Update</button>
                            <a href="/role-register" class="btn btn-danger">Cancel</a>
                        </form>    
   						
   					</div>
   					
   				</div>
   				
   			</div>
   			
   		</div>
   		
   	</div>
   	
   </div>




@endsection



@section('scripts')

@endsection