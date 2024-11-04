<h5 class="text-l font-semibold flex justify-start">
    @foreach($links as $link)
        <a href="{{ $link["route"] }}" class="mx-2 text-blue-500 hover:text-blue-600">
            {{ $link["name"] }}
        </a>
        \
        <strong class="mx-2">{{ $last }}</strong>
    @endforeach
</h5>