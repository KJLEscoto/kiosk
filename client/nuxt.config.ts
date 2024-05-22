// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  devtools: { enabled: false },
  modules: ["@nuxt/ui"],
  colorMode: {
    preference: "light"
  },
  css: [
    "~/assets/css/main.css"
  ],
  // ui: {
  //   icons: ["lucide"]
  // },
  tailwindcss: {
    config: {
      theme: {
        extend: {
          colors: {
            'blue': {
              50: '#f2f7f9',
              100: '#dde9f0',
              200: '#c0d6e1',
              300: '#94b9cc',
              400: '#6092b0',
              500: '#477a9a',
              600: '#3c617e',
              700: '#365168',
              800: '#324658',
              900: '#2d3c4c',
              950: '#1a2532',
            },      
            'yellow': {
              50: '#fcffe7',
              100: '#f6ffc1',
              200: '#f1ff86',
              300: '#f2ff41',
              400: '#faff0d',
              500: '#fff700',
              600: '#d1b800',
              700: '#a68602',
              800: '#89680a',
              900: '#74540f',
              950: '#442e04',
            },            
          }
        }
      }
    }
  }
})