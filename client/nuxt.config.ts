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
  ui: {
    icons: [
      "bi",
    ]
  },
  tailwindcss: {
    config: {
      theme: {
        extend: {
          colors: {
            'blue': {
              50: '#f4f6fb',
              100: '#e9edf5',
              200: '#ced9e9',
              300: '#a2b8d7',
              400: '#7092c0',
              500: '#4e76a9',
              600: '#3c5d8d',
              700: '#314b73',
              800: '#2c4160',
              900: '#293851',
              950: '#202b40',
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