@extends('layouts.master')

@section('title')

Registered Roles | Shameersha Of web

@endsection



@section('content')



      <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Registered Roles</h4>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Name
                      </th>
                      <th>
                        Phone
                      </th>

                       <th>
                        User Type
                      </th>
                      <th>
                        Email
                      </th>
                      <th >
                        Edit
                      </th>
                      <th >
                        Delete
                      </th>
                    </thead>
                      @foreach($user as $users)
                    <tbody>
                      <tr>
                        <td>
                         {{ $users->name }}
                        </td>
                        <td>
                          {{ $users->phone }}
                        </td>
                        <td>
                          {{ $users->email }}
                        </td>

                         <td>
                          -{{ $users->user_type }}
                        </td>
                        <td >
                          <a href="/role-edit/{{ $users->id }}" class="btn btn-warning">Edit</a>
                        </td>
                         <td >



                          <form action="/role-delete/{{ $users->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                            
                          </form>
                          {{-- <a href="/role-delete/{{ $users->id }}" class="btn btn-danger">Delete</a> --}}
                        </td>
                      </tr>
                      
                   
                    </tbody>

                       @endforeach
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection



@section('scripts')

@endsection

