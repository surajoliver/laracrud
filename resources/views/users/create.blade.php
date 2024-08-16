<x-layout>
    <div class="container h-100 mt-5">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-8 col-lg-6">
                <h3>Create User</h3>
                <form method="post" action="{{ route('users.store') }}"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}"/>
                        @error('name')
                            <span class="text-sm text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" value="{{ old('password') }}"/>
                        @error('password')
                            <span class="text-sm text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}"/>
                        @error('email')
                            <span class="text-sm text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="avatar">Avatar</label>
                        <input type="file" class="form-control" name="avatar" value="{{ old('avatar') }}"/>
                        @error('avatar')
                            <span class="text-sm text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <br/>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
