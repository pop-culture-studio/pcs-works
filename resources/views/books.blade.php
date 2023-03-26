<h2 class="text-lg text-gray-900 leading-7 font-bold">Zenn 技術書</h2>

<div class="ml-3 text-xs prose prose-a:text-blue-500 max-w-none">
    <ul>
        @foreach(config('books') as $book)
            <li><a href="{{ Arr::get($book, 'url') }}" target="_blank">{{ Arr::get($book, 'title') }}</a></li>
        @endforeach
    </ul>
</div>
