<div class="mt-2 text-sm text-gray-500">
    <div>こんなことができますという例。</div>
    <div class="divide-y">
        @foreach (collect(config('menu')) as $menu)
            <div class="py-3">
                <h3 class="font-bold text-lg">{{ $menu['title'] ?? '' }}</h3>

                <div>{!! $menu['text'] ?? '' !!}</div>
            </div>
        @endforeach
    </div>
</div>
