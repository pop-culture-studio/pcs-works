<div class="bg-white border rounded p-2 m-2">
    <ul class="space-y-2">
        @foreach($items as $item)
            <li>
                <details>
                    <summary>
                        <a href="{{ $item['link'] ?? '' }}"
                           class="text-indigo-500 underline mr-2"
                           target="_blank">{{ $item['title'] ?? '' }}</a>
                        <time datetime="{{ $item['date'] ?? '' }}T{{ $item['time'] ?? '' }}">
                            {{ $item['date'] ?? '' }}
                        </time>
                    </summary>
                    <div class="mb-5 pl-5 prose prose-sm prose-a:text-blue-500 prose-p:text-gray-500">
                        {!! $item['description'] ?? '' !!}</div>
                </details>
            </li>
        @endforeach
    </ul>
</div>
