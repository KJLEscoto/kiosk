<template>
  <div class="h-auto w-full flex flex-col gap-10">
    <header class="px-20 flex justify-center">
      <div>
        <h1 class="font-bold text-3xl">Frequently Asked Questions!</h1>
        <p class="text-center">We've got you covered.</p>
      </div>
    </header>
    <main class="px-20 h-auto w-full">
      <div class="grid grid-cols-3 gap-10 h-auto">
        <section v-for="(item) in items" class="border dark:border-blue-700 border-blue-200 bg-white dark:bg-blue-900 flex flex-col gap-2 p-4 rounded">
          <UIcon :name="item.icon" class="mx-auto text-6xl"/>
          <h1 class="font-semibold text-lg">{{ item.title }}</h1>
          <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod voluptas cum adipisci perferendis veritatis tenetur id, excepturi perspiciatis sequi architecto eaque nobis rem dolorem distinctio blanditiis laudantium tempora inventore exercitationem?
          Nam doloribus sapiente dolore ratione! Accusamus impedit error quisquam repudiandae tenetur laboriosam mollitia dolorem voluptatem excepturi autem. Fugit numquam, quam temporibus fugiat sunt sequi repellat dolores laudantium pariatur ipsum facere!</p>
        </section>
      </div>
    </main>
  </div>
</template>

<script setup>
definePageMeta({
  layout: 'client'
});

const items = [
  {
    icon: 'i-bi-handbag',
    title: "What types of products do you offer?",
    description: ''
  },
  {
    icon: 'i-bi-arrow-repeat',
    title: "Can I return or exchange items if they don't fit or if I change my mind?",
    description: ''
  },
  {
    icon: 'i-bi-cart-dash',
    title: "Do you offer discounts for bulk orders?",
    description: ''
  },
  {
    icon: 'i-bi-telephone-inbound',
    title: "How can I contact customer support if I have further questions?",
    description: ''
  },
  {
    icon: 'i-bi-bookmark-check',
    title: "Do you offer any promotions or deals?",
    description: ''
  }
]

</script>