<template>
  <header :class="['flex cursor-default justify-between h-auto p-5 fixed w-full px-20 top-0 transition-all duration-300', {'bg-blue-800 dark:bg-yellow-500 shadow-lg': isScrolled}]">
    <div class="flex gap-2 items-center">
      <nuxt-link to="/products">
        <Logo :iconHeight="10"/>
      </nuxt-link>
      <ToggleDarkMode />
    </div>
    <!-- <UInput 
      class="w-1/2"
      v-model="q" 
      name="q"
      placeholder="Search a product..." 
      icon="i-heroicons-magnifying-glass-20-solid"
      autocomplete="off"
      color="gray" 
      size="sm" 
      :ui="{rounded: 'rounded',color: {gray: {outline: 'dark:bg-custom-100 dark:text-custom-900'}}, icon: { trailing: {pointer: '' }}}"
    >
      <template #trailing>
        <UButton
          v-show="q !== ''"
          color="gray"
          variant="link"
          icon="i-heroicons-x-mark-20-solid"
          :padded="false"
          @click="clearSearch"
          class="hover:text-red-400 dark:hover:text-red-600 text-red-700 dark:text-red-400"
        />
      </template>
    </UInput> -->
    <div class="w-1/3 flex items-center">
      <UInput 
        class="w-full"
        v-model="q" 
        name="q"
        placeholder="Search a product..." 
        icon="i-heroicons-magnifying-glass-20-solid"
        autocomplete="off"
        color="gray" 
        size="sm" 
        :ui="{rounded: 'rounded',color: {gray: {outline: 'dark:bg-custom-100 dark:text-custom-900'}}, icon: { trailing: {pointer: '' }}}"
      >
        <template #trailing>
          <UButton
            v-show="q !== ''"
            color="gray"
            variant="link"
            icon="i-heroicons-x-mark-20-solid"
            :padded="false"
            @click="clearSearch"
            class="hover:text-red-400 dark:hover:text-red-600 text-red-700 dark:text-red-400"
          />
        </template>
      </UInput>
    </div>
    <div class="items-center flex justify-center">
      <nuxt-link 
        :to="item.path" 
        v-for="(item, index) in items" 
        :key="index" 
        class="font-semibold"
      >
        <div 
          :class="[
          'grid items-center justify-center py-3 px-2 hover:bg-blue-200 dark:hover:bg-blue-700 rounded mx-1',
          { 'bg-blue-300 dark:bg-blue-600': activePath === item.path }
          ,{'text-yellow-500 dark:text-blue-500 transition duration-200 hover:bg-blue-900 hover:dark:bg-yellow-200': isScrolled }]">
          <UChip color="red" :text="item.count" size="2xl" :show="item.count > 0">
            <UIcon :name="item.icon" :class="['text-2xl dark:text-yellow-500 text-blue-500', {'text-yellow-500 dark:text-blue-600': isScrolled }]"/>
          </UChip>
          <p>{{ item.title }}</p>
        </div>
      </nuxt-link> 
    </div>
  </header>
</template>

<script setup>

const route = useRoute();

const items = [
  {
    icon: 'i-heroicons-shopping-cart-16-solid',
    title: 'Cart',
    count: 5,
    path: '/cart'
  },
  {
    icon: 'i-heroicons-shopping-bag-20-solid',
    title: 'Check out',
    count: 0,
    path: '/checkout'
  },
  {
    icon: 'i-heroicons-information-circle-20-solid',
    title: 'FAQs',
    count: 0,
    path: '/faq',
  },
  {
    icon: 'i-heroicons-arrow-right-start-on-rectangle-16-solid',
    title: 'Exit',
    count: 0,
    path: '/',
  },
];

const q = ref('');

// const filteredItems = computed(() => {
//   if (!q.value) {
//     return items;
//   }
//   return items.filter(item => item.label.toLowerCase().includes(q.value.toLowerCase()) || item.description.toLowerCase().includes(q.value.toLowerCase()));
// });

const clearSearch = () => {
  q.value = '';
};

const isScrolled = ref(false);

const handleScroll = () => {
  isScrolled.value = window.scrollY > 0;
};

onMounted(() => {
  window.addEventListener('scroll', handleScroll);
});

onUnmounted(() => {
  window.removeEventListener('scroll', handleScroll);
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