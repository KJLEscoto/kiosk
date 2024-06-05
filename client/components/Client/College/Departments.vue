<template>
  <div class="fixed left-0 top-60 z-30">
    <main class="h-auto w-auto bg-blue-500 grid grid-cols-1 p-1 gap-1 rounded-r">
        <nuxt-link 
          v-for="(dept) in departments" 
          :key="dept.path" 
          :to="dept.path" 
        >
          <UTooltip
            :popper="{ placement: 'right' }"
            :ui="{background: 'bg-white dark:bg-blue-700'}"
            :text="dept.label">
            <h1 
              :class="{
                'bg-blue-700 text-white dark:text-white': isActive(dept.path),
                'h-8 w-8 bg-blue-200 dark:text-blue-900 hover:opacity-70 flex items-center justify-center rounded-sm': true
              }" class="font-semibold">
                {{ dept.title }}
              </h1>
          </UTooltip>
        </nuxt-link>
    </main>
  </div>
</template>

<script setup>
import { useRoute } from 'vue-router'

const route = useRoute()

const departments = [
  {
    title: 'IT',
    label: 'Information Technology',
    path: '/kiosk/college/it'
  },
  {
    title: 'HM',
    label: 'Hospitality Management',
    path: '/kiosk/college/hm'
  },
  {
    title: 'TM',
    label: 'Tourism Management',
    path: '/kiosk/college/tm'
  },
]

const isActive = (path) => {
  return route.path.startsWith(path)
}

</script>
