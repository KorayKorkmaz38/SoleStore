<h1>Alle merken</h1>

<ul>
    @foreach ($brands as $brand)
        <li>
            <a href="{{ route('brands.show', $brand->id) }}">{{ $brand->name }}</a>
            ({{ $brand->country }})
        </li>
    @endforeach
</ul>