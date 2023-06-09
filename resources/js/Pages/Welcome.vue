<script setup>
import { Head, Link } from "@inertiajs/vue3";

window.addEventListener("scroll", function () {
    let navbar = document.getElementById("navbar");
    let content = document.getElementById("content");
    let contentRect = content.getBoundingClientRect();

    if (contentRect.top < 0) {
        navbar.classList.add("shadow");
    } else {
        navbar.classList.remove("shadow");
    }
});
</script>

<template>
    <Head title="Let's Connect" />

    <div class="selection:bg-transparent">
        <div class="flex justify-center">
            <!-- max-w-[85rem] pt-10 sm:px-6 lg:px-8 lg:pt-14 mx-auto -->

            <!-- grid sm:grid-cols-2 lg:grid-cols-3 gap-6 -->
            <div
                id="navbar"
                class="w-full flex justify-center items-center h-[4.5rem] md:h-24 fixed bg-base-100 z-50"
            >
                <div
                    class="navbar fixed bg-base-100 px-12 lg:px-16 mx-auto max-w-7xl"
                >
                    <div class="navbar-start">
                        <div class="dropdown -mt-2">
                            <label
                                tabindex="0"
                                class="btn btn-ghost lg:hidden -ml-1 px-0"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-6 w-6"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 6h16M4 12h8m-8 6h16"
                                    />
                                </svg>
                            </label>
                            <ul
                                tabindex="0"
                                class="menu menu-sm dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52 text-lg md:text-xl"
                            >
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
                                    class="w-28 sm:w-36 mx-auto mb-2 sm:mb-14 -ml-1"
                                />
                            </Link>
                        </a>
                    </div>
                    <div class="navbar-center hidden lg:flex">
                        <ul
                            class="menu menu-horizontal px-1 text-lg md:text-xl"
                        >
                            <li><a href="#">about</a></li>
                            <li><a href="#">features</a></li>
                            <li><a href="#">contact</a></li>
                        </ul>
                    </div>
                    <div class="navbar-end lg:px-4 -mt-2">
                        <Link
                            :href="route('login')"
                            class="btn min-h-[2.1rem] h-[2.1rem]lg:min-h-12 bg-primary border-0 hover:bg-primary"
                        >
                            <span class="text-sm lowercase mr-1 lg:text-base"
                                >Login</span
                            >
                            <img
                                class="w-5 h-5 white-icon"
                                src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCI+PGRlZnM+PHN0eWxlPi5he2ZpbGw6Izk4YTJiODt9PC9zdHlsZT48L2RlZnM+PHRpdGxlPmljb24tc2lnbi1pbjwvdGl0bGU+PHBhdGggY2xhc3M9ImEiIGQ9Ik0xNy41MywyLjY3SDEzLjhhLjk0Ljk0LDAsMCwwLS45NC45M2gwYS45NC45NCwwLDAsMCwuOTQuOTRoMy43M2EuOTIuOTIsMCwwLDEsLjkzLjkzaDBWMTguNTNhLjkyLjkyLDAsMCwxLS45My45M0gxMy44YS45NC45NCwwLDAsMC0uOTQuOTRoMGEuOTQuOTQsMCwwLDAsLjk0LjkzaDMuNzNhMi44LDIuOCwwLDAsMCwyLjgtMi44VjUuNDdhMi44LDIuOCwwLDAsMC0yLjgtMi44WiIvPjxwYXRoIGNsYXNzPSJhIiBkPSJNMTQuNjYsMTIuMzZhLjk0Ljk0LDAsMCwwLS4yLTFMOS43OSw2LjY3QS45My45MywwLDEsMCw4LjQ3LDhsMy4wOCwzLjA3aC05YS45NC45NCwwLDAsMC0uOTMuOTRoMGEuOTMuOTMsMCwwLDAsLjkzLjkzaDlMOC40NywxNmEuOTQuOTQsMCwwLDAsMCwxLjMyLjkzLjkzLDAsMCwwLC42Ni4yNy45LjksMCwwLDAsLjY2LS4yN2w0LjY3LTQuNjdBMSwxLDAsMCwwLDE0LjY2LDEyLjM2WiIvPjwvc3ZnPgo="
                                alt=""
                            />
                        </Link>
                    </div>
                </div>
            </div>
        </div>
        <div id="content" class="pt-48 bg-white">
            <div class="px-12 mx-auto max-w-7xl">
                <!-- Hero -->
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
                    <p class="px-0 mt-8 mb-8 text-gray-600 md:text-xl lg:px-24">
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
                <!-- End of Hero -->

                <!-- Search Events -->
                <div class="relative overflow-hidden">
                    <div class="mx-auto sm:px-6 lg:px-8 pt-20 sm:pt-24">
                        <div class="text-center">
                            <h1
                                class="text-3xl sm:text-5xl font-bold text-gray-800 dark:text-gray-200"
                            >
                                Events
                            </h1>

                            <p
                                class="mt-3 md:text-xl text-gray-600 dark:text-gray-400"
                            >
                                Don't miss out on the most anticipated events in
                                your area.
                            </p>

                            <div
                                class="mt-7 sm:mt-12 mx-auto max-w-xl relative"
                            >
                                <!-- Form -->
                                <form>
                                    <div
                                        class="relative z-10 flex space-x-3 p-3 bg-white border rounded-lg shadow-lg shadow-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:shadow-gray-900/[.2]"
                                    >
                                        <div class="flex-[1_0_0%]">
                                            <label
                                                for="hs-search-event-1"
                                                class="block text-sm text-gray-700 font-medium dark:text-white"
                                                ><span class="sr-only"
                                                    >Search event</span
                                                ></label
                                            >
                                            <input
                                                type="email"
                                                name="hs-search-event-1"
                                                id="hs-search-event-1"
                                                class="p-3 block w-full border-transparent rounded-md focus:border-primary focus:ring-primary dark:bg-gray-800 dark:text-gray-400"
                                                placeholder="Search event"
                                            />
                                        </div>
                                        <div class="flex-[0_0_auto]">
                                            <a
                                                class="p-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-primary text-white hover:bg-primary focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800"
                                                href="#"
                                            >
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="16"
                                                    height="16"
                                                    fill="currentColor"
                                                    viewBox="0 0 16 16"
                                                >
                                                    <path
                                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"
                                                    />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </form>
                                <!-- End Form -->

                                <!-- SVG Element -->
                                <div
                                    class="hidden md:block absolute top-0 right-0 -translate-y-12 translate-x-20"
                                >
                                    <svg
                                        class="w-16 h-auto text-orange-400"
                                        width="121"
                                        height="135"
                                        viewBox="0 0 121 135"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M5 16.4754C11.7688 27.4499 21.2452 57.3224 5 89.0164"
                                            stroke="currentColor"
                                            stroke-width="10"
                                            stroke-linecap="round"
                                        />
                                        <path
                                            d="M33.6761 112.104C44.6984 98.1239 74.2618 57.6776 83.4821 5"
                                            stroke="currentColor"
                                            stroke-width="10"
                                            stroke-linecap="round"
                                        />
                                        <path
                                            d="M50.5525 130C68.2064 127.495 110.731 117.541 116 78.0874"
                                            stroke="currentColor"
                                            stroke-width="10"
                                            stroke-linecap="round"
                                        />
                                    </svg>
                                </div>
                                <!-- End SVG Element -->

                                <!-- SVG Element -->
                                <div
                                    class="hidden md:block absolute bottom-0 left-0 translate-y-10 -translate-x-32"
                                >
                                    <svg
                                        class="w-40 h-auto text-secondary"
                                        width="347"
                                        height="188"
                                        viewBox="0 0 347 188"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M4 82.4591C54.7956 92.8751 30.9771 162.782 68.2065 181.385C112.642 203.59 127.943 78.57 122.161 25.5053C120.504 2.2376 93.4028 -8.11128 89.7468 25.5053C85.8633 61.2125 130.186 199.678 180.982 146.248L214.898 107.02C224.322 95.4118 242.9 79.2851 258.6 107.02C274.299 134.754 299.315 125.589 309.861 117.539L343 93.4426"
                                            stroke="currentColor"
                                            stroke-width="7"
                                            stroke-linecap="round"
                                        />
                                    </svg>
                                </div>
                                <!-- End SVG Element -->
                            </div>

                            <div class="mt-10 sm:mt-20">
                                <a
                                    class="m-1 py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-primary transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800"
                                    href="#"
                                >
                                    <svg
                                        class="w-3 h-auto"
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="16"
                                        height="16"
                                        fill="currentColor"
                                        viewBox="0 0 16 16"
                                    >
                                        <path
                                            d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z"
                                        />
                                    </svg>
                                    Business
                                </a>
                                <a
                                    class="m-1 py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-primary transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800"
                                    href="#"
                                >
                                    <svg
                                        class="w-3 h-auto"
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="16"
                                        height="16"
                                        fill="currentColor"
                                        viewBox="0 0 16 16"
                                    >
                                        <path
                                            d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"
                                        />
                                        <path
                                            d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"
                                        />
                                    </svg>
                                    Fashion
                                </a>
                                <a
                                    class="m-1 py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-primary transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800"
                                    href="#"
                                >
                                    <svg
                                        class="w-3 h-auto"
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="16"
                                        height="16"
                                        fill="currentColor"
                                        viewBox="0 0 16 16"
                                    >
                                        <path
                                            d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"
                                        />
                                    </svg>
                                    Health
                                </a>
                                <a
                                    class="m-1 py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-primary transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800"
                                    href="#"
                                >
                                    <svg
                                        class="w-3 h-auto"
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="16"
                                        height="16"
                                        fill="currentColor"
                                        viewBox="0 0 16 16"
                                    >
                                        <path
                                            d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13a.5.5 0 0 1 0 1 .5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1 0-1 .5.5 0 0 1 0-1 .5.5 0 0 1-.46-.302l-.761-1.77a1.964 1.964 0 0 0-.453-.618A5.984 5.984 0 0 1 2 6zm6-5a5 5 0 0 0-3.479 8.592c.263.254.514.564.676.941L5.83 12h4.342l.632-1.467c.162-.377.413-.687.676-.941A5 5 0 0 0 8 1z"
                                        />
                                    </svg>
                                    Sports
                                </a>
                                <a
                                    class="m-1 py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-primary transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800"
                                    href="#"
                                >
                                    <svg
                                        class="w-3 h-auto"
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="16"
                                        height="16"
                                        fill="currentColor"
                                        viewBox="0 0 16 16"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"
                                        />
                                        <path
                                            d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"
                                        />
                                    </svg>
                                    Entertainment
                                </a>
                                <a
                                    class="m-1 py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-primary transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800"
                                    href="#"
                                >
                                    <svg
                                        class="w-3 h-auto"
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="16"
                                        height="16"
                                        fill="currentColor"
                                        viewBox="0 0 16 16"
                                    >
                                        <path
                                            d="M7 7V1.414a1 1 0 0 1 2 0V2h5a1 1 0 0 1 .8.4l.975 1.3a.5.5 0 0 1 0 .6L14.8 5.6a1 1 0 0 1-.8.4H9v10H7v-5H2a1 1 0 0 1-.8-.4L.225 9.3a.5.5 0 0 1 0-.6L1.2 7.4A1 1 0 0 1 2 7h5zm1 3V8H2l-.75 1L2 10h6zm0-5h6l.75-1L14 3H8v2z"
                                        />
                                    </svg>
                                    Tech
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Search Events -->

                <!-- Event cards -->
                <div
                    class="max-w-[85rem] pt-10 sm:px-6 lg:px-8 lg:pt-14 mx-auto"
                >
                    <!-- Grid -->
                    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Card -->
                        <a
                            v-for="i in 6"
                            class="relative flex flex-col group bg-white border shadow-sm rounded-xl overflow-hidden hover:shadow-lg transition dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]"
                            href="#"
                        >
                            <div
                                class="relative pt-[50%] sm:pt-[60%] lg:pt-[80%] rounded-t-xl overflow-hidden"
                            >
                                <img
                                    class="w-full h-full absolute top-0 left-0 object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out rounded-t-xl"
                                    src="/img/c11.jpg"
                                    alt="Image Description"
                                />
                            </div>
                            <div class="p-4 md:p-6">
                                <h3
                                    class="text-lg md:text-xl font-bold text-gray-800 dark:text-white"
                                >
                                    Plus234 Fest
                                </h3>
                                <p class="py-2 text-primary text-sm">
                                    <font-awesome-icon
                                        icon="fa-solid fa-location-dot"
                                    />
                                    Wuse II, Abuja
                                </p>
                                <p
                                    class="mt-1 text-gray-500 dark:text-gray-400"
                                >
                                    Come attend the Plus234 Fest as the founder
                                    and team members discuss the journey and
                                    aspirations of Plus234.
                                </p>
                                <div class="mt-6 space-x-2">
                                    <span
                                        class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-green-100 text-green-800"
                                        >tech</span
                                    >
                                    <span
                                        class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-blue-100 text-blue-800"
                                        >conference</span
                                    >
                                    <span
                                        class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-purple-100 text-purple-800"
                                        >meet & greet</span
                                    >
                                </div>
                            </div>
                            <div
                                class="absolute bg-secondary/60 top-0 right-0 py-2 px-3 mt-2 mr-2 text-xs text-white rounded-full"
                            >
                                Starts at &#8358; 3000
                            </div>
                        </a>
                        <!-- End of Card -->
                    </div>
                    <!-- End Grid -->
                </div>
                <!-- End of Event Cards -->

                <!-- Features -->
                <div
                    class="max-w-[85rem] py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto"
                >
                    <div class="relative p-6 md:p-16">
                        <!-- Grid -->
                        <div
                            class="relative z-10 lg:grid lg:grid-cols-12 lg:gap-16 lg:items-center"
                        >
                            <div
                                class="mb-10 lg:mb-0 lg:col-span-6 lg:col-start-8 lg:order-2"
                            >
                                <h2
                                    class="text-2xl text-gray-800 font-bold sm:text-3xl dark:text-gray-200"
                                >
                                    Fully customizable rules to match your
                                    unique needs
                                </h2>

                                <!-- Tab Navs -->
                                <nav
                                    class="grid gap-4 mt-5 md:mt-10"
                                    aria-label="Tabs"
                                    role="tablist"
                                >
                                    <button
                                        type="button"
                                        class="hs-tab-active:bg-white hs-tab-active:shadow-md hs-tab-active:hover:border-transparent text-left hover:bg-gray-200 p-4 md:p-5 rounded-xl dark:hs-tab-active:bg-slate-900 dark:hover:bg-gray-700 active"
                                        id="tabs-with-card-item-1"
                                        data-hs-tab="#tabs-with-card-1"
                                        aria-controls="tabs-with-card-1"
                                        role="tab"
                                    >
                                        <span class="flex">
                                            <svg
                                                class="flex-shrink-0 mt-2 h-6 w-6 md:w-7 md:h-7 hs-tab-active:text-primary text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-gray-200"
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="16"
                                                height="16"
                                                fill="currentColor"
                                                viewBox="0 0 16 16"
                                            >
                                                <path
                                                    d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z"
                                                />
                                                <path
                                                    d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"
                                                />
                                            </svg>
                                            <span class="grow ml-6">
                                                <span
                                                    class="block text-lg font-semibold hs-tab-active:text-primary text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-gray-200"
                                                    >Advanced tools</span
                                                >
                                                <span
                                                    class="block mt-1 text-gray-800 dark:hs-tab-active:text-gray-200 dark:text-gray-200"
                                                    >Use Preline thoroughly
                                                    thought and automated
                                                    libraries to manage your
                                                    businesses.</span
                                                >
                                            </span>
                                        </span>
                                    </button>

                                    <button
                                        type="button"
                                        class="hs-tab-active:bg-white hs-tab-active:shadow-md hs-tab-active:hover:border-transparent text-left hover:bg-gray-200 p-4 md:p-5 rounded-xl dark:hs-tab-active:bg-slate-900 dark:hover:bg-gray-700"
                                        id="tabs-with-card-item-2"
                                        data-hs-tab="#tabs-with-card-2"
                                        aria-controls="tabs-with-card-2"
                                        role="tab"
                                    >
                                        <span class="flex">
                                            <svg
                                                class="flex-shrink-0 mt-2 h-6 w-6 md:w-7 md:h-7 hs-tab-active:text-primary text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-gray-200"
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="16"
                                                height="16"
                                                fill="currentColor"
                                                viewBox="0 0 16 16"
                                            >
                                                <path
                                                    fill-rule="evenodd"
                                                    d="M0 0h1v15h15v1H0V0Zm14.817 3.113a.5.5 0 0 1 .07.704l-4.5 5.5a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61 4.15-5.073a.5.5 0 0 1 .704-.07Z"
                                                />
                                            </svg>
                                            <span class="grow ml-6">
                                                <span
                                                    class="block text-lg font-semibold hs-tab-active:text-primary text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-gray-200"
                                                    >Smart dashboards</span
                                                >
                                                <span
                                                    class="block mt-1 text-gray-800 dark:hs-tab-active:text-gray-200 dark:text-gray-200"
                                                    >Quickly Preline sample
                                                    components, copy-paste
                                                    codes, and start right
                                                    off.</span
                                                >
                                            </span>
                                        </span>
                                    </button>

                                    <button
                                        type="button"
                                        class="hs-tab-active:bg-white hs-tab-active:shadow-md hs-tab-active:hover:border-transparent text-left hover:bg-gray-200 p-4 md:p-5 rounded-xl dark:hs-tab-active:bg-slate-900 dark:hover:bg-gray-700"
                                        id="tabs-with-card-item-3"
                                        data-hs-tab="#tabs-with-card-3"
                                        aria-controls="tabs-with-card-3"
                                        role="tab"
                                    >
                                        <span class="flex">
                                            <svg
                                                class="flex-shrink-0 mt-2 h-6 w-6 md:w-7 md:h-7 hs-tab-active:text-primary text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-gray-200"
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="16"
                                                height="16"
                                                fill="currentColor"
                                                viewBox="0 0 16 16"
                                            >
                                                <path
                                                    d="M5.52.359A.5.5 0 0 1 6 0h4a.5.5 0 0 1 .474.658L8.694 6H12.5a.5.5 0 0 1 .395.807l-7 9a.5.5 0 0 1-.873-.454L6.823 9.5H3.5a.5.5 0 0 1-.48-.641l2.5-8.5zM6.374 1 4.168 8.5H7.5a.5.5 0 0 1 .478.647L6.78 13.04 11.478 7H8a.5.5 0 0 1-.474-.658L9.306 1H6.374z"
                                                />
                                            </svg>
                                            <span class="grow ml-6">
                                                <span
                                                    class="block text-lg font-semibold hs-tab-active:text-primary text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-gray-200"
                                                    >Powerful features</span
                                                >
                                                <span
                                                    class="block mt-1 text-gray-800 dark:hs-tab-active:text-gray-200 dark:text-gray-200"
                                                    >Reduce time and effort on
                                                    building modern look design
                                                    with Preline only.</span
                                                >
                                            </span>
                                        </span>
                                    </button>
                                </nav>
                                <!-- End Tab Navs -->
                            </div>
                            <!-- End Col -->

                            <div class="lg:col-span-6">
                                <div class="relative">
                                    <!-- Tab Content -->
                                    <div>
                                        <div
                                            id="tabs-with-card-1"
                                            role="tabpanel"
                                            aria-labelledby="tabs-with-card-item-1"
                                        >
                                            <img
                                                class="shadow-xl shadow-gray-200 rounded-xl dark:shadow-gray-900/[.2]"
                                                src="https://images.unsplash.com/photo-1605629921711-2f6b00c6bbf4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&h=1220&q=80"
                                                alt="Image Description"
                                            />
                                        </div>

                                        <div
                                            id="tabs-with-card-2"
                                            class="hidden"
                                            role="tabpanel"
                                            aria-labelledby="tabs-with-card-item-2"
                                        >
                                            <img
                                                class="shadow-xl shadow-gray-200 rounded-xl dark:shadow-gray-900/[.2]"
                                                src="https://images.unsplash.com/photo-1665686306574-1ace09918530?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&h=1220&q=80"
                                                alt="Image Description"
                                            />
                                        </div>

                                        <div
                                            id="tabs-with-card-3"
                                            class="hidden"
                                            role="tabpanel"
                                            aria-labelledby="tabs-with-card-item-3"
                                        >
                                            <img
                                                class="shadow-xl shadow-gray-200 rounded-xl dark:shadow-gray-900/[.2]"
                                                src="https://images.unsplash.com/photo-1598929213452-52d72f63e307?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&h=1220&q=80"
                                                alt="Image Description"
                                            />
                                        </div>
                                    </div>
                                    <!-- End Tab Content -->

                                    <!-- SVG Element -->
                                    <div
                                        class="hidden absolute top-0 right-0 translate-x-20 md:block lg:translate-x-20"
                                    >
                                        <svg
                                            class="w-16 h-auto text-orange-400"
                                            width="121"
                                            height="135"
                                            viewBox="0 0 121 135"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M5 16.4754C11.7688 27.4499 21.2452 57.3224 5 89.0164"
                                                stroke="currentColor"
                                                stroke-width="10"
                                                stroke-linecap="round"
                                            />
                                            <path
                                                d="M33.6761 112.104C44.6984 98.1239 74.2618 57.6776 83.4821 5"
                                                stroke="currentColor"
                                                stroke-width="10"
                                                stroke-linecap="round"
                                            />
                                            <path
                                                d="M50.5525 130C68.2064 127.495 110.731 117.541 116 78.0874"
                                                stroke="currentColor"
                                                stroke-width="10"
                                                stroke-linecap="round"
                                            />
                                        </svg>
                                    </div>
                                    <!-- End SVG Element -->
                                </div>
                            </div>
                            <!-- End Col -->
                        </div>
                        <!-- End Grid -->

                        <!-- Background Color -->
                        <div
                            class="absolute inset-0 grid grid-cols-12 w-full h-full"
                        >
                            <div
                                class="col-span-full lg:col-span-7 lg:col-start-6 bg-gray-100 w-full h-5/6 rounded-xl sm:h-3/4 lg:h-full dark:bg-white/[.075]"
                            ></div>
                        </div>
                        <!-- End Background Color -->
                    </div>
                </div>
                <!-- End Features -->
            </div>
        </div>
    </div>
</template>

<style scoped>
.shadow {
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.menu :where(li:not(.menu-title):not(:empty)) > :where(*:not(ul):focus),
.menu :where(li:not(.menu-title):not(:empty)) > :where(*:not(ul):hover) {
    background-color: theme("colors.secondary/.7");
}

.white-icon {
    filter: brightness(0) invert(1);
}
</style>
