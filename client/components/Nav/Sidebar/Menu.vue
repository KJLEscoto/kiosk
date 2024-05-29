<template>
  <div class="w-full tracking-wide text-blue-50">

    <header class="w-full flex justify-between p-3 items-center border-b border-blue-500">
      <nuxt-link to="/products">
        <Logo :iconHeight="8"/>
      </nuxt-link>
      <ToggleDarkMode />
    </header>

    <section class="grow overflow-y-auto lg:max-h-[79vh] max-h-[30vh] w-auto">
      <div class="grid gap-2 p-3 w-full justify-center">
        <nuxt-link 
          :to="item.path" 
          v-for="(item, index) in items" 
          :key="index" 
          class="flex flex-col gap-1 h-28 w-28 items-center dark:hover:bg-blue-600 hover:bg-blue-500 py-2 transition cursor-pointer rounded-full relative" 
          :class="{ 'bg-blue-800 dark:bg-blue-700': activePath === item.path }"
        >
          <img :src="item.image" alt="img" class="w-16 h-16 rounded-full"/>
          <label>{{ item.title }}</label>
        </nuxt-link>
      </div>
    </section>
  </div>
</template>

<script setup>
import { ref, computed, watch } from 'vue';
import { useRoute } from 'vue-router';

const route = useRoute();

const menuItems = ref([
  {
    title: 'Overview',
    path: '/products',
    image: 'https://picsum.photos/1920/1080?random=1'
  },
  {
    title: 'Pants',
    path: '/products/pants',
    image: 'https://picsum.photos/1920/1080?random=2'
  },
  {
    title: 'Uniform',
    path: '/products/uniform',
    image: 'https://picsum.photos/1920/1080?random=3'
  },{
    title: 'Overview',
    path: '/products',
    image: 'https://picsum.photos/1920/1080?random=1'
  },
  {
    title: 'Pants',
    path: '/products/pants',
    image: 'https://picsum.photos/1920/1080?random=2'
  },
  {
    title: 'Uniform',
    path: '/products/uniform',
    image: 'https://picsum.photos/1920/1080?random=3'
  },
]);

const items = computed(() => {
  return menuItems.value;
});

const activePath = ref(route.path);

watch(
  () => route.path,
  (newPath) => {
    activePath.value = newPath;
  },
  { immediate: true }
);
</script>
