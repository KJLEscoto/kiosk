<template>
  <header :class="['flex cursor-default justify-between h-auto p-5 fixed w-full px-20 top-0 transition-all duration-200 z-50', {'bg-blue-900 dark:bg-blue-800 shadow-lg': isScrolled}]">
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
    <div class="items-center flex justify-center gap-x-5">
      <nuxt-link 
        :to="item.path" 
        v-for="(item, index) in items" 
        :key="index" 
        class="font-semibold"
        active-class="opacity-50"
      >
        <div class="grid items-center justify-center hover:opacity-50 rounded">
          <UChip color="red" :text="item.count" size="2xl" :show="item.count > 0">
            <UIcon :name="item.icon" :class="['text-2xl dark:text-yellow-500 text-blue-500', {'text-yellow-500 dark:text-blue-700': isScrolled }]"/>
          </UChip>
          <p 
            :class="['text-blue-900 dark:text-white'
            ,{'text-white dark:text-blue-700 transition duration-200': isScrolled }]">
            {{ item.title }}
          </p>
        </div>
      </nuxt-link> 
    </div>
  </header>
</template>

<script setup>

const items = [
  {
    icon: 'i-bi-cart',
    title: 'Cart',
    count: 5,
    path: '/cart'
  },
  {
    icon: 'i-bi-exclamation-circle',
    title: 'FAQs',
    count: 0,
    path: '/faq',
  },
  {
    icon: 'i-bi-box-arrow-right',
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

</script>