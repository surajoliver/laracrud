<x-layout>
    <span class="h3">All Users</span>
    &nbsp;<a class="btn btn-sm btn-success" href={{ route('users.create') }}>Add User</a>
    

    <div class="container mt-5">
    <ul class="list-group">
        @foreach ($users as $user)
            <li class="list-group-item">
                <a href="{{ route('users.show', $user->id) }}">
                    <h5 >{{ $user->name }}</h5>
                    <p class="card-text">{{ $user->email }}</p>
                </a>
            </li>
        @endforeach
        
    </ul>
    </div>    


        

</x-layout>