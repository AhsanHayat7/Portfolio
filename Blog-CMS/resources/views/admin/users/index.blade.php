@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
        Users
    </div>
</div>

    <table class="table table-bordered table-dark">
        <thead>
            <tr>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Permissions</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>

            @if ($users->count() > 0)
                @foreach ($users as $user)
                    <tr>
                        <td>
                            <a data-fancybox="Users-images" href="">
                                <img src="{{ asset($user->profile->avatar) }}" alt="" style="max-width: 100px;">
                            </a>
                        </td>
                        <td>
                            {{$user->name}}
                        </td>
                        <td>
                            @if ($user->admin)

                                <a href="{{route('user.not.admin',['id'=>$user->id])}}" class="btn btn-xs btn-danger">Remove Permission</a>
                            @else
                                <a href="{{route('user.admin',['id'=>$user->id])}}" class="btn btn-xs btn-success">Make a Admin</a>
                            @endif
                        </td>
                        <td>
                            @if(Auth::id() !== $user->id)
                            <a href="{{ route('user.profile.delete', ['id' => $user->id]) }}" class="btn btn-xs btn-danger">Trashed</a>
                                <span class="glyphicon  glyphicon-trash"></span>
                            @endif

                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <th colspan="5" class="text-center">No Users</th>
                </tr>
            @endif

        </tbody>
    </table>


@endsection
