<template>
  <div class="h-auto w-full px-20">
    <div class="flex justify-between w-full">
      <h1 class="font-bold text-xl">Check Out</h1>
      <div class="flex justify-between gap-2">
        <UButton to="/kiosk/cart" label="Cancel" class="w-auto rounded" icon="i-bi-arrow-bar-left"/>
        <UButton to="/" :label="`Purchase - $${subtotal}`"  class="rounded bg-yellow-600 hover:bg-yellow-600 hover:bg-opacity-50 dark:bg-yellow-500 dark:hover:bg-yellow-500 dark:hover:bg-opacity-50" icon="i-bi-bag-check" />
      </div>
    </div>
    <hr class="w-full border-blue-200 dark:border-blue-600 mt-3 mb-5">
    <main class="grid grid-cols-1 overflow-auto max-h-[50vh] gap-1">
      <section v-for="(item) in items" class="flex justify-between w-full items-center h-auto p-2 border-blue-200 dark:border-blue-600 dark:bg-blue-900 bg-white">
        <div class="flex gap-5 h-auto w-auto">
          <img class="w-36 h-36 rounded-sm border" src="" :alt="item.image">
          <div class="flex flex-col justify-between">
            <div class="flex flex-col gap-2 overflow-auto max-h-[14vh] max-w-[100vh]">
              <h1 class="font-bold">{{ item.title }}</h1>
              <p class="text-sm text-slate-500 truncate">{{ item.description }}</p>
              <p class="text-xs">{{ item.status }}</p>
            </div>
            <div class="text-xs flex justify-start items-center gap-3 font-semibold">
              <div class="flex justify-start items-center gap-x-1">
                <p class="text-blue-500">Qty:{{ item.quantity }}</p>
              </div>
            </div>
          </div>
        </div>
        <div class="font-bold w-auto px-5">
          ${{ item.price }}
        </div>
      </section>
    </main>
  </div>
</template>

<script setup>
definePageMeta({
  layout: 'client'
});

const items = [
  {
    image: 'image here',
    title: 'item 1',
    description: 'jkbfdg jkbfg bjffgkjfb gfgj dfg dfg dfg d dgf dfg dg dfg dfg dfrdg dfg dfgdrdgr eg eg ert egdf gdfg ert ertegdf dfg dfg erg erg dfg jdksfhg djkff jkf gdg dsouihgdf udsdf hg',
    price: 406.12,
    status: 'In stock',
    quantity: 1
  },
  {
    image: 'image here',
    title: 'item 2',
    description: 'jkbfdg jkbfg bjffgkjfb gfgj',
    price: 706.12,
    status: 'In stock',
    quantity: 1
  },
  {
    image: 'image here',
    title: 'item 3',
    description: 'jkbfdg jkbfg bjffgkjfb gfgj',
    price: 206.12,
    status: 'Out of stock',
    quantity: 1
  },
  {
    image: 'image here',
    title: 'item 4',
    description: 'jkbfdg jkbfg bjffgkjfb gfgj',
    price: 406.12,
    status: 'In stock',
    quantity: 1
  },
  {
    image: 'image here',
    title: 'item 5',
    description: 'jkbfdg jkbfg bjffgkjfb gfgj',
    price: 106.12,
    status: 'In stock',
    quantity: 1
  },
]

const subtotal = computed(() => {
  const rawSubtotal = items.reduce((acc, item) => acc + item.price, 0);
  return Number(rawSubtotal.toFixed(2));
});
</script>