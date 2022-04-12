<div class="mt-2 text-sm text-gray-700">
    <div>こんなことができますという例。</div>
    <div class="divide-y">
        @foreach (collect(config('menu')) as $menu)
            <div class="py-3">
                <h3 class="font-bold text-xl text-gray-900">{{ $menu['title'] ?? '' }}</h3>

                <div class="mt-1">{!! $menu['text'] ?? '' !!}</div>
            </div>
        @endforeach
    </div>
    <div>
        <img src="{{ asset('images/working.jpg') }}" class="w-full shadow-lg rounded-md" alt="仕事一覧" title="仕事一覧">
    </div>
</div>
