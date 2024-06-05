<template>
  <div class="text-blue-800 dark:text-blue-900">
    <div class="h-10 w-full fixed bottom-0 z-20 flex justify-center items-center bg-yellow-500 rounded-t-full">
      <ul v-for="item in items" :key="item.path" :class="{'border-b-2 border-blue-500': isActive(item.path)}" class="font-semibold hover:opacity-50 rounded">
        <nuxt-link :to="item.path">
          <li class="flex gap-1 items-center px-5">
            <UIcon :name="item.icon" class="text-lg"/>
            <h1>{{ item.title }}</h1>
          </li>
        </nuxt-link>
      </ul>
    </div>
  </div>
</template>

<script setup>
import { useRoute } from 'vue-router'

const route = useRoute()

const items = [
  {
    title: 'All Products',
    path: '/kiosk/products',
    icon: 'i-heroicons-wallet'
  },
  {
    title: 'Senior High',
    path: '/kiosk/shs',
    icon: 'i-heroicons-inbox'
  },
  {
    title: 'College',
    path: '/kiosk/college',
    icon: 'i-heroicons-inbox-stack'
  },
]

const isActive = (path) => {
  return route.path.startsWith(path)
}

</script>
