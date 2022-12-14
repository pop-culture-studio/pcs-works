<h2 class="text-lg text-gray-900 leading-7 font-bold">記事</h2>

<div class="ml-3 text-xs prose prose-a:text-blue-500 max-w-none">
    <ul>
        @foreach(config('articles') as $article)
            <li><a href="{{ Arr::get($article, 'url') }}" target="_blank">{{ Arr::get($article, 'title') }}</a></li>
        @endforeach
    </ul>
</div>
