<template>
  <div class="h-auto w-full flex flex-col gap-5">

    <header :class="['flex cursor-default justify-between w-auto h-auto p-4 sticky top-0 transition-all duration-300', { 'dark:bg-blue-800 bg-blue-700 shadow-lg': isScrolled }]">
      <h1 :class="['text-lg font-bold transition-all duration-300', {'text-white': isScrolled}]">Browse Products</h1>
      <UInput 
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
      </UInput>
    </header>

    <main class="p-4 mt-5">
      <section v-if="filteredItems.length > 0">
        <div class="grid grid-cols-4 gap-4 text-blue-800 dark:text-blue-900 w-full">
          <div v-for="(item, index) in filteredItems" :key="index" class="border p-3 dark:bg-blue-100 rounded bg-white">
            <img class="rounded-t" :src="item.image" alt="img">
            <p class="text-gray-500 font-normal text-xs">{{ item.description }}</p>
            <span class="font-semibold">{{ item.label }}</span>
            <p class="font-bold text-center">₱ {{ item.price }}</p>
          </div>
        </div>

        <div class="mt-5">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste praesentium beatae accusantium commodi, harum aperiam, veritatis ea voluptates nobis at nesciunt itaque iusto dolor, qui debitis dicta voluptatum. Eligendi, iste?
          Ullam cum autem expedita dolor! Sunt ex, voluptatum impedit eos quae rem dolorem dolore ad numquam placeat in nisi amet magni alias neque quod ullam mollitia fuga ea distinctio maiores?
          Dolorem voluptas voluptatum odio, aliquam vero quam corrupti quisquam quis consectetur, labore suscipit ullam soluta ducimus placeat nihil eius! Accusantium, beatae commodi dolor qui ratione maxime cupiditate mollitia modi hic?
          Fugit accusantium suscipit, rerum necessitatibus ducimus quas dignissimos porro modi nihil quis exercitationem sit neque omnis quod nam repellat magnam velit architecto delectus dolorem impedit nesciunt sequi. Debitis, corrupti est?
          Doloremque, corrupti? Deleniti est eligendi sequi quod ea tenetur quas numquam magni magnam animi libero unde inventore quia, ut, dolor voluptatem ad, soluta laborum doloribus suscipit. Vero dolorem aut facere.
          Laborum repellat molestiae nam! Assumenda saepe eum voluptates sequi illo quibusdam, aperiam quae atque nulla deserunt, a magni soluta, sit unde iure voluptatem nostrum placeat velit quod. Tempora, velit corrupti?
          Omnis possimus autem, provident temporibus totam adipisci vero voluptate modi consequatur, quae ipsa sed expedita quod ullam consequuntur nostrum! Doloribus explicabo exercitationem aliquid aperiam ipsam velit, iure molestiae quod deserunt?
          Distinctio explicabo ipsum qui obcaecati illo asperiores consectetur, quisquam at sint id veritatis quo velit dolorem non quae error placeat laboriosam praesentium porro beatae expedita ducimus facilis quasi! Praesentium, nobis!
        </div>
      </section>
      <section v-else class="flex mt-52 text-gray-700 dark:text-white font-semibold text-xl">
        <p class="m-auto">No items found. {{  }}</p>
      </section>
    </main>

    
  </div>
</template>


<script setup>

definePageMeta({
  layout: 'navigations'
});

const q = ref('');
const isScrolled = ref(false);

const items = [
  {
    image: 'https://picsum.photos/1920/1080?random=1',
    label: 'Uniform',
    description: 'this is an item description',
    price: '0.00'
  },
  {
    image: 'https://picsum.photos/1920/1080?random=2',
    label: 'Pants',
    description: 'this is an item description',
    price: '0.00'
  },
  {
    image: 'https://picsum.photos/1920/1080?random=3',
    label: 'Blabla',
    description: 'this is an item description',
    price: '0.00'
  },
  {
    image: 'https://picsum.photos/1920/1080?random=4',
    label: 'Uniform',
    description: 'this is an item description',
    price: '0.00'
  },
  {
    image: 'https://picsum.photos/1920/1080?random=5',
    label: 'Uniform',
    description: 'this is an item description',
    price: '10.00'
  },
];

const filteredItems = computed(() => {
  if (!q.value) {
    return items;
  }
  return items.filter(item => item.label.toLowerCase().includes(q.value.toLowerCase()) || item.description.toLowerCase().includes(q.value.toLowerCase()));
});

const clearSearch = () => {
  q.value = '';
};

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

