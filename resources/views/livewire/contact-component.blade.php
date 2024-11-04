<div
    class="grid w-full h-full max-w-screen-xl grid-cols-1 mx-auto border-2 place-content-center md:grid-cols-2 rounded-xl">
    <aside class="bg-[url('../../public/images/kid-writing.jpg')] bg-cover bg-center rounded-l-lg"></aside>
    <aside class="w-full min-h-[70dvh] p-6 m-auto max-h-fit flex flex-col items-center bg-green-700 rounded-r-lg">
        <h1 class="my-10 text-2xl font-bold text-center text-white uppercase font-poppins md:text-4xl drop-shadow-md">
            Let's
            keep in touch
        </h1>
        <x-form wire:submit.prevent='save' class="w-full px-6">
            @method('POST')
            @csrf
            <div>
                <x-label for="email" value="{{ __('Email') }}" class="text-white " />
                <x-input id="email" wire:model='email' class="block w-full mt-1" type="email" name="email"
                    :value="old('email')" required autofocus autocomplete="email" />
                <x-input-error for="email" class="mt-2" />
            </div>
            <div>
                <x-label for="subject" value="{{ __('Subject') }}" class="text-white" />
                <x-input id="subject" class="block w-full mt-1" wire:model='subject' type="text" name="subject"
                    :value="old('subject')" required autofocus autocomplete="subject" />
                <x-input-error for="subject" class="mt-2" />
            </div>
            <div>
                <x-label for="message" value="{{ __('Message') }}" class="text-white" />
                <x-textarea name="message" id="message" wire:model='message' class="w-full mt-3 rounded-md min-h-32">

                </x-textarea>
                <x-input-error for="message" class="mt-2" />
            </div>
            <x-button size="md" color="white">
                Submit
            </x-button>
        </x-form>
    </aside>

</div>
