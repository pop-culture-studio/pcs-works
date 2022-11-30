<div class="bg-white border rounded p-2 m-2">
    <ul class="space-y-1">
        @foreach($items as $item)
            <li>
                <a href="{{ $item['link'] ?? '' }}"
                   class="text-indigo-500 underline underline-offset-2 mr-2"
                   target="_blank">{{ $item['title'] ?? '' }}</a>
                <time datetime="{{ $item['date'] ?? '' }}T{{ $item['time'] ?? '' }}">{{ $item['date'] ?? '' }}</time>
            </li>
        @endforeach
    </ul>
</div>
