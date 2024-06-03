<template>
  <footer class="h-auto w-full pt-20 mt-20 border-t border-blue-200 dark:border-blue-800">
    <div class="grid grid-cols-3 px-20 gap-10 h-2/3 bg-inherit mb-20">
      <section class="flex flex-col gap-5">
        <h1 class="text-lg font-semibold">STI College Davao</h1>
        <ul class="grid gap-2">
          <li v-for="(info) in infos" class="flex justify-start gap-x-1">
            <div class="">
              <UIcon :name="info.icon" class="text-lg -mt-1 mr-1"/>
              <span class="font-semibold">{{ info.title }}: </span> <span>{{ info.description }}</span>
            </div>
          </li>
        </ul>
      </section>
      <section class="flex flex-col gap-5">
        <h1 class="text-lg font-semibold">Navigations</h1>
        <div class="grid grid-cols-2 gap-5">
          <ul class="flex flex-col gap-2">
            <li v-for="(footer) in navs[0]">
              <nuxt-link :to="footer.path" class="hover:opacity-50">
                <span>{{ footer.label }}</span>
              </nuxt-link>
            </li>
          </ul>
          <ul class="flex flex-col gap-2">
            <li v-for="(header) in navs[1]">
              <nuxt-link :to="header.path" class="hover:opacity-50">
                <span>{{ header.label }}</span>
              </nuxt-link>
            </li>
          </ul>
        </div>
      </section>
      <section class="flex flex-col gap-5">
        <h1 class="text-lg font-semibold">Get Regular Updates</h1>
        <ul class="grid gap-2">
          <li v-for="(link) in links" class="flex justify-start gap-x-1">
            <nuxt-link :to="link.path" target="_blank" class="flex justify-start items-center gap-x-2 hover:opacity-50">
              <UIcon :name="link.icon" class="text-lg"/>
              <span class="font-normal">{{ link.title }}</span>
            </nuxt-link>
          </li>
        </ul>
      </section>
    </div>
    <div class="h-[150px] w-full flex items-center bg-yellow-500 text-blue-900 px-20">
      <div class="flex justify-between items-center w-full">
        <p class="font-semibold">©2024 BSCS. All rights reserved</p>
        <UIcon name="i-bi-arrow-up-circle" class="text-3xl hover:opacity-50" @click="scrollToTop"/>
      </div>
    </div>
  </footer>
</template>

<script setup>

const scrollToTop = () => {
  window.scrollTo({ top: 0, behavior: 'smooth' });
};

const infos = [
  {
    icon: 'i-bi-geo-alt-fill',
    title: 'Location',
    description: '#506 Lim Building J.P. Laurel Avenue, Corner Acacia, Davao City, Philippines'
  },
  {
    icon: 'i-bi-telephone-fill',
    title: 'Phone',
    description: '(082) 282 1906 | (082) 315-5301'
  },
  {
    icon: 'i-bi-envelope-fill',
    title: 'Email',
    description: 'recruitment@davao.sti.edu'
  }
]

const navs = [
  [
    {
      label: 'All Products',
      path: '/products'
    },
    {
      label: 'Senior High',
      path: '/products/shs'
    },
    {
      label: 'College',
      path: '/products/college'
    },
  ],
  [
    {
      label: 'Cart',
      path: '/cart'
    },
    {
      label: 'FAQs',
      path: '/faq'
    },
  ]
];


const links = [
  {
    icon: 'i-bi-facebook',
    title: 'Facebook',
    path: 'https://www.facebook.com/sti.edu'
  },
  {
    icon: 'i-bi-youtube',
    title: 'Youtube',
    path: 'https://www.youtube.com/user/STIdotEdu'
  },
  {
    icon: 'i-bi-instagram',
    title: 'Instagram',
    path: 'https://www.instagram.com/sti_college/'
  },
  {
    icon: 'i-bi-twitter-x',
    title: 'Twitter',
    path: 'https://x.com/sticollege'
  },
  {
    icon: 'i-bi-tiktok',
    title: 'Tiktok',
    path: 'https://www.tiktok.com/@sti.edu'
  },
]

</script>