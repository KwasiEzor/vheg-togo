<footer class="flex flex-col items-center p-10 mt-8 bg-green-700 footer text-neutral-content">
    <div class="grid w-full max-w-screen-xl grid-cols-1 mx-auto md:grid-cols-3 sm:grid-cols-2">

        <nav class="flex flex-col space-y-1">
            <h6 class="footer-title">Services</h6>
            <div class="flex flex-col">
                <a class="link link-hover">Become a Volunteer</a>
                <a class="link link-hover">Join a Project</a>
                <a class="link link-hover">Make a donation</a>
                <a class="link link-hover">Become a Partner</a>
                <a class="link link-hover">Fund raising</a>
            </div>
        </nav>
        <nav class="flex flex-col space-y-1">
            <h6 class="footer-title">Pages</h6>
            <div class="flex flex-col">
                <a class="link link-hover" href="{{ route('about') }}" wire:navigate>About us</a>
                <a class="link link-hover" href="{{ route('contact') }}" wire:navigate>Contact</a>
                <a class="link link-hover" href="{{ route('events.index') }}" wire:navigate>Events</a>
                <a class="link link-hover" href="{{ route('projects.index') }}" wire:navigate>Projects</a>
                <a class="link link-hover" href="{{ route('posts.index') }}" wire:navigate>Blog</a>
            </div>
        </nav>
        <nav class="flex flex-col space-y-1">
            <h6 class="footer-title">Legal</h6>
            <div class="flex flex-col">
                <a class="link link-hover">Terms of use</a>
                <a class="link link-hover">Privacy policy</a>
                <a class="link link-hover">Cookie policy</a>
                <a class="link link-hover">FAQ</a>
            </div>
        </nav>
    </div>
    <hr class="w-full max-w-md my-2 text-gray-600">
    <p class="flex">
        <span>{{ now()->year }}</span> &copy; <span>VHEG</span> All rights reserved
    </p>
</footer>