<template>
    <div class="m-2 bg-gray-800 rounded-xl lg:flex lg:h-full lg:flex-col ring-1 ring-gray-700">
        <header class="flex items-center justify-between px-6 py-4 border-b lg:flex-none">
            <h1 class="text-base font-semibold leading-6 text-gray-100">
                <time datetime="2022-01">January 2022</time>
            </h1>
            <div class="flex items-center">
                <div class="relative flex items-center rounded-md shadow-sm md:items-stretch">
                    <button type="button"
                        class="flex items-center justify-center w-12 pr-1 text-gray-100 bg-gray-900 border-l h-9 rounded-l-md border-y hover:text-gray-100 focus:relative md:w-9 md:pr-0 md:hover:bg-gray-700">
                        <span class="sr-only">Previous month</span>
                        <ChevronLeftIcon class="w-5 h-5" aria-hidden="true" />
                    </button>
                    <button type="button"
                        class="hidden border-y bg-gray-900 px-3.5 text-sm font-semibold text-gray-100 hover:bg-gray-700 hover:text-gray-100 focus:relative md:block">Today</button>
                    <span class="relative w-px h-5 -mx-px md:hidden" />
                    <button type="button"
                        class="flex items-center justify-center w-12 pl-1 text-gray-100 bg-gray-900 border-r h-9 rounded-r-md border-y hover:text-gray-100 focus:relative md:w-9 md:pl-0 md:hover:bg-gray-700">
                        <span class="sr-only">Next month</span>
                        <ChevronRightIcon class="w-5 h-5" aria-hidden="true" />
                    </button>
                </div>
                <div class="hidden md:ml-4 md:flex md:items-center">
                    <Menu as="div" class="relative ">
                        <MenuButton type="button"
                            class="flex bg-gray-900 items-center gap-x-1.5 rounded-md px-3 py-2 text-sm font-semibold text-gray-100 shadow-sm ring-1 ring-inset ring-gray-700 hover:bg-gray-700">
                            Month view
                            <ChevronDownIcon class="w-5 h-5 -mr-1 text-gray-100" aria-hidden="true" />
                        </MenuButton>

                        <transition enter-active-class="transition duration-100 ease-out"
                            enter-from-class="transform scale-95 opacity-0" enter-to-class="transform scale-100 opacity-100"
                            leave-active-class="transition duration-75 ease-in"
                            leave-from-class="transform scale-100 opacity-100"
                            leave-to-class="transform scale-95 opacity-0">
                            <MenuItems
                                class="absolute right-0 z-10 mt-3 overflow-hidden origin-top-right bg-gray-900 rounded-md shadow-lg w-36 ring-1 ring-gray-700 focus:outline-none">
                                <div class="py-1">
                                    <MenuItem v-slot="{ active }">
                                    <a href="#"
                                        :class="[active ? 'bg-gray-700 text-gray-100' : 'text-gray-100', 'block px-4 py-2 text-sm']">Day
                                        view</a>
                                    </MenuItem>
                                    <MenuItem v-slot="{ active }">
                                    <a href="#"
                                        :class="[active ? 'bg-gray-700 text-gray-100' : 'text-gray-100', 'block px-4 py-2 text-sm']">Week
                                        view</a>
                                    </MenuItem>
                                    <MenuItem v-slot="{ active }">
                                    <a href="#"
                                        :class="[active ? 'bg-gray-700 text-gray-100' : 'text-gray-100', 'block px-4 py-2 text-sm']">Month
                                        view</a>
                                    </MenuItem>
                                    <MenuItem v-slot="{ active }">
                                    <a href="#"
                                        :class="[active ? 'bg-gray-700 text-gray-100' : 'text-gray-100', 'block px-4 py-2 text-sm']">Year
                                        view</a>
                                    </MenuItem>
                                </div>
                            </MenuItems>
                        </transition>
                    </Menu>
                    <div class="w-px h-6 ml-6" />
                        <button type="button"
                            class="px-3 py-2 ml-6 text-sm font-semibold text-white bg-indigo-600 rounded-md shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Add
                            event</button>
                    </div>
                <Menu as="div" class="relative ml-6 md:hidden">
                    <MenuButton
                        class="flex items-center p-2 -mx-2 text-gray-100 border-transparent rounded-full hover:text-gray-100">
                        <span class="sr-only">Open menu</span>
                        <EllipsisHorizontalIcon class="w-5 h-5" aria-hidden="true" />
                    </MenuButton>

                    <transition enter-active-class="transition duration-100 ease-out"
                        enter-from-class="transform scale-95 opacity-0" enter-to-class="transform scale-100 opacity-100"
                        leave-active-class="transition duration-75 ease-in"
                        leave-from-class="transform scale-100 opacity-100" leave-to-class="transform scale-95 opacity-0">
                        <MenuItems
                            class="absolute right-0 z-10 mt-3 overflow-hidden origin-top-right divide-y divide-gray-100 rounded-md shadow-lg w-36 ring-1 ring-gray-100 focus:outline-none">
                            <div class="py-1">
                                <MenuItem v-slot="{ active }">
                                <a href="#"
                                    :class="[active ? 'bg-gray-900 text-gray-100' : 'text-gray-100', 'block px-4 py-2 text-sm']">Create
                                    event</a>
                                </MenuItem>
                            </div>
                            <div class="py-1">
                                <MenuItem v-slot="{ active }">
                                <a href="#"
                                    :class="[active ? 'bg-gray-900 text-gray-100' : 'text-gray-100', 'block px-4 py-2 text-sm']">Go
                                    to today</a>
                                </MenuItem>
                            </div>
                            <div class="py-1">
                                <MenuItem v-slot="{ active }">
                                <a href="#"
                                    :class="[active ? 'bg-gray-900 text-gray-100' : 'text-gray-100', 'block px-4 py-2 text-sm']">Day
                                    view</a>
                                </MenuItem>
                                <MenuItem v-slot="{ active }">
                                <a href="#"
                                    :class="[active ? 'bg-gray-900 text-gray-100' : 'text-gray-100', 'block px-4 py-2 text-sm']">Week
                                    view</a>
                                </MenuItem>
                                <MenuItem v-slot="{ active }">
                                <a href="#"
                                    :class="[active ? 'bg-gray-900 text-gray-100' : 'text-gray-100', 'block px-4 py-2 text-sm']">Month
                                    view</a>
                                </MenuItem>
                                <MenuItem v-slot="{ active }">
                                <a href="#"
                                    :class="[active ? 'bg-gray-900 text-gray-100' : 'text-gray-100', 'block px-4 py-2 text-sm']">Year
                                    view</a>
                                </MenuItem>
                            </div>
                        </MenuItems>
                    </transition>
                </Menu>
            </div>
        </header>
        <div class="shadow ring-1 ring-gray-700 lg:flex lg:flex-auto lg:flex-col">
            <div
                class="grid grid-cols-7 gap-px text-xs font-semibold leading-6 text-center text-gray-100 border-b border-gray-700 lg:flex-none">
                <div class="py-2 bg-gray-800">M<span class="sr-only sm:not-sr-only">on</span></div>
                <div class="py-2 bg-gray-800">T<span class="sr-only sm:not-sr-only">ue</span></div>
                <div class="py-2 bg-gray-800">W<span class="sr-only sm:not-sr-only">ed</span></div>
                <div class="py-2 bg-gray-800">T<span class="sr-only sm:not-sr-only">hu</span></div>
                <div class="py-2 bg-gray-800">F<span class="sr-only sm:not-sr-only">ri</span></div>
                <div class="py-2 bg-gray-800">S<span class="sr-only sm:not-sr-only">at</span></div>
                <div class="py-2 bg-gray-800">S<span class="sr-only sm:not-sr-only">un</span></div>
            </div>
            <div class="flex text-xs leading-6 text-gray-100 bg-gray-700 lg:flex-auto">
                <div class="hidden w-full lg:grid lg:grid-cols-7 lg:grid-rows-6 lg:gap-px">
                    <div v-for="day in days" :key="day.date"
                        :class="[day.isCurrentMonth ? 'bg-gray-800' : 'bg-gray-800 text-gray-100', 'relative px-3 py-2']">
                        <time :datetime="day.date"
                            :class="day.isToday ? 'flex h-6 w-6 items-center justify-center rounded-full bg-indigo-600 font-semibold text-white' : undefined">{{
                                day.date.split('-').pop().replace(/^0/, '') }}</time>
                        <ol v-if="day.events.length > 0" class="mt-2">
                            <li v-for="event in day.events.slice(0, 2)" :key="event.id">
                                <a :href="event.href" class="flex group">
                                    <p class="flex-auto font-medium text-gray-100 truncate group-hover:text-indigo-600">
                                        {{ event.name }}
                                    </p>
                                    <time :datetime="event.datetime"
                                        class="flex-none hidden ml-3 text-gray-100 group-hover:text-indigo-600 xl:block">{{
                                            event.time }}</time>
                                </a>
                            </li>
                            <li v-if="day.events.length > 2" class="text-gray-100">+ {{ day.events.length - 2 }} more</li>
                        </ol>
                    </div>
                </div>
                <div class="grid w-full grid-cols-7 grid-rows-6 gap-px isolate lg:hidden">
                    <button v-for="day in days" :key="day.date" type="button"
                        :class="[day.isCurrentMonth ? 'bg-gray-900' : 'bg-gray-900', (day.isSelected || day.isToday) && 'font-semibold', day.isSelected && 'text-white', !day.isSelected && day.isToday && 'text-indigo-600', !day.isSelected && day.isCurrentMonth && !day.isToday && 'text-gray-100', !day.isSelected && !day.isCurrentMonth && !day.isToday && 'text-gray-100', 'flex h-14 flex-col px-3 py-2 hover:bg-gray-900 focus:z-10']">
                        <time :datetime="day.date"
                            :class="[day.isSelected && 'flex h-6 w-6 items-center justify-center rounded-full', day.isSelected && day.isToday && 'bg-indigo-600', day.isSelected && !day.isToday && 'bg-gray-900', 'ml-auto']">{{
                                day.date.split('-').pop().replace(/^0/, '') }}</time>
                        <span class="sr-only">{{ day.events.length }} events</span>
                        <span v-if="day.events.length > 0" class="-mx-0.5 mt-auto flex flex-wrap-reverse">
                            <span v-for="event in day.events" :key="event.id"
                                class="mx-0.5 mb-1 h-1.5 w-1.5 rounded-full bg-gray-900" />
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <div v-if="selectedDay?.events.length > 0" class="px-4 py-10 sm:px-6 lg:hidden">
            <ol
                class="overflow-hidden text-sm bg-gray-900 divide-y divide-gray-100 rounded-lg shadow ring-1 ring-black ring-opacity-5">
                <li v-for="event in selectedDay.events" :key="event.id"
                    class="flex p-4 pr-6 group focus-within:bg-gray-900 hover:bg-gray-900">
                    <div class="flex-auto">
                        <p class="font-semibold text-gray-100">{{ event.name }}</p>
                        <time :datetime="event.datetime" class="flex items-center mt-2 text-gray-100">
                            <ClockIcon class="w-5 h-5 mr-2 text-gray-100" aria-hidden="true" />
                            {{ event.time }}
                        </time>
                    </div>
                    <a :href="event.href"
                        class="self-center flex-none px-3 py-2 ml-6 font-semibold text-gray-100 bg-gray-900 rounded-md shadow-sm opacity-0 ring-1 ring-inset ring-gray-300 hover:ring-gray-400 focus:opacity-100 group-hover:opacity-100">Edit<span
                            class="sr-only">, {{ event.name }}</span></a>
                </li>
            </ol>
        </div>
    </div>
</template>
  
<script setup>

definePageMeta({
    layout: 'admin'
  });
  
import {
    ChevronDownIcon,
    ChevronLeftIcon,
    ChevronRightIcon,
    ClockIcon,
    EllipsisHorizontalIcon,
} from '@heroicons/vue/20/solid'
import { Menu, MenuButton, MenuItem, MenuItems } from '@headlessui/vue'

const days = [
    { date: '2021-12-27', events: [] },
    { date: '2021-12-28', events: [] },
    { date: '2021-12-29', events: [] },
    { date: '2021-12-30', events: [] },
    { date: '2021-12-31', events: [] },
    { date: '2022-01-01', isCurrentMonth: true, events: [] },
    { date: '2022-01-02', isCurrentMonth: true, events: [] },
    {
        date: '2022-01-03',
        isCurrentMonth: true,
        events: [
            { id: 1, name: 'Design review', time: '10AM', datetime: '2022-01-03T10:00', href: '#' },
            { id: 2, name: 'Sales meeting', time: '2PM', datetime: '2022-01-03T14:00', href: '#' },
        ],
    },
    { date: '2022-01-04', isCurrentMonth: true, events: [] },
    { date: '2022-01-05', isCurrentMonth: true, events: [] },
    { date: '2022-01-06', isCurrentMonth: true, events: [] },
    {
        date: '2022-01-07',
        isCurrentMonth: true,
        events: [{ id: 3, name: 'Date night', time: '6PM', datetime: '2022-01-08T18:00', href: '#' }],
    },
    { date: '2022-01-08', isCurrentMonth: true, events: [] },
    { date: '2022-01-09', isCurrentMonth: true, events: [] },
    { date: '2022-01-10', isCurrentMonth: true, events: [] },
    { date: '2022-01-11', isCurrentMonth: true, events: [] },
    {
        date: '2022-01-12',
        isCurrentMonth: true,
        isToday: true,
        events: [{ id: 6, name: "Sam's birthday party", time: '2PM', datetime: '2022-01-25T14:00', href: '#' }],
    },
    { date: '2022-01-13', isCurrentMonth: true, events: [] },
    { date: '2022-01-14', isCurrentMonth: true, events: [] },
    { date: '2022-01-15', isCurrentMonth: true, events: [] },
    { date: '2022-01-16', isCurrentMonth: true, events: [] },
    { date: '2022-01-17', isCurrentMonth: true, events: [] },
    { date: '2022-01-18', isCurrentMonth: true, events: [] },
    { date: '2022-01-19', isCurrentMonth: true, events: [] },
    { date: '2022-01-20', isCurrentMonth: true, events: [] },
    { date: '2022-01-21', isCurrentMonth: true, events: [] },
    {
        date: '2022-01-22',
        isCurrentMonth: true,
        isSelected: true,
        events: [
            { id: 4, name: 'Maple syrup museum', time: '3PM', datetime: '2022-01-22T15:00', href: '#' },
            { id: 5, name: 'Hockey game', time: '7PM', datetime: '2022-01-22T19:00', href: '#' },
        ],
    },
    { date: '2022-01-23', isCurrentMonth: true, events: [] },
    { date: '2022-01-24', isCurrentMonth: true, events: [] },
    { date: '2022-01-25', isCurrentMonth: true, events: [] },
    { date: '2022-01-26', isCurrentMonth: true, events: [] },
    { date: '2022-01-27', isCurrentMonth: true, events: [] },
    { date: '2022-01-28', isCurrentMonth: true, events: [] },
    { date: '2022-01-29', isCurrentMonth: true, events: [] },
    { date: '2022-01-30', isCurrentMonth: true, events: [] },
    { date: '2022-01-31', isCurrentMonth: true, events: [] },
    { date: '2022-02-01', events: [] },
    { date: '2022-02-02', events: [] },
    { date: '2022-02-03', events: [] },
    {
        date: '2022-02-04',
        events: [{ id: 7, name: 'Cinema with friends', time: '9PM', datetime: '2022-02-04T21:00', href: '#' }],
    },
    { date: '2022-02-05', events: [] },
    { date: '2022-02-06', events: [] },
]
const selectedDay = days.find((day) => day.isSelected)

const state = reactive({
    user:{
        id: null,
        name: null,
        email: null,
    },
})

async function fetchUser(){
    const params = { 
    Authorization: "Bearer " + localStorage.getItem('_token'),
    Accept: "application/json"
  }
  try{
    const response = await $fetch(`http://127.0.0.1:8000/api/user`, {
    method: 'GET',
    headers: params})

    console.log(response.id)
    state.user.id = response.id
    state.user.name = response.name
    state.user.email = response.email

    }

  catch(error){
    state.errors = error.response
    console.log(error.response)
    console.log('error', error)
    }
}

onMounted(() => {
    fetchUser();
});
</script>