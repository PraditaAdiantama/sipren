<?php

namespace App\View\Components\Presensi\Data;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class UnpresensiedTable extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $detail_presensi
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.presensi.data.unpresensied-table');
    }
}
