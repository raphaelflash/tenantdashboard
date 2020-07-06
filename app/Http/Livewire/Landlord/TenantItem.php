<?php

namespace App\Http\Livewire\Landlord;

use App\Tenant;
use Illuminate\Support\Facades\Artisan;
use Livewire\Component;
use Illuminate\Support\Str;

class TenantItem extends Component
{
    public $tenant;
    public $name;
    public $domain;
    public $db;
    public $status;
    public $needMigration = false;

    public function mount(Tenant $tenant)
    {
        $this->tenant = $tenant;
        $this->name = $tenant->name;
        $this->domain = $tenant->domain;
        $this->db =   Str::afterLast($tenant->database, '/');
        $this->status = $tenant->configure()->use()->connected();
        if ($this->status) {
            $this->needMigration = Artisan::call('migrate:status');
        }
    }

    public function updatedDb($value)
    {
        $this->tenant->database = database_path($value);
        $this->status = $this->tenant->configure()->use()->connected();
        $this->tenant->refresh();
    }

    public function migrate()
    {
        $this->tenant->configure()->use();
        Artisan::call('migrate');
        $this->needMigration = Artisan::call('migrate:status');
    }

    public function save()
    {
        $this->tenant->update([
            'name' => $this->name,
            'domain' => $this->domain,
            'database' => database_path($this->db)
        ]);

        $this->redirect("/dashboard/tenant/".$this->tenant->id);
    }

    public function render()
    {
        return view('livewire.landlord.tenant-item');
    }
}
