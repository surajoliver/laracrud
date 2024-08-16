<x-layout>
    <div class="col-md-8">
        <span class="h3">Product Details</span>&nbsp;<a href="/products">Back to list</a>
        <table class="mt-2">
            <tr>
                <td>Id</td>
                <td>{{$product->id}}</td>
            </tr>
            <tr>
                <td>Product</td>
                <td>{{$product->name}}</td>
            </tr>
            <tr>
                <td>Status</td>
                <td>{{$product->status}}</td>
            </tr>
            <tr>
                <td>Active</td>
                <td>
                @if($product->active===1)
                    <input type="checkbox" checked readonly />
                @else
                    <input type="checkbox" readonly />
                @endif
                </td>
            </tr>
            <tr>
                <td>Price</td>
                <td>{{$product->price}}</td>
            </tr>

            @php
                $attribs = json_decode($product->attributes, TRUE);
            @endphp
            @if($attribs)
            @foreach($attribs as $key=>$value)
            <tr>
                <td>{{ $key }}</td>
                <td>{{ $value }}</td>
            </tr>
            @endforeach
            @endif

            <tr>
                <td>Description</td>
                <td>{{$product->description}}</td>
            </tr>
            
            <tr>
                <td>Categories</td>
                <td>
                    <ul class="nav justify-content-center">
                        @foreach ($product->categories()->get() as $category)
    `                        <li class="nav-item">
                                <a class="nav-link  " href="{{ route('categories.show', $category) }}">{{ $category->name }}</a>
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
            <li class="list-group-item"><a class="" href={{ route('products.edit', $product) }}>Edit Product - {{ $product->name }}</a></li>
            <li class="list-group-item">
                <form method="post" action={{ route('products.destroy', $product->id) }}>
                    @csrf
                    @method('delete')
                    <button class="" type="submit">Delete</button>
                </form>
            </li>
        </ul>
    </div>
</x-layout>