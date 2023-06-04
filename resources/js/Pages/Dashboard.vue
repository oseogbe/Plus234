<script setup>
import { Head } from "@inertiajs/vue3";
import MainLayout from "@/Layouts/MainLayout.vue";
import SummaryCards from "@/Components/Dashboard/SummaryCards.vue";
import EventsTable from "@/Components/Dashboard/EventsTable.vue";
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

                <div class="w-full px-5 mx-auto space-y-16">
                    <SummaryCards />

                    <EventsTable />
                </div>
            </div>
        </div>
    </MainLayout>
</template>
