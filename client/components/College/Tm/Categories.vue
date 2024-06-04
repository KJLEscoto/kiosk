<template>
  <header class="h-[30px] bg-blue-200 dark:bg-blue-900 w-full fixed top-24 z-20 px-20 flex items-center justify-start gap-3 shadow">
    <div v-for="(item) in items" class="hover:opacity-60 cursor-pointer">
      <nuxt-link :to="item.path" active-class="border-b border-blue-500 text-blue-500 dark:border-yellow-500 dark:text-yellow-500">
        {{ item.label }}
      </nuxt-link>
    </div>
  </header>
</template>

<script setup>

const items = [
  {
    label: 'All',
    path: '/college/tm'
  }, 
  {
    label: 'Uniforms',
    path: '/college/tm/uniforms'
  }, 
  {
    label: 'Pants',
    path: '/college/tm/pants'
  },
  {
    label: 'idk unsa pa sa TM',
    path: ''
  },
]
</script>