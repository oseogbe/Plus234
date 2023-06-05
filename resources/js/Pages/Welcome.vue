<script setup>
import { Head, Link } from "@inertiajs/vue3";
</script>

<template>
    <Head title="Let's Connect" />

    <div class="selection:bg-transparent">
        <div class="flex justify-center">
            <div class="navbar fixed bg-base-100 max-w-7xl pt-8">
                <div class="navbar-start">
                    <div class="dropdown -mt-2">
                        <label tabindex="0" class="btn btn-ghost lg:hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
                        </label>
                        <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52 text-lg md:text-xl">
                            <li><a href="#">about</a></li>
                            <li><a href="#">features</a></li>
                            <li><a href="#">contact</a></li>
                        </ul>
                    </div>
                    <a class="btn btn-ghost hover:bg-transparent">
                        <Link :href="route('welcome')">
                            <img
                                src="/img/plus234/logo-alt.png"
                                alt="Plus234 logo"
                                class="w-36 mx-auto mb-7 sm:mb-14"
                            />
                        </Link>
                    </a>
                </div>
                <div class="navbar-center hidden lg:flex">
                    <ul class="menu menu-horizontal px-1 text-lg md:text-xl">
                        <li><a href="#">about</a></li>
                        <li><a href="#">features</a></li>
                        <li><a href="#">contact</a></li>
                    </ul>
                </div>
                <div class="navbar-end -mt-2">
                    <Link :href="route('login')" class="btn min-h-[2.5rem] h-[2.5rem] lg:min-h-12 bg-primary border-0 hover:bg-primary">
                        <span class="mr-1">Login</span>
                        <img class="w-5 h-5 white-icon" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCI+PGRlZnM+PHN0eWxlPi5he2ZpbGw6Izk4YTJiODt9PC9zdHlsZT48L2RlZnM+PHRpdGxlPmljb24tc2lnbi1pbjwvdGl0bGU+PHBhdGggY2xhc3M9ImEiIGQ9Ik0xNy41MywyLjY3SDEzLjhhLjk0Ljk0LDAsMCwwLS45NC45M2gwYS45NC45NCwwLDAsMCwuOTQuOTRoMy43M2EuOTIuOTIsMCwwLDEsLjkzLjkzaDBWMTguNTNhLjkyLjkyLDAsMCwxLS45My45M0gxMy44YS45NC45NCwwLDAsMC0uOTQuOTRoMGEuOTQuOTQsMCwwLDAsLjk0LjkzaDMuNzNhMi44LDIuOCwwLDAsMCwyLjgtMi44VjUuNDdhMi44LDIuOCwwLDAsMC0yLjgtMi44WiIvPjxwYXRoIGNsYXNzPSJhIiBkPSJNMTQuNjYsMTIuMzZhLjk0Ljk0LDAsMCwwLS4yLTFMOS43OSw2LjY3QS45My45MywwLDEsMCw4LjQ3LDhsMy4wOCwzLjA3aC05YS45NC45NCwwLDAsMC0uOTMuOTRoMGEuOTMuOTMsMCwwLDAsLjkzLjkzaDlMOC40NywxNmEuOTQuOTQsMCwwLDAsMCwxLjMyLjkzLjkzLDAsMCwwLC42Ni4yNy45LjksMCwwLDAsLjY2LS4yN2w0LjY3LTQuNjdBMSwxLDAsMCwwLDE0LjY2LDEyLjM2WiIvPjwvc3ZnPgo=" alt="">
                    </Link>
                </div>
            </div>
        </div>
        <section class="pt-48 bg-white">
            <div class="px-12 mx-auto max-w-7xl">
                <div
                    class="w-full mx-auto text-left md:w-11/12 xl:w-9/12 md:text-center"
                >
                    <h1
                        class="text-[2.0rem] text-center font-extrabold leading-none tracking-normal text-gray-900 lg:text-6xl md:tracking-tight"
                    >
                        <span>Share </span>
                        <span class="text-gradient">your passions </span>
                        <span>with your fans on </span>
                        <span class="text-gradient">multiple </span>
                        <span>platforms.</span>
                    </h1>
                    <p
                        class="px-0 mt-8 mb-8 text-gray-600 md:text-xl lg:px-24"
                    >
                        Start gaining the traction you've always wanted with our
                        next-level templates and designs. Crafted to help you
                        tell your story.
                    </p>
                    <div class="mb-4 space-x-0 md:space-x-2 md:mb-8">
                        <Link
                            :href="route('register')"
                            class="inline-flex items-center justify-center w-full px-6 py-3 mb-2 text-lg text-white bg-green-400 rounded-2xl sm:w-auto sm:mb-0"
                        >
                            Get Started
                            <svg
                                class="w-4 h-4 ml-1"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                        </Link>
                        <Link
                            href="#"
                            class="inline-flex items-center justify-center w-full px-6 py-3 mb-2 text-lg bg-gray-100 rounded-2xl sm:w-auto sm:mb-0"
                        >
                            Learn More
                            <svg
                                class="w-4 h-4 ml-1"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"
                                ></path>
                            </svg>
                        </Link>
                    </div>
                </div>
                <div class="w-full mx-auto mt-20 text-center md:w-10/12">
                    <div class="relative z-0 w-full mt-8">
                        <div class="relative overflow-hidden shadow-2xl">
                            <div
                                class="flex items-center flex-none px-4 bg-green-400 rounded-b-none h-11 rounded-xl"
                            >
                                <div class="flex space-x-1.5">
                                    <div
                                        class="w-3 h-3 border-2 border-white rounded-full"
                                    ></div>
                                    <div
                                        class="w-3 h-3 border-2 border-white rounded-full"
                                    ></div>
                                    <div
                                        class="w-3 h-3 border-2 border-white rounded-full"
                                    ></div>
                                </div>
                            </div>
                            <img
                                src="https://cdn.devdojo.com/images/march2021/green-dashboard.jpg"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<style scoped>
.white-icon {
    filter: brightness(0) invert(1);
}
</style>
