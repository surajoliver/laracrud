<x-layout>
<div class="col-md-8">
        <span class="h3">Category Details</span>&nbsp;<a href="/categories">Back to list</a>
        <table class="mt-2">
            <tr>
                <td>Id</td>
                <td>{{$category->id}}</td>
            </tr>
            <tr>
                <td>Category Name</td>
                <td>{{$category->name}}</td>
            </tr>
            <tr>
                <td>Products</td>
                <td>
                    <ul class="nav flex-column">
                        @foreach ($category->products()->get() as $product)
    `                        <li class="nav-item">
                                <a class="nav-link  " href="{{ route('products.show', $product) }}">{{ $product->name }}</a>
                            </li>
                        @endforeach
                    </ul>

                </td>
            </tr>
            
        </table>
    </div>
    <div class="col-md-4">
        <h3>Sidebar</h3>
        <ul class="list-group">
            <li class="list-group-item"><a class="" href={{ route('categories.edit', $category) }}>Edit category - {{ $category->name }}</a></li>
            <li class="list-group-item">
                <form method="post" action={{ route('categories.destroy', $category->id) }}>
                    @csrf
                    @method('delete')
                    <button class="" type="submit">Delete</button>
                </form>
            </li>
        </ul>
    </div>
</x-layout>