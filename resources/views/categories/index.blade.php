<x-layout>
    
<div class="col-md-8">
    <span class="h3">All Categories</span>
    &nbsp;<a class="btn btn-sm btn-success" href={{ route('categories.create') }}>Add New Category</a>
    <table class="table table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">category</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <th scope="row">{{ $category->id }}</th>
                    <td><a href={{ route('categories.show', $category->id) }}>{{ $category->name }}</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


<div class="col-md-4">
    <h3>Sidebar</h3>
    <ul class="list-group">
        <li class="list-group-item"><a class="" href={{ route('categories.create') }}>Add New category</a></li>
    </ul>
</div>

</x-layout>