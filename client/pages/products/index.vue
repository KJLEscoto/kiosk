<template>
  <div class="h-auto w-full flex flex-col gap-5">

    <!--v-if length < 0-->
    <section class="flex flex-col gap-20">
      <div class="flex flex-col gap-5 px-20">
        <section class="flex gap-2 items-center">
          <hr class="w-1/12 border-blue-200">
          <h1 class="font-semibold text-base">Highlights</h1>
          <hr class="w-full border-blue-200">
        </section>
        <section class="grid grid-cols-4 gap-4 text-blue-800 dark:text-blue-900 w-full">
          <nuxt-link v-for="(product, index) in products" :to="`/products/${product.id}`" :key="index" class="border p-3 rounded bg-white flex flex-col justify-between gap-2">
              <img :src="product.image" alt="img" class="w-auto h-24 mx-auto">
              <p class="text-sm text-gray-500">{{ product.title }}</p>
              <h1 class="mx-auto font-semibold">${{ product.price }}</h1>
            </nuxt-link>
        </section>
      </div>
      
      <div class="flex justify-center w-full h-auto">
        <section class="h-[350px] w-1/2 bg-yellow-600">
          <img src="https://picsum.photos/1920/1080?random=1" alt="" class="h-full w-full">
        </section>
        <section class="h-auto w-1/2 bg-blue-700 p-5 flex flex-col gap-5 justify-between">
          <h1 class="font-bold text-xl text-white">Senior High</h1>
          <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, eum, architecto hic odio, culpa possimus tenetur optio doloremque quibusdam quidem cupiditate natus libero repellat consequuntur? Explicabo nesciunt pariatur rerum maxime.
          At cupiditate veniam minus similique adipisci accusantium sit velit maiores nostrum vitae praesentium ducimus facere quam pariatur cumque deleniti aspernatur laudantium commodi est consequatur, libero recusandae dolore quos. Accusamus, distinctio!
          Veniam ipsum minima nemo. Accusamus aperiam quos recusandae ratione quis, nesciunt commodi dolor? Labore optio odio exercitationem non ducimus sint velit rem hic suscipit delectus. Suscipit quis libero distinctio commodi!</p>
          <div>
            <UButton to="/products/shs" label="View Products >" class="bg-yellow-600 dark:bg-yellow-400"/>
          </div>
        </section>
      </div>

      <div class="px-20">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis dolores officiis optio eum possimus consectetur libero nesciunt ratione nemo amet, inventore repudiandae nihil facere modi, exercitationem incidunt mollitia asperiores suscipit?
        Natus repudiandae optio ducimus sit accusantium mollitia alias, architecto animi inventore consectetur soluta exercitationem quod cupiditate quidem voluptatum doloremque voluptatem voluptates doloribus nemo voluptas. Quis maiores illo sit nemo dignissimos.
        Perferendis quos alias minima nemo, corrupti veniam fugit dolor! Quod nulla incidunt, obcaecati impedit, voluptate animi tempora vero temporibus excepturi cupiditate doloremque porro aspernatur eaque labore suscipit, natus inventore! Voluptatum.
        Quas, incidunt voluptates esse illum, laudantium reiciendis, nesciunt eum excepturi suscipit impedit similique doloribus quasi. Aperiam praesentium illo sed repellendus ab ad ea explicabo. Consequuntur nulla repellat qui at dolore.
        Ut modi amet reiciendis fugiat, hic perferendis quisquam cum similique nesciunt nulla omnis quaerat, pariatur, exercitationem repudiandae tempora aliquid voluptas aliquam eos maxime cupiditate necessitatibus error et! Iusto, nobis? Recusandae.
        Quaerat debitis expedita saepe quia! Dicta officia eveniet in libero optio autem dignissimos, mollitia numquam rerum ipsum amet praesentium reiciendis ab iste aperiam voluptatibus voluptatem sint expedita cupiditate consectetur aliquam.
        Dolorem sit fugiat suscipit culpa laborum aliquid placeat perspiciatis? Laboriosam, voluptate asperiores! Cupiditate, amet rem! Odio dolorum doloremque ipsa eum, ullam repellendus recusandae voluptates iusto. Possimus perferendis recusandae quos velit.
      </div>

      <div class="flex justify-center w-full h-auto">
        <section class="h-auto w-1/2 bg-blue-700 p-5 flex flex-col gap-5 justify-between">
          <h1 class="font-bold text-xl text-white">College</h1>
          <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, eum, architecto hic odio, culpa possimus tenetur optio doloremque quibusdam quidem cupiditate natus libero repellat consequuntur? Explicabo nesciunt pariatur rerum maxime.
          At cupiditate veniam minus similique adipisci accusantium sit velit maiores nostrum vitae praesentium ducimus facere quam pariatur cumque deleniti aspernatur laudantium commodi est consequatur, libero recusandae dolore quos. Accusamus, distinctio!
          Veniam ipsum minima nemo. Accusamus aperiam quos recusandae ratione quis, nesciunt commodi dolor? Labore optio odio exercitationem non ducimus sint velit rem hic suscipit delectus. Suscipit quis libero distinctio commodi!</p>
          <div>
            <UButton to="/products/college" label="View Products >" class="bg-yellow-600 dark:bg-yellow-400"/>
          </div>
        </section>
        <section class="h-[350px] w-1/2 bg-yellow-600">
          <img src="https://picsum.photos/1920/1080?random=2" alt="" class="h-full w-full">
        </section>
      </div>
    </section>

    <!--v-else-->
    <!-- <section class="flex mt-52 text-gray-700 dark:text-white font-semibold text-xl">
      <p class="m-auto">No items found.</p>
    </section> -->
    
  </div>
</template>


<script setup>

definePageMeta({
  layout: 'navigations'
});

const { data: products } = await useFetch('https://fakestoreapi.com/products');

</script>

