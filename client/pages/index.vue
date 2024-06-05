<template>
  <div class="h-full w-full">
  <div class="absolute top-5 left-5 z-10 flex gap-x-2 items-center">
    <Logo 
      :iconHeight="10" 
      :isBackground="true" />
    <ToggleDarkMode />
  </div>

  <div class="w-full h-screen flex flex-col justify-between">
    <UCarousel
      ref="carouselRef"
      v-slot="{ item }"
      :items="items"
      :ui="{ item: 'basis-full' }"
      class="overflow-hidden w-auto"
      indicators >
    <img 
      :src="item" 
      class="w-full h-screen" 
      draggable="false" >
    </UCarousel>

  <UButton
    :label="loadLabel" 
    class="bg-blue-500 hover:bg-blue-600 text-yellow-500 dark:text-yellow-500 transition-all duration-100 w-full rounded-none flex justify-center h-40 text-lg font-black"
    @click="handleClick" 
    :loading-icon="loadIcon"
    :loading="loading" />
  </div>

  </div>
</template>

<script setup lang="ts">
const items = [
  'https://picsum.photos/1920/1080?random=1',
  'https://picsum.photos/1920/1080?random=2',
  'https://picsum.photos/1920/1080?random=3',
  'https://picsum.photos/1920/1080?random=4',
  'https://picsum.photos/1920/1080?random=5',
  'https://picsum.photos/1920/1080?random=6'
]

const carouselRef = ref()

onMounted(() => {
  setInterval(() => {
  if (!carouselRef.value) return

  if (carouselRef.value.page === carouselRef.value.pages) {
    return carouselRef.value.select(0)
  }

  carouselRef.value.next()
  }, 2500)
})

const loading = ref(false);
const loadIcon = ref('')
const loadLabel = ref('Click to Start')

const handleClick = () => {
  loading.value = true;
  loadLabel.value = '';
  loadIcon.value = 'i-bi-arrow-clockwise'
  setTimeout(() => {
    navigateTo('/kiosk/products');
    loading.value = false;
    loadLabel.value = 'Click to Start';
  }, 1000);
};
</script>
  