<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Settings;
use Livewire\Attributes\On;

class AdminSidebar extends Component
{
    #[On('settings-updated')]
    public function render()
    {
        $sidebar =Settings::lastest()->first();
        return view('livewire.admin-sidebar',['sidebar' => $sidebar]);
    }
}
