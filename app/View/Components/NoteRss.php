<?php

namespace App\View\Components;

use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class NoteRss extends Component
{

    /**
     * Create a new component instance.
     *
     * @param  Collection  $items
     */
    public function __construct(public Collection $items)
    {
        $this->items = cache()->remember('note.rss', now()->addHours(12), function () {
            $items = collect();
            $xml = simplexml_load_file('https://note.com/pcs_miraizu/rss');
            foreach ($xml->channel->item as $item) {
                $items->push([
                    'title' => (string) $item->title,
                    'link' => (string) $item->link,
                    'date' => Carbon::parse($item->pubDate)->toDateString(),
                ]);
            }

            return $items->take(3);
        });
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
