<?php

namespace App\View\Components;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use Illuminate\View\Component;

class NoteRss extends Component
{
    /**
     * Create a new component instance.
     *
     * @param  Collection  $items
     */
    public function __construct(
        public Collection $items
    ) {
        $url = 'https://d2ttuujo1i51fi.cloudfront.net/note_pcs_miraizu.json';

        $this->items = cache()->remember(
            'note.rss',
            now()->addHours(12),
            fn () => Http::get($url)
                         ->collect()
                         ->take(3)
        );
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.note-rss');
    }
}
