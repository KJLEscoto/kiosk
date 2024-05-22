<script setup lang="ts">
const colorMode = useColorMode()
const toggleText = computed(() => (isDark.value ? 'Turn Light' : 'Turn Dark'));
const isDark = computed({
  get () {
    return colorMode.value === 'dark'
  },
  set () {
    colorMode.preference = colorMode.value === 'dark' ? 'light' : 'dark'
  }
})
</script>
<template>
  <UTooltip :text="toggleText" :popper="{ arrow: true, placement: 'right' }" :ui="{ background: 'dark:bg-blue-800 bg-blue-50', arrow: { background: 'dark:before:bg-blue-800 before:bg-blue-200'}}">
    <ClientOnly>
      <UButton
        :icon="isDark ? 'i-heroicons-moon-20-solid' : 'i-heroicons-sun-20-solid'"
        color="gray"
        variant="ghost"
        aria-label="Theme"
        @click="isDark = !isDark"
        class="rounded-full dark:hover:bg-blue-800 hover:bg-blue-100"
      />
      <template #fallback>
        <div class="w-8 h-8" />
      </template>
    </ClientOnly>  
  </UTooltip> 
</template>
