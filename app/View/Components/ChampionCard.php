<?php

namespace App\View\Components;

use App\Models\Champion;
use Illuminate\View\Component;

class ChampionCard extends Component
{
    public $champion;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Champion $champion)
    {
        $this->champion = $champion;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.champion-card');
    }
}
