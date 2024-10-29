<x-app-layout>
    <x-container class="">
        @if (request()->routeIs('about'))
        <x-page-banner
            class="bg-[url('../../../public/images/volunteers-working.jpg')] group bg-center bg-cover  bg-blend-multiply flex flex-col items-center justify-center">
            <div class="flex flex-col w-full max-w-lg p-4 space-y-3 text-white md:p-6">
                <h1
                    class="text-4xl font-bold text-center uppercase transition-all duration-150 ease-out cursor-pointer md:text-6xl drop-shadow-lg group-hover:text-green-500 group-hover:stroke-white">
                    About us</h1>
            </div>
        </x-page-banner>
        @endif
        <div class="max-w-full min-h-full">
            <div class="w-full">
                <h1 class="my-6 text-3xl font-bold text-center text-green-600 capitalize font-poppins">Who are we?</h1>
                <blockquote class="max-w-xl mx-auto ">
                    <p class="italic leading-6 tracking-wider text-center text-gray-500">
                        <i class="fa-solid fa-quote-left"></i>
                        Everybody can be great...because anybody can serve. You don't have to have a college degree to
                        serve. You don't have to
                        make your subject and verb agree to serve. You only need a heart full of grace. A soul generated
                        by
                        love.
                        <i class="fa-solid fa-quote-right"></i>
                        <span class="font-bold text-gray-700">Martin Luther King Jr.</span>
                    </p>
                </blockquote>
            </div>
            <div class="grid grid-cols-1 my-10 md:grid-cols-2 md:gap-x-4">

                <section class="flex items-center justify-end w-full overflow-hidden ">
                    <img src="{{ asset('images/lady-donate.jpg') }}" class="w-full rounded-xl md:self-end"
                        alt="Lady image">
                </section>
                <section class="flex flex-col w-full p-4 space-y-6 shadow-md rounded-xl">
                    <div class="px-2">

                        <h1 class="mb-3 ml-4 text-xl font-bold">Our Mission</h1>
                        <p class="p-3 text-lg text-gray-500 bg-zinc-200/50 rounded-xl">Lorem ipsum dolor sit amet
                            consectetur
                            adipisicing elit. Odit
                            nam
                            doloremque sequi voluptas libero assumenda voluptates nobis distinctio odio ullam nemo
                            molestiae officia quas laborum labore eligendi, iste suscipit rem. <br>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. In tenetur aspernatur, repellat
                            illum numquam, consequatur sed deleniti, sapiente aliquam dolorem dolorum. Distinctio odit
                            hic doloremque suscipit pariatur corporis cupiditate similique!
                        </p>
                    </div>
                    <div class="px-2">

                        <h1 class="mb-3 ml-4 text-xl font-bold">Our Vision</h1>
                        <p class="p-3 text-lg text-gray-500 bg-zinc-200/50 rounded-xl">Lorem ipsum dolor sit amet
                            consectetur
                            adipisicing elit. Odit
                            nam
                            doloremque sequi voluptas libero assumenda voluptates nobis distinctio odio ullam nemo
                            molestiae officia quas laborum labore eligendi, iste suscipit rem. <br>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. In tenetur aspernatur, repellat
                            illum numquam, consequatur sed deleniti, sapiente aliquam dolorem dolorum. Distinctio odit
                            hic doloremque suscipit pariatur corporis cupiditate similique!
                        </p>
                    </div>
                    <div class="px-2">

                        <h1 class="mb-3 ml-4 text-xl font-bold">Our Members</h1>
                        <p class="p-3 text-lg text-gray-500 bg-zinc-200/50 rounded-xl">Lorem ipsum dolor sit amet
                            consectetur
                            adipisicing elit. Odit
                            nam
                            doloremque sequi voluptas libero assumenda voluptates nobis distinctio odio ullam nemo
                            molestiae officia quas laborum labore eligendi, iste suscipit rem.
                        </p>
                    </div>

                </section>
            </div>

            <div class="w-full mb-10">
                <h1 class="my-6 text-3xl font-bold text-center text-green-600 capitalize font-poppins">Our Heros Behind
                    the Scene</h1>
                <blockquote class="max-w-xl mx-auto ">
                    <p class="italic leading-6 tracking-wider text-center text-gray-500">
                        <i class="fa-solid fa-quote-left"></i>
                        Volunteering is an act of heroism on a grand scale. And it matters profoundly. It does more than
                        help people beat the
                        odds, it changes the odds.
                        <i class="fa-solid fa-quote-right"></i>
                        <span class="font-bold text-gray-700">President William J. Clinton</span>
                    </p>
                </blockquote>
            </div>
            <div class="w-full p-4">
                <h1 class="mb-6 text-2xl font-bold text-center font-poppins">Our Leading Members</h1>
                <div class="grid grid-cols-1 gap-4 py-10 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2">
                    <x-member-card>
                        <x-slot name="url">{{ asset('images/profile-7.jpg') }}</x-slot>
                        <x-slot name="username">John Smith</x-slot>
                        <x-slot name="title">Volunteer</x-slot>
                    </x-member-card>
                    <x-member-card :is_member="true">
                        <x-slot name="url">{{ asset('images/profile-2.jpg') }}</x-slot>
                        <x-slot name="username">Pamela Anderson</x-slot>
                        <x-slot name="title">Volunteer</x-slot>
                    </x-member-card>
                    <x-member-card>
                        <x-slot name="url">{{ asset('images/profile-6.jpg') }}</x-slot>
                        <x-slot name="username">Kevin Douglas</x-slot>
                        <x-slot name="title">Volunteer</x-slot>
                    </x-member-card>
                    <x-member-card>
                        <x-slot name="url">{{ asset('images/profile-1.jpg') }}</x-slot>
                        <x-slot name="username">Jenny White</x-slot>
                        <x-slot name="title">Volunteer</x-slot>
                    </x-member-card>
                </div>
            </div>
            <div class="w-full p-4 mb-10">
                <h1 class="mb-6 text-2xl font-bold text-center font-poppins">Our Members</h1>
                <div class="grid grid-cols-1 gap-4 py-10 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2">
                    <x-member-card>
                        <x-slot name="url">{{ asset('images/profile-3.jpg') }}</x-slot>
                        <x-slot name="username">Tiwa Omoyola</x-slot>
                        <x-slot name="title">Volunteer</x-slot>
                    </x-member-card>
                    <x-member-card>
                        <x-slot name="url">{{ asset('images/profile-4.jpg') }}</x-slot>
                        <x-slot name="username">Vishua Amnarit</x-slot>
                        <x-slot name="title">Volunteer</x-slot>
                    </x-member-card>
                    <x-member-card>
                        <x-slot name="url">{{ asset('images/profile-9.jpg') }}</x-slot>
                        <x-slot name="username">David Carrington</x-slot>
                        <x-slot name="title">Volunteer</x-slot>
                    </x-member-card>
                    <x-member-card>
                        <x-slot name="url">{{ asset('images/profile-10.jpg') }}</x-slot>
                        <x-slot name="username">Andrea Silva</x-slot>
                        <x-slot name="title">Volunteer</x-slot>
                    </x-member-card>
                </div>
            </div>
        </div>
    </x-container>
</x-app-layout>