<?php

namespace App\Livewire;

use Livewire\Component;

class Settings extends Component
{
    public $city;
    public $method;
    public $school;

    public function mount()
    {
        $this->city = cache()->get('settings.city');
        $this->method = cache()->get('settings.method');
        $this->school = cache()->get('settings.school');
    }

    public function updatedCity()
    {
        cache()->put('settings.city', $this->city);
    }

    public function updatedMethod()
    {
        cache()->put('settings.method', $this->method);
    }

    public function updatedSchool()
    {
        cache()->put('settings.school', $this->school);
    }

    public function render()
    {
        return view('livewire.settings');
    }
}
