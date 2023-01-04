<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Status extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $status, $id, $table;
    public function __construct($status, $id, $table)
    {
        $this->status = $status;
        $this->id     = $id;
        $this->table  = $table;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.status');
    }
}
