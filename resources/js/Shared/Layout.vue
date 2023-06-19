<template>
  <!-- Sidebar START -->
  <TheSideBar />
  <!-- Sidebar END -->

    <!-- Navigation START -->
    <TheNavbar />
    <!-- Sidebar END -->

    <!-- Main content START -->
    <div class="app--1__3">
      <!-- Filters section START -->
      <section>
        <div class="filters">
          <div class="filters__left">
            <div class="">
              <button class=" btn btn--outline"><i class="sidebar__icon las la-chart-bar"></i></button>
              <button class=" btn btn--outline"><i class="sidebar__icon las la-align-justify"></i></button>
            </div>
            <button class="btn btn--deal btn--primary">
              <span>
                <i class="nav__icon--s las la-plus"></i>
              </span>
              <span>Deal</span>
            </button>
          </div>
          <div class="filters__right">
            <div class="">
              <i class="las la-dollar-sign nav__icon--s"></i>
              <span>507,705</span>
            </div>
            <div class="">
              <i class="las la-balance-scale-left nav__icon--s"></i>
              <span>507,705</span>
            </div>
            <div class="">
              <span>23 deals</span>
            </div>
            
            <!-- Pipeline slot START-->
            <slot name="pipeline"></slot>
            <!-- Pipeline slot END-->
          </div>
        </div>
      </section>
      <!-- Filters section END -->

      <!-- Links Slots START -->
      <!-- <slot name="section-links"> -->
         <!-- Links Section START -->
        <!-- <section class="section section--lab">
          <ul>
            <li><a href="/">Home</a></li>
            <li><Link href="/logout" method="post" as="button" class="" :data="{foo:'bar'}">Logout</Link></li>
          </ul>
        </section> -->
        <!-- Links Section END -->
      <!-- </slot> -->
      <!-- Links Slots END -->

      <!-- Stages section START -->
      <section class="stage__list">
        <div>
          <div class="stage__item">
            <p class="stage__text">Qualified Lead</p>
            <div class="stage__summary">
              <div>
                <span><i class="las la-balance-scale-left stage__icon"></i></span>
                <span>$45,705</span>
              </div>
              <div class="">
                <span>23 deals</span>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="stage__item">
            <p class="stage__text">Contact Made</p>
            <div class="stage__summary">
              <div>
                <span><i class="las la-balance-scale-left stage__icon"></i></span>
                <span>$45,705</span>
              </div>
              <div class="">
                <span>23 deals</span>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="stage__item">
            <p class="stage__text">Meeting Arranged</p>
            <div class="stage__summary">
              <div>
                <span><i class="las la-balance-scale-left stage__icon"></i></span>
                <span>$45,705</span>
              </div>
              <div class="">
                <span>23 deals</span>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="stage__item">
            <p class="stage__text">Needs Defined</p>
            <div class="stage__summary">
              <div>
                <span><i class="las la-balance-scale-left stage__icon"></i></span>
                <span>$45,705</span>
              </div>
              <div class="">
                <span>23 deals</span>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="stage__item">
            <p class="stage__text">Proposal Sent</p>
            <div class="stage__summary">
              <div>
                <span><i class="las la-balance-scale-left stage__icon"></i></span>
                <span>$45,705</span>
              </div>
              <div class="">
                <span>23 deals</span>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="stage__item">
            <p class="stage__text">Contract Sent</p>
            <div class="stage__summary">
              <div>
                <span><i class="las la-balance-scale-left stage__icon"></i></span>
                <span>$45,705</span>
              </div>
              <div class="">
                <span>23 deals</span>
              </div>
            </div>
          </div>
        </div>
       
      </section>
      <!-- Stages section END -->

      <!-- Default Slot START -->
      <slot name="default"></slot>
      <!-- Default Slot END -->

    </div>
    <!-- Main content END -->
</template>

<style>
  .draggable-list {
    background: #3f51b5;
    color: #fff;
    border: 1px solid;
    height: 50vh;
  }
  .list-item {
    margin: 10px;
    padding: 40px;
    cursor: pointer;
    font-size: 18px;
    border-radius: 5px;
    background: #f44336;
    display: inline-block;
  }
</style>

<script setup>
  import TheSideBar from '../components/TheSideBar.vue';
  import TheNavbar from '../components/TheNavbar.vue';
  import { Link } from '@inertiajs/inertia-vue3';
</script>


