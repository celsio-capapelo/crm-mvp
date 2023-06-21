<template>
  <div class="menu" @keyup.esc="handleEsc">
          <div class="menu__trigger u-border" @click="toggleMenu" tabindex="0" @blur="closeMenu">
            <div>
              <i class="las la-bars"></i>
              <span>Manage</span>
            </div>
            <div></div>
          </div>
          <ul 
            class="menu__list u-border" 
            :class="{'menu__list--hidden': isMenuClosed}" 
            method="" 
            action="#"
          
          >
            <li class="menu__item menu__item--space-between">
              <div>
                <span>Pipeline 1</span>
              </div>
              <div>
                <i class="las la-edit"></i>
              </div>
            </li>
            <li class="menu__item menu__item--space-between">
              <div>
                <span>Pipeline 2</span>
              </div>
              <div>
                <i class="las la-edit"></i>
              </div>
            </li>
            <li class="menu__item menu__item--space-between u-border-bottom">
              <div>
                <span>Pipeline 3</span>
              </div>
              <div>
                <i class="las la-edit"></i>
              </div>
            </li>
            <li class="menu__item menu__item--space-between">
              <div>
                <i class="las la-plus"></i>
                <button class="btn btn--xs btn--link">Add pipeline</button>
              </div>
              <div>
              </div>
            </li>
            <li class="menu__item menu__item--space-between">
              <div>
                <i class="las la-edit"></i>
                <span>Edit pipeline</span>
              </div>
              <div>
              </div>
            </li>
            <li class="menu__item menu__item--space-between">
              <div>
                <i class="las la-sort"></i>
                <span>Arranje pipeline</span>
              </div>
              <div>
              </div>
            </li>
          </ul>
        </div>
</template>

<style></style>

<script setup>
// Import
import {ref} from 'vue';

// State
let isMenuClosed = ref(true);

// Method
const closeMenu = () => isMenuClosed.value = true;
const openMenu = () => isMenuClosed.value = false;
const toggleMenu = () => isMenuClosed.value ? openMenu() : closeMenu();
const handleEsc = () => {
  if (isMenuClosed.value) return;
  closeMenu();
}
</script>