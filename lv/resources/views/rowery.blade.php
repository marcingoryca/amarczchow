<x-layout>
    <div class="container_bc">
    @foreach ($bike_categories as $bc)
        <div class="box_bc">
            <a href="" title="{{ $bc->category_name }}">
            <div>
            <h2>{{ $bc->category_name }}</h2>
            <p class="small-text">{{ $bc->description }}</p>
            <img class="image_bc" src="{{ asset('storage/' . $bc->image_path) }}" alt="{{ $bc->image_path }}">
            </div>
            </a>
        </div>
    @endforeach
</div>
</x-layout>