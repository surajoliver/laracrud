<x-layout>
    <span class="h3">User Details</span>&nbsp;<a href="/users">Back to list</a>
    <table>
        <tr>
            <td>User Name</td>
            <td>{{$user->name}}</td>
        </tr>
        <tr>
            <td>

            </td>
            <td class="">     
                <div class="btn-toolbar" role="toolbar">
                <div class="btn-group" role="group">
                    <a class="btn btn-sm btn-secondary" href="{{ route('users.edit', $user->id) }}" style="margin-right:1rem;">Edit</a>
                    <form method="post" action={{ route('users.destroy', $user->id) }}>
                        @csrf
                        @method('delete')
                        <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                    </form>
                </div> 
                </div>      

            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{$user->email}}</td>
        </tr>
        <tr>
            <td>Password</td>
            <td>{{$user->password}}</td>
        </tr>
        <tr>
            <td>Avatar</td>
            <td><img src="{{ asset('storage/images/'.$user->avatar) }}" height="150" alt="avatar" /></td>
        </tr>
        
    </table>
</x-layout>