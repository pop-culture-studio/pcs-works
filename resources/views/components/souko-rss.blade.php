<div class="bg-white border rounded p-2 my-2">
    <ul class="grid grid-flow-col space-x-2 sm:space-x-0">
        @foreach($items as $item)
            <li>
                <a href="{{ $item['url'] ?? '' }}" target="_blank">
                    <img src="{{ $item['image'] }}"
                         alt="{{ $item['title'] ?? '' }}"
                         title="{{ $item['title'] ?? '' }}"
                         class="w-20 rounded shadow hover:shadow-md"
                    >
                </a>
            </li>
        @endforeach
    </ul>
</div>
