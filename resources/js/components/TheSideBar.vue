<template>
  <menu class="app--1__1 sidebar">
    <div class="company">
      <p class="company__name">V8</p>
    </div>
    <ul class="sidebar__list">
      <li class="sidebar__item">
        <Link href="/" class="sidebar__link">
          <i class="sidebar__icon las la-envelope"></i>
          <span></span>
        </Link>
      </li>
      <li class="sidebar__item" :class="{ 'sidebar__item--active': $page.url === '/index' }">
        <Link href="/pipelines/deals" class="sidebar__link">
          <i class="sidebar__icon las la-dollar-sign"></i>
          <span></span>
        </Link>
      </li>
      <li class="sidebar__item">
        <Link href="/pipelines" class="sidebar__link">
          <i class="sidebar__icon las la-table"></i>
          <span></span>
        </Link>
      </li>
      <li class="sidebar__item">
        <Link href="/pipelines/show" class="sidebar__link">
          <i class="sidebar__icon las la-table"></i>
          <span></span>
        </Link>
      </li>
      <li class="sidebar__item">
        <Link href="/pipelines/create" class="sidebar__link">
          <i class="sidebar__icon las la-table"></i>
          <span></span>
        </Link>
      </li>
      <li class="sidebar__item" :class="{ 'sidebar__item--active': $page.url === '/seller/index' }">
        <Link href="/seller/index" class="sidebar__link">
          <i class="sidebar__icon las la-address-book"></i>
          <span></span>
        </Link>
      </li>
      <li class="sidebar__item" :class="{ 'sidebar__item--active': $page.url === '/lab' }">
        <Link href="/lab" class="sidebar__link">
          <i class="sidebar__icon las la-flask"></i>
          <span></span>
        </Link>
      </li>
    </ul>
  </menu>
</template>

<style></style>

<script setup>
    import { Link } from '@inertiajs/inertia-vue3';
</script>