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

@endphp


<div class="col-md-8">
    <span class="h3">Create Products</span>
    &nbsp;
    <form class="mt-2" method="POST" action={{ route('products.store') }}>
        @csrf
        <x-forms.input type="text" label="Product Name" name="name" />
        <x-forms.textarea  label="Description" name="description" rows="3"/>
        <x-forms.input type="text" label="Price" name="price" />
        <x-forms.input type="checkbox" label="Active" name="active" />
        <x-forms.select name="status" label="Status" :options="$status"  />
        <x-forms.select name="user_id" label="User" :options="$users"  />
        <x-forms.select name="color" label="Color" :options="$colors"  />
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


<div class="col-md-4">
    <h3>Sidebar</h3>
    <ul class="list-group">
        <li class="list-group-item"><a class="" href="">Add New Product</a></li>
    </ul>
</div>

</x-layout>