<x-app-layout>
    <x-container class="flex items-center justify-center min-h-screen">
        <div
            class="grid w-full h-full max-w-screen-xl grid-cols-1 mx-auto border-2 place-content-center md:grid-cols-2 rounded-xl">
            <aside class="bg-[url('../../public/images/kid-writing.jpg')] bg-cover bg-center rounded-l-lg"></aside>
            <aside
                class="w-full min-h-[70dvh] p-6 m-auto max-h-fit flex flex-col items-center bg-green-700 rounded-r-lg">
                <h1
                    class="my-10 text-2xl font-bold text-center text-white uppercase font-poppins md:text-4xl drop-shadow-md">
                    Let's
                    keep in touch
                </h1>
                <x-form class="w-full px-6">
                    <div>
                        <x-label for="email" value="{{ __('Email') }}" class="text-white " />
                        <x-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')"
                            required autofocus autocomplete="email" />
                    </div>
                    <div>
                        <x-label for="subject" value="{{ __('Subject') }}" class="text-white" />
                        <x-input id="subject" class="block w-full mt-1" type="text" name="subject"
                            :value="old('subject')" required autofocus autocomplete="subject" />
                    </div>
                    <div>
                        <x-label for="message" value="{{ __('Message') }}" class="text-white" />
                        <x-textarea name="message" id="message" class="w-full mt-3 rounded-md min-h-32">

                        </x-textarea>
                    </div>
                    <x-button class="px-6 py-2 text-2xl font-bold text-gray-500 uppercase bg-amber-500 drop-shadow-md">
                        Submit
                    </x-button>
                </x-form>
            </aside>
        </div>
    </x-container>
</x-app-layout>