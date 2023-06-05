<script setup>
import { Head } from "@inertiajs/vue3";
import MainLayout from "@/Layouts/MainLayout.vue";
import SummaryCards from "./Partials/SummaryCards.vue";
import NotificationsTable from "./Partials/NotificationsTable.vue";
</script>

<template>
    <Head title="Dashboard" />

    <MainLayout>
        <div class="py-8">
            <div class="max-w-7xl mx-auto sm:pr-6 lg:pr-8 space-y-6">
                <section>
                    <header>
                        <h2 class="text-lg px-5 font-medium text-gray-900">
                            Dashboard
                        </h2>

                        <p class="mt-1 px-5 text-sm text-gray-600">
                            What would you like to do today on Plus234?
                        </p>
                    </header>
                </section>

                <div class="mx-auto px-5 space-y-16">
                    <SummaryCards />

                    <NotificationsTable />
                </div>
            </div>
        </div>
    </MainLayout>
</template>
