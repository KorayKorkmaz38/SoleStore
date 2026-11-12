<h1>{{ $brand->name }}</h1>

<p>Land: {{ $brand->country }}</p>
<p>{{ $brand->description }}</p>

<a href="{{ route('brands.index') }}">Terug naar alle merken</a>