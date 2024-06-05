<template>
    <div class="min-h-full rounded-3xl scrollbar-hide ring-1 ring-gray-700">
      <header class="shadow-sm shadow-gray-700 rounded-t-3xl">
        <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
          <h1 class="text-5xl font-bold tracking-tight text-gray-100">Dashboard</h1>
        </div>
      </header>
      <main class="grid-rows-2 px-48 py-6">
        <div class="py-6 my-6 max-w-7xl sm:px-6 lg:px-8 ring-1 ring-gray-700 rounded-3xl bg-customDark">
          <table class="w-full table-auto">
            <thead>
              <tr>
                <th v-for="column in columns" :key="column.id" class="px-4 pb-5 text-3xl font-medium text-gray-100 border-b-2 border-gray-700">{{ column.name }}</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="(stat, index) in stats" :key="index" class="">
                <td v-for="column in columns" :key="column.id" class="py-2 text-xl font-light text-gray-100 ">{{ getValue(stat, column.name) }}</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="justify-start max-w-sm py-6 my-6 sm:px-6 lg:px-8 ring-1 ring-gray-700 rounded-3xl bg-customDark">
            <table class="w-full table-auto">
                <thead>
                    <tr>
                        <th class="px-4 py-2 text-3xl font-medium text-gray-100 border-b-2 border-gray-700">{{ orderColumns[0].name }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(orderStat, index) in orderStats" :key="index" class="flex justify-center">
                        <td class="max-w-xs px-4 py-2 text-xl font-light text-gray-100">{{ orderStat.Orders }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

      </main>
    </div>
  </template>
  
  <script setup>
  definePageMeta({
    layout: 'admin'
  });

  const stats = [
    { id: 1, Course: 'HM', Top: 11, Bottom: 22, Accessory: 33 },
    { id: 2, Course: 'TM', Top: 11, Bottom: 22, Accessory: 33 },
    { id: 3, Course: 'BSIT/BSCS/BSCPE', Top: 11, Bottom: 22, Accessory: 33 },
  ];
  
  const columns = [
    { id: 1, name: 'Course' },
    { id: 2, name: 'Top' },
    { id: 3, name: 'Bottom' },
    { id: 4, name: 'Accessory' },
  ];
  const orderStats = [
    { id: 1, Orders: 245 },
  ];
  const orderColumns = [
    { id: 1, name: 'Orders'}
  ];
  
  function getValue(stat, columnName) {
    return stat[columnName];
  }
  </script>
  