@extends('Layouts.mainLayouts')
@section('title','Leave Type')
@section('content')

    <div class="container mt-4 ">
        <h4 class="text-center">All Users</h4>
        <table class="table table-striped">
            <thead>
            <tr class="tableHeader">
                <th style="color:#fff">#</th>
                <th style="color:#fff">Name</th>
                <th style="color:#fff">Position</th>
                <th style="color:#fff">Status</th>
                <th style="color:#fff">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                @foreach($allUsers as $index=>$user )
                    <td style="color:#fff">{{$index+1}}</td>
                    <td style="color:#fff">{{$user->name}}</td>
                    <td style="color:#fff">{{$user->position}}</td>
                    <td >
                        @if($user->status === 'active')
                            <a href=""><button type="button" class="btn bg-success">{{$user->status}}</button></a>
                        @else
                            <a href=""><button type="button" class="btn bg-danger">{{$user->status}}</button></a>
                        @endif
                    </td>
                    <td><a href="" class="btn btn-danger">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
            </tr>
            @endforeach

            </tbody>
        </table>

    </div>
@endsection
