@extends('layouts.master3')

@section('content')





        <div class="col-md-12 myTop">
            <aside class="aa-properties-sidebar">
                <div class="content-panel">
                <h4><i class="fa fa-angle-right"></i> Users Table</h4>
                <hr>
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                    </thead>
                    @foreach(App\User::all() as $user)
                    <tbody>
                        <tr>
                            <td>
                                {{$user->id}} </td>
                            <td>
                                {{$user->name}} </td>
                            <td>
                                {{$user->email}} </td>
                        </tr>


                    </tbody>
                    @endforeach
                </table>
                </h4>
                    </div>

            </aside>

        </div>






@endsection