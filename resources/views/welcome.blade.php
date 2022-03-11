<div class="p-6 sm:px-20 bg-white border-b border-gray-200 bg-opacity-60">

    <h1 class="mt-2 text-2xl font-extrabold">
        ポップカルチャースタジオ未来図(PCS)への仕事の依頼はこちらから
    </h1>

    <div class="mt-6 text-gray-500">
        @include('contact')
    </div>
</div>

<div class="p-6 sm:px-20 bg-gray-100 bg-opacity-60 grid grid-cols-1 md:grid-cols-2">
    <div class="py-3">
        <div class="flex items-center">
            <h2 class="text-lg text-gray-800 leading-7 font-bold">仕事メニュー</h2>
        </div>

        <div class="ml-6">
            @include('menu')
        </div>
    </div>

    <div class="p-3 border-t border-gray-100 md:border-t-0 md:border-l">
        <div class="flex items-center">
            <h2 class="text-lg text-gray-800 leading-7 font-bold">制作実績</h2>
        </div>

        <div class="ml-6">
            @include('works')
        </div>
    </div>
</div>
