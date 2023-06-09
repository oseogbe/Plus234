<script setup>
import PrimaryButton from "@/Components/PrimaryButton.vue";
import { ref } from "vue";

const events = ref([]);
</script>

<template>
    <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="border rounded-lg overflow-hidden">
                    <table
                        class="min-w-full divide-y divide-gray-200 dark:divide-gray-700"
                    >
                        <thead class="bg-gray-50">
                            <tr>
                                <th
                                    scope="col"
                                    class="px-6 py-3 text-left text-sm font-medium text-gray-500"
                                >
                                    Name
                                </th>
                                <th
                                    scope="col"
                                    class="px-6 py-3 text-left text-sm font-medium text-gray-500"
                                >
                                    Description
                                </th>
                                <th
                                    scope="col"
                                    class="px-6 py-3 text-left text-sm font-medium text-gray-500"
                                >
                                    Category
                                </th>
                                <th
                                    scope="col"
                                    class="px-6 py-3 text-left text-sm font-medium text-gray-500"
                                >
                                    Tags
                                </th>
                                <th
                                    scope="col"
                                    class="px-6 py-3 text-left text-sm font-medium text-gray-500"
                                >
                                    Location(s)
                                </th>
                                <th
                                    scope="col"
                                    class="px-6 py-3 text-left text-sm font-medium text-gray-500"
                                >
                                    Schedule(s)
                                </th>
                                <th
                                    scope="col"
                                    class="px-6 py-3 text-left text-sm font-medium text-gray-500"
                                >
                                    Pricing(s)
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <template v-if="events.length > 0">
                                <tr
                                    v-for="event in events"
                                    class="odd:bg-white even:bg-gray-100 dark:odd:bg-slate-900 dark:even:bg-slate-800"
                                >
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200"
                                    >
                                        {{ event.name }}
                                    </td>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"
                                    >
                                        {{ event.description }}
                                    </td>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium"
                                    >
                                        {{ event.category }}
                                    </td>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium"
                                    >

                                    </td>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"
                                    >

                                    </td>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium"
                                    >

                                    </td>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium"
                                    >

                                    </td>
                                </tr>
                            </template>
                            <tr v-else>
                                <td colspan="7">
                                    <div
                                        class="min-h-[24rem] flex flex-col bg-white shadow-sm"
                                    >
                                        <div
                                            class="flex flex-auto flex-col justify-center items-center p-4 md:p-5"
                                        >
                                            <svg
                                                class="max-w-[5rem]"
                                                viewBox="0 0 375 428"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M254.509 253.872L226.509 226.872"
                                                    class="stroke-gray-400 dark:stroke-white"
                                                    stroke="currentColor"
                                                    stroke-width="7"
                                                    stroke-linecap="round"
                                                />
                                                <path
                                                    d="M237.219 54.3721C254.387 76.4666 264.609 104.226 264.609 134.372C264.609 206.445 206.182 264.872 134.109 264.872C62.0355 264.872 3.60864 206.445 3.60864 134.372C3.60864 62.2989 62.0355 3.87207 134.109 3.87207C160.463 3.87207 184.993 11.6844 205.509 25.1196"
                                                    class="stroke-gray-400 dark:stroke-white"
                                                    stroke="currentColor"
                                                    stroke-width="7"
                                                    stroke-linecap="round"
                                                />
                                                <rect
                                                    x="270.524"
                                                    y="221.872"
                                                    width="137.404"
                                                    height="73.2425"
                                                    rx="36.6212"
                                                    transform="rotate(40.8596 270.524 221.872)"
                                                    class="fill-gray-400 dark:fill-white"
                                                    fill="currentColor"
                                                />
                                                <ellipse
                                                    cx="133.109"
                                                    cy="404.372"
                                                    rx="121.5"
                                                    ry="23.5"
                                                    class="fill-gray-400 dark:fill-white"
                                                    fill="currentColor"
                                                />
                                                <path
                                                    d="M111.608 188.872C120.959 177.043 141.18 171.616 156.608 188.872"
                                                    class="stroke-gray-400 dark:stroke-white"
                                                    stroke="currentColor"
                                                    stroke-width="7"
                                                    stroke-linecap="round"
                                                />
                                                <ellipse
                                                    cx="96.6084"
                                                    cy="116.872"
                                                    rx="9"
                                                    ry="12"
                                                    class="fill-gray-400 dark:fill-white"
                                                    fill="currentColor"
                                                />
                                                <ellipse
                                                    cx="172.608"
                                                    cy="117.872"
                                                    rx="9"
                                                    ry="12"
                                                    class="fill-gray-400 dark:fill-white"
                                                    fill="currentColor"
                                                />
                                                <path
                                                    d="M194.339 147.588C189.547 148.866 189.114 142.999 189.728 138.038C189.918 136.501 191.738 135.958 192.749 137.131C196.12 141.047 199.165 146.301 194.339 147.588Z"
                                                    class="fill-gray-400 dark:fill-white"
                                                    fill="currentColor"
                                                />
                                            </svg>
                                            <p
                                                class="mt-5 text-sm text-gray-500 dark:text-gray-500"
                                            >
                                                No events yet
                                            </p>
                                            <div class="mt-5">
                                                <PrimaryButton>
                                                    Create Event &nbsp;
                                                    <font-awesome-icon
                                                        icon="fa-solid fa-plus-circle"
                                                    />
                                                </PrimaryButton>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<style lang="scss" scoped></style>
