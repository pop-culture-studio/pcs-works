<?php

namespace App\View\Components;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use Illuminate\View\Component;

class SoukoRss extends Component
{
    /**
     * Create a new component instance.
     *
     * @param  Collection  $items
     * @param  string  $location
     */
    public function __construct(
        public Collection $items,
    ) {
        $url = 'https://ggijp-pcs.com/feed/json';

        $this->items = cache()->remember(
            'souko.rss',
            now()->addHours(12),
            fn () => Http::get($url)
                         ->collect('items')
                         ->take(5)
        );
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.souko-rss');
    }
}
