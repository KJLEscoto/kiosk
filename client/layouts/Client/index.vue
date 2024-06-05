<template>

<section class="block items-start w-full h-auto">

  <header class="w-full mb-40">
    <ClientNavHeader />
  </header>
  
  <section class="z-0 w-full h-auto">
    <slot />
    <ClientFooter />
  </section>
  
</section>

<footer class="fixed bottom-0 w-full z-20">
  <ClientNavFooter />
</footer>

</template>
