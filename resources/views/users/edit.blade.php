<x-layout>
    <div class="container h-100 mt-5">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-8 col-lg-6">
                <h3>Edit User {{ $user->name }}</h3>
                <form method="post" action="{{ route('users.update', $user) }}"  >
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name', $user->name) }}"  />
                        @error('name')
                            <span class="text-sm text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" value="{{ old('password', $user->password) }}"/>
                        @error('password')
                            <span class="text-sm text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                    @csrf
                    @method('patch')
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" value="{{ old('email', $user->email) }}"/>
                        @error('email')
                            <span class="text-sm text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <br/>
                    <button class="btn btn-primary" type="submit">Update</button>
                </form>
                

                <form method="post" class="card mt-5" action={{ route('users.update2', $user) }}  enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <input id="avatar" type="file" class="form-control" name="avatar" value={{ $user->avatar }} style="display:none" />
                        <label for="avatar" class="cursor-pointer">Click to Change Avatar</label>
                        <img src="{{ asset('storage/images/'.$user->avatar) }}" height="300" alt="avatar" />
                        @error('avatar')
                            <span class="text-sm text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button class="btn btn-primary" type="submit">Update Avatar</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
