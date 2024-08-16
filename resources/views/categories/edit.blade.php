@php
$products = [
'1' => 'Product 1',
'2' => 'Product 2',
'3' => 'Product 3',
];
@endphp

<x-layout>
<div class="col-md-8">
    <span class="h3">Edit Category</span>
    &nbsp;
    <form class="mt-2" method="POST" action={{ route('categories.update', $category) }}>
        @csrf
        @method('patch')
        <x-forms.input type="text" label="Category Name" name="name" value="{{ $category->name }}"/>
        <x-selectMultiple  label="Products" name="products[]" :options="$products" selectval="1" />
        
        <select class="js-example-basic-multiple" name="states[]" multiple="multiple">
            <option value="AL">Alabama</option>
            <option value="WY">Wyoming</option>
        </select>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>


<div class="col-md-4">
    <h3>Sidebar</h3>
    <ul class="list-group">
        <li class="list-group-item"><a class="" href="">Add New Category</a></li>
    </ul>
</div>

</x-layout>