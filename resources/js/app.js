import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { InertiaProgress } from '@inertiajs/progress'

// document.addEventListener('click', (e) => {
//   console.log(e);
// });

// /////////////////////////////////////////////////
// // Menu
// const menuCollection = document.querySelectorAll('.menu');

// menuCollection.forEach(m => {
//   let menuIsOpened = false;
//   const menuTrigger = m.querySelector(".menu__trigger");
//   const menuList = m.querySelector(".menu__list");

//   // Functions
//   const closeMenu = () => {
//     menuList.classList.add("menu__list--hidden");
//     menuIsOpened = false;
//   };

//   const openMenu = () => {
//     menuList.classList.remove("menu__list--hidden");
//     menuIsOpened = true;
//   };

//   const toggleMenu = () =>
//     menuIsOpened ? closeMenu() : openMenu();
  
//   // Event Listeners
//   // Open or close menu clicking on menuTrigger
//   menuTrigger.addEventListener("click", toggleMenu);

//   // Close dropdown clicking outside dropdown
//   document.addEventListener("click", (e) => {
//     console.log('Inside dropdown click');
//     const clickOutsideDropdown = !e.target.closest(".menu");
//     if (clickOutsideDropdown && menuIsOpened) closeMenu();
//   });

//   // Close dropdown by pressing the ESC key
//   window.addEventListener("keydown", (e) => {
//     if (e.key === "Escape" && menuIsOpened) closeMenu();
//   });
// });

createInertiaApp({
  resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .mount(el)
  },
});

InertiaProgress.init({
  color: '#4C63B6',
  showSpinner: true,
});

console.log('JS_SCRIPT_END');