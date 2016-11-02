@extends('layouts.master3')

@section('content')
    <div class="col-md-12 myTop">
        <aside class="aa-properties-sidebar">
            <div class="content-panel">
                <h4><i class="fa fa-angle-right"></i> Properties Table</h4>
                <hr>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Type</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Country</th>
                            <th>Posted on</th>
                            <th>Updated on</th>
                            <th>Bedroom</th>
                            <th>Bathroom</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        @foreach( Auth::user()->properties as $uProperty )
                            <tbody>
                            <tr>
                                <td>
                                    {{$uProperty->id}} </td>
                                <td>
                                    {{ $uProperty->title }} </td>
                                <td>
                                    {{$uProperty->group->name}} </td>
                                <td>
                                    {{ $uProperty->price }}
                                </td>
                                <td>
                                    {{ $uProperty->type }}
                                </td>

                                <td>
                                    {{ $uProperty->address }}
                                </td>
                                <td>
                                    {{ $uProperty->city }}
                                </td>
                                <td>
                                    {{ $uProperty->country }}
                                </td>
                                <td>
                                    {{ $uProperty->created_at }}
                                </td>
                                <td>
                                    {{ $uProperty->updated_at }}
                                </td>

                                <td>
                                    {{ $uProperty->bedroom }}
                                </td>
                                <td>
                                    {{ $uProperty->bathroom }}
                                </td>
                                <td><a href="{{ route('details', $uProperty->id) }}">
                                        <button class="btn btn-default" value="Details">Details</button>
                                    </a></td>
                                <td><a href="{{ route('edit', $uProperty->id) }}">
                                        <button class="btn btn-primary" value="Edits">Edit</button>
                                    </a></td>
                                <td>
                                    {!! Form::open(['route' => ['delete', $uProperty->id], 'method' => 'DELETE' ]) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </aside>
    </div>
@endsection