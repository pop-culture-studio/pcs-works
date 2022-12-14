<div class="p-6 md:px-10 bg-white border-b border-gray-200 bg-opacity-80">

    <h1 class="mt-2 text-4xl font-extrabold">
        <a href="/">
            PCS開発チームへの仕事の依頼はこちらから
        </a>
    </h1>

    <div class="mt-6 text-gray-700">
        @include('contact')
    </div>
</div>

<div class="bg-gray-100 grid grid-cols-1 md:grid-cols-2">
    <div class="md:pl-10 bg-gray-100">
        <div class="p-6">
            <h2 class="text-lg text-gray-900 leading-7 font-bold">仕事メニュー</h2>

            <div class="ml-3">
                @include('menu')
            </div>
        </div>
    </div>

    <div class="bg-gray-50 border-t border-gray-100 md:border-t-0 md:border-l">
        <div class="p-6">
            <div class="flex items-center">
                <h2 class="text-lg text-gray-900 leading-7 font-bold">制作実績</h2>
            </div>

            <div class="ml-3">
                @include('works')
            </div>
        </div>

        <div class="p-6">
            <div class="flex items-center">
                <h2 class="text-lg text-gray-900 leading-7 font-bold">関連リンク</h2>
            </div>

            <div class="ml-3">
                @include('links')
            </div>
        </div>
    </div>
</div>

<div class="p-6 md:px-10 bg-white border-t border-gray-200 bg-opacity-80">
    <div class="ml-3">
        @includeIf('profile')
    </div>

    <div class="ml-3 mt-6">
        @includeIf('articles')
    </div>
</div>
