@extends('Layouts.mainLayouts')
@section('title','Users')
@section('content')
    <div class="container mt-4 mb-3">
        <h4 class="text-center mb-5">All Users</h4>
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
                            <form action="{{ route('users.deactivate', $user->id) }}" method="post">
                                @csrf
                                <button type="submit" class="btn bg-success" onsubmit="return confirm('Are you sure you want to deactivate this user?');">{{$user->status}}</button>
                            </form>
                        @else
                            <form action="{{ route('users.activate', $user->id) }}" method="post">
                                @csrf
                                <button type="submit" class="btn bg-danger" onsubmit="return confirm('Are you sure you want to deactivate this user?');">{{$user->status}}</button>
                            </form>
                        @endif
                    </td>
                    <td>
                        <form action="{{ route('users.delete', $user->id) }}" method="post">
                            @csrf
                            <button type="submit" class="btn bg-danger" onsubmit="return confirm('Are you sure you want to delete this user?');"><span class="fas fa-trash"></span></button>
                        </form>
                    </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
