<div>

    @if ($language === 'en')
    <img src="icons/language.svg" alt=""  style="width:30px" wire:click="switchLanguage">
        @else
        <img src="icons/language-2.svg" alt=""  style="width:30px" wire:click="switchLanguage">
        @endif

    {{-- <h1>{{ __('messages.welcome') }}</h1> --}}

</div>
