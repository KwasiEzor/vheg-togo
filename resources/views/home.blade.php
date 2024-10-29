<x-app-layout>
    <div class="w-full ">
        <header
            class="w-full min-h-screen  bg-[url('../../public/images/volunteer-bg.jpg')] bg-left-bottom bg-cover bg-gray-900/10 bg-blend-multiply">
            <div
                class="max-w-screen-xl min-h-[90Vh] h-full mx-auto grid md:grid-cols-2 grid-cols-1 text-white place-content-center p-4 drop-shadow-md">
                <div class="flex flex-col w-full h-full mt-8 space-y-10 max-h-fit">

                    <h1 class="text-3xl font-bold uppercase md:text-6xl font-poppins">
                        Lend a Helping Hand to Those who Needs
                    </h1>
                    <h3 class="text-xl font-light md:text-3xl">
                        We help young people and children to access better education and
                        also to fight against hunger and poverty
                    </h3>
                    <div class="mt-6">
                        <x-button
                            class="px-6 py-3 text-xl font-semibold text-white uppercase bg-green-600 rounded-lg md:text-2xl drop-shadow ">
                            Get Started Now
                            <i class="fa-solid fa-arrow-right"></i>
                        </x-button>
                    </div>
                </div>
            </div>
        </header>
        <x-container class="p-4 md:p-6 ">
            <section class="grid w-full grid-cols-1 gap-4 my-10 lg:grid-cols-3 md:grid-cols-2 ">
                <x-home-card>
                    <x-slot name="url">{{ asset('images/user-group.svg') }}</x-slot>
                    <x-slot name="title">Become a volunteer</x-slot>
                    <x-slot name="content">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    </x-slot>
                </x-home-card>
                <x-home-card>
                    <x-slot name="url">{{ asset('images/money-dollar.svg') }}</x-slot>
                    <x-slot name="title">Quick Fundraise</x-slot>
                    <x-slot name="content">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    </x-slot>
                </x-home-card>
                <x-home-card>
                    <x-slot name="url">{{ asset('images/donate.svg') }}</x-slot>
                    <x-slot name="title">Star a donation</x-slot>
                    <x-slot name="content">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    </x-slot>
                </x-home-card>
            </section>
            <section class="w-full my-10">
                <div class="grid grid-cols-1  md:grid-cols-2 min-h-[35dvh] sm:min-h-[60dvh] ">
                    <aside
                        class="w-full h-auto min-h-full bg-green-600 md:rounded-tr-none md:rounded-br-none card text-primary-content">
                        <figure class="relative w-full h-full overflow-hidden">
                            <img src="{{ asset('images/smiling-lady.png') }}"
                                class="absolute bottom-0 bg-clip-padding w-[80%] z-30" alt="smiling lady">
                            <img src="{{ asset('images/rainbow-bg.png') }}"
                                class="absolute bottom-0 z-10 max-h-fit left-2 opacity-55" alt=" rainbow">
                        </figure>
                    </aside>
                    <aside
                        class="w-full px-4 md:px-6 py-[10%] md:rounded-tl-none md:rounded-bl-none rounded-xl bg-white">
                        <div class="flex flex-col items-center justify-center space-y-4 bg-white">
                            <p class="text-xl text-center text-gray-500 uppercase md:text-2xl">Welcome to VHEG
                                Association</p>
                            <h1 class="text-3xl font-bold text-center text-gray-600 md:text-5xl font-poppins">Helping
                                each other can
                                make a better
                                <span class="text-green-600 underline capitalize underline-offset-4">
                                    world.
                                </span>
                            </h1>
                            <p class="max-w-sm text-center text-gray-500">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem soluta nihil
                                quia eum quos enim similique
                                voluptate in, perferendis nisi dignissimos praesentium neque perspiciatis error et
                                quidem quisquam voluptatum maxime!
                            </p>
                            <button
                                class="text-xl capitalize bg-green-600 btn max-w-fit btn-wide text-zinc-50 hover:bg-gray-700 md:text-2xl hover:scale-90">
                                discover now
                            </button>
                        </div>
                    </aside>
                </div>
            </section>
            <section class="w-full px-4 my-16 md:px-6">
                <x-page-heading>
                    <x-slot name="subtitle">our service</x-slot>
                    <x-slot name="title">we are here to help everyone</x-slot>
                    <x-slot name="paragraph">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis autem, cupiditate velit
                        tempore accusantium a eum
                        .
                    </x-slot>
                </x-page-heading>
                <div class="grid grid-cols-1 gap-4 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2">
                    <x-service-card>
                        <x-slot name="url">{{ asset('images/food.svg') }}</x-slot>
                        <x-slot name="alt">Food</x-slot>
                        <x-slot name="title">Food</x-slot>
                        <x-slot name="content">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis architecto quibusdam
                            error perspiciatis facilis
                            aperiam corrupti deleniti temporibus autem laboriosam voluptates earum dolor unde quia
                            tempora, nemo voluptas eius
                            laudantium?
                        </x-slot>
                    </x-service-card>
                    <x-service-card :active="true">
                        <x-slot name="url">{{ asset('images/education.svg') }}</x-slot>
                        <x-slot name="alt">Education</x-slot>
                        <x-slot name="title">Education</x-slot>

                        <x-slot name="content">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis architecto quibusdam
                            error perspiciatis facilis
                            aperiam corrupti deleniti temporibus autem laboriosam voluptates earum dolor unde quia
                            tempora, nemo voluptas eius
                            laudantium?
                        </x-slot>
                    </x-service-card>
                    <x-service-card>
                        <x-slot name="url">{{ asset('images/water.svg') }}</x-slot>
                        <x-slot name="alt">Pure Water</x-slot>
                        <x-slot name="title">Pure Water</x-slot>
                        <x-slot name="content">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis architecto quibusdam
                            error perspiciatis facilis
                            aperiam corrupti deleniti temporibus autem laboriosam voluptates earum dolor unde quia
                            tempora, nemo voluptas eius
                            laudantium?
                        </x-slot>
                    </x-service-card>
                    <x-service-card>
                        <x-slot name="url">{{ asset('images/health-care.svg') }}</x-slot>
                        <x-slot name="alt">Medical</x-slot>
                        <x-slot name="title">Medical</x-slot>
                        <x-slot name="content">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis architecto quibusdam
                            error perspiciatis facilis
                            aperiam corrupti deleniti temporibus autem laboriosam voluptates earum dolor unde quia
                            tempora, nemo voluptas eius
                            laudantium?
                        </x-slot>
                    </x-service-card>
                </div>
            </section>
            <section class="w-full px-4 my-10 md:px-6">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <aside class="w-full bg-white md:rounded-tr-none md:rounded-br-none rounded-xl">
                        <div class="flex flex-col items-center justify-center py-8">
                            <h4 class="text-lg text-gray-400 uppercase ">Why choose us</h4>
                            <h2
                                class="max-w-sm my-4 text-xl font-bold text-center text-gray-600 uppercase md:text-2xl font-poppins">
                                Join your
                                hand
                                with us for
                                a
                                Better
                                life and Future</h2>
                            <ul class="flex flex-col w-full max-w-md mx-auto">
                                <li class="flex flex-col px-4 border-l-2 border-gray-200">
                                    <h5 class="my-4 text-xl font-bold text-green-600">
                                        <i class="fa-solid fa-star"></i>
                                        <span class="font-bold text-md"> Our Missions </span>
                                    </h5>
                                    <p class="text-gray-500 text-md">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi
                                        temporibus quod tenetur perspiciatis dolore saepe!
                                    </p>
                                </li>
                                <li class="flex flex-col px-4 border-l-2 border-gray-200">
                                    <h5 class="my-4 text-xl font-bold text-green-600">
                                        <i class="fa-solid fa-star"></i>
                                        <span class="font-bold text-md"> Our Volunteers </span>
                                    </h5>
                                    <p class="text-gray-500 text-md">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi
                                        temporibus quod tenetur perspiciatis dolore saepe!
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </aside>
                    <aside
                        class="md:rounded-tl-none md:rounded-bl-none bg-green-600 rounded-xl h-full relative md:min-h-[50vh] min-h-fit overflow-hidden ">
                        <img src="{{ asset('images/happy-group.png') }}" class="absolute bottom-0 left-5 z-[1] isolate"
                            alt="happy volunteers group">
                        {{-- <img src="{{ asset('images/rainbow-bg.png') }}"
                            class="absloute right-0 bottom-0 max-h-[45vh] z-10" alt="rainbow"> --}}
                        <img src="{{ asset('images/rainbow-bg.png') }}"
                            class="absloute -right-14 -scale-x-[1] bottom-0 max-h-[45vh] z-20 bg-blend-multiply opacity-70"
                            alt="rainbow">

                    </aside>
                </div>
            </section>
            <section class="w-full px-4 my-16 md:px-6 ">
                <x-page-heading>
                    <x-slot name="subtitle">Take a step further</x-slot>
                    <x-slot name="title">Find your cause and join us</x-slot>
                    <x-slot name="paragraph">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis autem, cupiditate velit
                        tempore accusantium a eum
                        .
                    </x-slot>
                </x-page-heading>
                <div class="flex flex-col p-4 space-y-6 bg-white rounded-xl md:p-6">

                    <div
                        class="grid w-full h-full grid-cols-1 gap-4 p-4 bg-white md:grid-cols-3 sm:grid-cols-2 md:gap-6 rounded-xl md:p-6">
                        <x-article-card>
                            <x-slot name="url">{{ asset('images/food-for-kids.jpg') }}</x-slot>
                            <x-slot name="badge">Food action</x-slot>
                            <x-slot name="title">Promoting basic rights for children</x-slot>
                            <x-slot name="rate">50</x-slot>
                            <x-slot name="fund">25.000</x-slot>
                            <x-slot name="target">50.000</x-slot>
                            <x-slot name="content">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur esse culpa,
                                    magni
                                    dicta numquam illum repellat non
                                    a enim rem, est harum inventore corporis eligendi sint quam atque dignissimos quae!
                                </p>
                            </x-slot>
                        </x-article-card>
                        <x-article-card>
                            <x-slot name="url">{{ asset('images/kids-working.jpg') }}</x-slot>
                            <x-slot name="badge">Education</x-slot>
                            <x-slot name="title">School counseling for children</x-slot>
                            <x-slot name="rate">60</x-slot>
                            <x-slot name="fund">24.000</x-slot>
                            <x-slot name="target">40.000</x-slot>
                            <x-slot name="content">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur esse culpa,
                                    magni
                                    dicta numquam illum repellat non
                                    a enim rem, est harum inventore corporis eligendi sint quam atque dignissimos quae!
                                </p>
                            </x-slot>
                        </x-article-card>
                        <x-article-card>
                            <x-slot name="url">{{ asset('images/medical-assistance.jpg') }}</x-slot>
                            <x-slot name="badge">Medical</x-slot>
                            <x-slot name="title">Better health for everyone</x-slot>
                            <x-slot name="rate">60</x-slot>
                            <x-slot name="fund">24.000</x-slot>
                            <x-slot name="target">40.000</x-slot>
                            <x-slot name="content">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur esse culpa,
                                    magni
                                    dicta numquam illum repellat non
                                    a enim rem, est harum inventore corporis eligendi sint quam atque dignissimos quae!
                                </p>
                            </x-slot>
                        </x-article-card>
                    </div>
                    <div class="max-w-sm p-4 mx-auto">
                        <button
                            class="capitalize bg-green-600 text-md btn max-w-fit btn-wide text-zinc-50 hover:bg-gray-700 md:text-xl hover:scale-90">
                            learn more
                        </button>
                    </div>
                </div>
            </section>
            <section
                class="relative py-10 px-4 min-h-[75vh] max-h-fit bg-[url('../../public/images/volunteer-2.jpg')] bg-center bg-cover mx-auto my-16 space-y-16 max-w-screen-2xl border-2 border-transparent rounded-xl bg-gray-600 bg-blend-multiply flex flex-col items-center justify-center">
                <div
                    class="w-full h-full max-w-screen-lg mx-auto bg-gray-400 border border-gray-100 rounded-md bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-10">
                    <div class="flex flex-col max-w-screen-md p-4 mx-auto space-y-4">
                        <p class="font-bold text-white uppercase drop-shadow-md">
                            Become a volunteer
                        </p>
                        <h1 class="text-3xl font-semibold tracking-wide text-white capitalize drop-shadow-lg">
                            Join your hand with Us for a better life and future
                        </h1>
                        <button
                            class="px-5 py-2 font-bold tracking-wider text-gray-600 uppercase bg-white rounded-lg max-w-fit">
                            Get started now
                        </button>
                    </div>
                </div>
                <div class="grid w-full max-w-screen-xl grid-cols-1 p-4 md:grid-cols-2 md:p-6 rounded-xl bg-zinc-50">
                    <div class="flex flex-col items-center justify-center w-full p-4 md:p-6">
                        <div class="flex flex-col items-center justify-center space-y-3">
                            <h4 class="pl-4 text-xl font-bold text-gray-600 uppercase md:self-start">
                                upcoming events
                            </h4>
                            <h1
                                class="ml-0 text-2xl font-bold text-green-600 capitalize md:ml-4 font-poppins font-DM-Serif text-bold md:text-3xl">
                                Ready to join our latest <br />
                                upcoming events
                            </h1>
                            <p class="max-w-sm p-4 text-center text-gray-500 text-md md:text-justify">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Est
                                tenetur perspiciatis magni ipsam debitis impedit voluptates
                                doloribus molestiae rerum vitae magnam exercitationem ea,
                                cupiditate numquam, excepturi praesentium vel similique!
                                Aperiam!
                            </p>
                            <button
                                class="ml-4 capitalize bg-green-600 text-md md:self-start btn max-w-fit btn-wide text-zinc-50 hover:bg-gray-700 md:text-xl hover:scale-90">
                                Discover now
                            </button>
                        </div>
                    </div>
                    <div class="flex flex-col w-full p-4 space-y-4 md:p-6 md:space-y-6">
                        <div class="grid grid-cols-1 gap-4 lg:grid-cols-2">
                            <x-article-preview>
                                <x-slot name="url">{{ asset('images/volunteer-1.jpg')}}</x-slot>
                                <x-slot name="time">08:00</x-slot>
                                <x-slot name="city">Mombasa, Kenya</x-slot>
                                <x-slot name="content">
                                    It's a long to establish fact that a reader learn
                                </x-slot>
                            </x-article-preview>
                            <x-article-preview class="md:-translate-y-5">
                                <x-slot name="url">{{ asset('images/kids-group.jpg')}}</x-slot>
                                <x-slot name="time">08:00</x-slot>
                                <x-slot name="city">Brooklyn, New York</x-slot>
                                <x-slot name="content">
                                    It's a long to establish fact that a reader learn
                                </x-slot>
                            </x-article-preview>


                        </div>
                        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                            <x-article-preview>
                                <x-slot name="url">{{ asset('images/hygiene-kits.jpg')}}</x-slot>
                                <x-slot name="time">08:00</x-slot>
                                <x-slot name="city">Cairo, Egypt</x-slot>
                                <x-slot name="content">
                                    Your smile and your presence can make change
                                </x-slot>
                            </x-article-preview>
                            <x-article-preview class="md:-translate-y-5">
                                <x-slot name="url">{{ asset('images/bring-smile.jpg')}}</x-slot>
                                <x-slot name="time">08:00</x-slot>
                                <x-slot name="city">Addis Abeba, Ethipia</x-slot>
                                <x-slot name="content">
                                    Send gift to children and join us to collaborate
                                </x-slot>
                            </x-article-preview>

                        </div>
                    </div>
                </div>
            </section>
            <section class="w-full p-4 my-16 border-2 md:p-6 rounded-xl">
                <div class="flex flex-col space-y-6">
                    <div class="flex items-center justify-between">
                        <aside class="p-4 space-y-4">
                            <p class="text-xl text-gray-500 uppercase">our expert team</p>
                            <h1 class="text-2xl font-bold text-gray-600 capitalize md:text-3xl font-poppins">
                                Meet the team behind their <br />success stories
                            </h1>
                        </aside>
                        <aside>
                            <a wire:navigate href="{{ route('about') }}"
                                class="px-6 py-3 ml-4 text-lg font-semibold text-white capitalize bg-green-600 rounded-lg md:self-start md:text-xl drop-shadow max-w-fit">
                                Discover More
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </aside>
                    </div>
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
            </section>
        </x-container>
    </div>
</x-app-layout>