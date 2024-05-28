<template>

<section class="lg:flex grid items-start w-full h-auto">
  <nav class="w-40 z-10 h-full p-3 bg-blue-700 dark:bg-blue-800 top-0 left-0 fixed">
    <div class="flex flex-col">
      <NavSidebar />
    </div>
  </nav>
  
  <section class="ml-40 z-0 mb-20 w-full h-auto">
    <slot />
  </section>
  
</section>

<footer class="fixed bottom-0 w-full z-20 ml-40">
  <NavFooter />
</footer>

</template>
