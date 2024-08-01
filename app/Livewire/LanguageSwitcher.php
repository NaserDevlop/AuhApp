<?php
namespace App\Livewire;

use Livewire\Component;

class LanguageSwitcher extends Component
{
    public $language;

    public function mount()
    {
        $this->language = app()->getLocale();
    }

    // public function switchLanguage($lang)
    // {
    //     $this->language = $lang;
    //     app()->setLocale($lang);
    //     session()->put('locale', $lang);
    // }

    public function switchLanguage()
    {
        if ($this->language === 'en') {
            $this->language = 'ar';
        } else {
            $this->language = 'en';
        }

        app()->setLocale($this->language);
        session()->put('locale', $this->language);

        // Reload the page to apply the language change
        // return redirect()->route('current_route_name');
    }


    public function render()
    {
        return view('livewire.language-switcher');
    }
}
