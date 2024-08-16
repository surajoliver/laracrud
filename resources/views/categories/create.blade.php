<x-layout>



<div class="col-md-8">
    <span class="h3">Create categories</span>
    &nbsp;
    <form class="mt-2" method="POST" action={{ route('categories.store') }}>
        @csrf
        <x-forms.input type="text" label="Category Name" name="name" />
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


<div class="col-md-4">
    <h3>Sidebar</h3>
    <ul class="list-group">
        <li class="list-group-item"><a class="" href="">Add New Category</a></li>
    </ul>
</div>

</x-layout>