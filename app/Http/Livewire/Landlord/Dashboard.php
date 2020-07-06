<?php

namespace App\Http\Livewire\Landlord;

use App\Tenant;
use Livewire\Component;
use Illuminate\Support\Str;

class Dashboard extends Component
{
    public $tenants;

    public function mount()
    {
        $this->tenants = Tenant::all()->map(function ($tenant) {
            return array_merge($tenant->toArray(), [
                'database' =>  Str::afterLast($tenant->database, '/'),
                'connected' => $tenant->configure()->use()->connected()
            ]);
        })->toArray();
    }

    public function showTenant($id)
    {
        $this->redirect("/dashboard/tenant/$id");
    }

    public function render()
    {
        return view('livewire.landlord.dashboard');
    }
}
