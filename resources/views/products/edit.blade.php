<x-layout>
@php
$status = [
    '' => 'Please select a status',
    'available' => 'Available',
    'out-of-stock' => 'Out of Stock',
    'discontinued' => 'Discontinued'
];
$users = [];
$users[""] ="Please select a user";
foreach(\App\Models\User::all() as $user) {
    $users[$user->id] = $user->name;
}

$colors = [
    "" => "Please select a color",
    "red" => "Red",
    "white" => "White",
    "gray" => "Gray"
];

//$attribs = $product->attributes;
$att = $product->attributes;
$attrib = [];
if ($att <> "") {
    $attrib = json_decode($att, true);
}

$color = array_key_exists('color', $attrib) ? $attrib['color'] : '';



@endphp


<div class="col-md-8">
    <span class="h3">Edit Product - {{ $product->name }}</span>
    &nbsp;
    <form class="mt-2" method="POST" action={{ route('products.update', $product) }}>
        @csrf
        @method('PATCH')    
        <x-forms.input type="text" label="Product Name" name="name" value="{{ $product->name }}" />
        <x-forms.textarea  label="Description" name="description" rows="3">{{ $product->description }}</x-forms.textarea>
        <x-forms.input type="text" label="Price" name="price"  value="{{ $product->price }}" />
        <x-forms.input type="checkbox" label="Active" name="active" value="{{ $product->active }}" checked="{{$product->active}}" />
        <x-forms.select name="status" label="Status" :options="$status" selectval="{{ $product->status }}" />
        <x-forms.select name="user_id" label="User" :options="$users" selectval="{{ $product->user_id }}" />
        <x-forms.select name="color" label="Color" :options="$colors" selectval="{{ $color }}" />
        
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>


<div class="col-md-4">
    <h3>Sidebar</h3>
    <ul class="list-group">
        <li class="list-group-item"><a class="" href="">Add New Product</a></li>
    </ul>
</div>

</x-layout>