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
                        <th>Title</th>
                        <th>Adress</th>
                        <th>City</th>
                        <th>Country</th>
                        <th>Bedroom</th>
                        <th>Washroom</th>
                        <th>Kitchn</th>
                        <th>Details</th>
                    </tr>
                    </thead>
                    @foreach( \App\Property::all() as $property )
                        <tbody>
                        <tr>
                            <td>
                                {{$property->id}} </td>
                            <td>
                                {{ $property->title }} </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><a href="{{ route('details', $property->id) }}"><button class="btn btn-default" value="Details">Details</button></a></td>

                        </tr>


                        </tbody>
                    @endforeach
                </table>
                </h4>
            </div>

        </aside>

    </div>



@endsection