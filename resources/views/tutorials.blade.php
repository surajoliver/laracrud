<x-layout>
    <p>Inside tutorials</p>
    <table class="table">
        <tr>
            <td>Route Listings</td>
            <td>"{{ route('users.index') }}"</td>
            <td>"{{ route('users.edit', 12) }}"</td>
        </tr>
    </table>
    <h2>Main Content</h2>
<p>This is the main content area.</p>

<h3>Test bootstrap</h3>
<button class="btn btn-primary">Primary</button>
<button class="btn btn-secondary">Secondary</button>

</x-layout>