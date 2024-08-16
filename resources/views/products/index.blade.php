<x-layout>


<div class="col-md-8">
    <span class="h3">All Products</span>
    &nbsp;<a class="btn btn-sm btn-success" href={{ route('products.create') }}>Add New Product</a>
    <table class="table table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Product</th>
                <th scope="col">Status</th>
                <th scope="col">Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td><a href={{ route('products.show', $product->id) }}>{{ $product->name }}</a></td>
                    <td>{{ $product->status }}</td>
                    <td>{{ $product->price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


<div class="col-md-4">
    <h3>Sidebar</h3>
    <ul class="list-group">
        <li class="list-group-item"><a class="" href={{ route('products.create') }}>Add New Product</a></li>
    </ul>
</div>



    

  


        

</x-layout>