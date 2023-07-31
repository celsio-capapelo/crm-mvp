<template>
  <div class="menu" @keyup.esc="handleEsc">
    <div class="menu__trigger u-border" @click="toggleMenu" tabindex="0">
    <!-- <div class="menu__trigger u-border" @click="toggleMenu" tabindex="0" @blur="handleBlur"> -->
      <div>
        <i class="las la-bars"></i>
        <button class="btn btn--text">Manage</button>
      </div>
      <div></div>
    </div>
    <ul class="menu__list u-border" :class="{ 'menu__list--hidden': isMenuClosed }" method="" action="#">
        <li 
          v-for="pipeline in pipelines" 
          :key="pipeline.id" 
          class="menu__item menu__item--space-between"
        >
          <div>
          <button class="btn btn--text">{{ pipeline.name }}</button>
        </div>
        <div>
          <i class="las la-edit"></i>
        </div>
      </li>
      <!-- <li class="menu__item menu__item--space-between">
        <div>
          <button class="btn btn--text">Pipeline 2</button>
        </div>
        <div>
          <i class="las la-edit"></i>
        </div>
      </li>
      <li class="menu__item menu__item--space-between u-border-bottom">
        <div>
          <button class="btn btn--text">Pipeline 3</button>
        </div>
        <div>
          <i class="las la-edit"></i>
        </div>
      </li> -->
      <li class="menu__item menu__item--space-between">
        <div>
          <i class="las la-plus"></i>
          <button class="btn btn--text" @click="openModal">Add pipeline</button>
        </div>
        <div>
        </div>
      </li>
      <li class="menu__item menu__item--space-between">
        <div>
          <i class="las la-edit"></i>
          <button class="btn btn--text" @click="openEditModal">Edit pipeline</button>
        </div>
        <div>
        </div>
      </li>
      <li class="menu__item menu__item--space-between">
        <div>
          <i class="las la-sort"></i>
          <button class="btn btn--text">Arranje pipeline</button>
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
  import {ref, inject} from 'vue';
  import {store} from '../store.js';
  
  // Inject
  const pipelines = inject('pipelines');

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
  const handleBlur = () => setTimeout(() => closeMenu(), 150);
  const openModal = () => {
    store.isAddModalOpen = true
    setTimeout(() => {
      document.querySelector('#initialFocusOnAddPipelineModal').focus();
    }, 10);
    closeMenu();
  };

  const openEditModal = () => {
    store.isEditModalOpen = true
    setTimeout(() => {
      document.querySelector('#initialFocusOnEditPipelineModal').focus();
    }, 10);
    closeMenu();
  };
</script>