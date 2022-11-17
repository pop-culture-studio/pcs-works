<div class="bg-white border rounded p-2 m-2">
    <ul>
        @foreach($items as $item)
            <li>
                <a href="{{ $item['link'] ?? '' }}"
                   class="text-indigo-500 underline underline-offset-2 mr-2"
                   target="_blank">{{ $item['title'] ?? '' }}</a>
                {{ $item['date'] ?? '' }}
            </li>
        @endforeach
    </ul>
</div>
