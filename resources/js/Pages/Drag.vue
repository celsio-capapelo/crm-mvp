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
          </div>
        </div>
      </section>
      <!-- Filters section END -->

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
      <section class="deal__table">
        <draggable class="deal__column deal__column--lead" :list="qualifiedLeads" group="dealGroup" item-key="id" 
          tag="ul" :move="handleMovie"
        >
          <template #item="{element}">
            <li class="deal__cell">
              <div class="deal">
                <div class="">
                  <p class="deal__text">{{ element.description }}</p>
                  <p class="deal__company">{{ element.company }}</p>
                  <p class="deal__summary">
                    <img class="deal__img u-circle" src="images/profile.png" alt="Seller picture">
                    <span class="deal__money">{{ element.description }}</span>
                  </p>
                </div>
                <div class="deal__right deal__icon-box"
                  :class="{
                    'deal__icon-box--triangle': !element.schedule,
                    'deal__icon-box--green u-circle': element.schedule === 'today',
                    'deal__icon-box--grey u-circle': element.schedule === 'future',
                    'deal__icon-box--red u-circle': element.schedule === 'delay' 
                  }"  
                >
                  <span v-if="!element.schedule" class="deal__icon">!</span>
                  <i v-else class="deal__icon las la-angle-right"></i>
                </div>
              </div>
            </li>
          </template>
        </draggable>
        <draggable class="deal__column deal__column--contact" :list="contactsMade" group="dealGroup" item-key="id" 
          tag="ul" :move="handleMovie"
        >
          <template #item="{element}">
            <li class="deal__cell">
              <div class="deal">
                <div class="">
                  <p class="deal__text">{{ element.description }}</p>
                  <p class="deal__company">{{ element.company }}</p>
                  <p class="deal__summary">
                    <img class="deal__img u-circle" src="images/profile.png" alt="Seller picture">
                    <span class="deal__money">{{ element.description }}</span>
                  </p>
                </div>
                <div class="deal__right deal__icon-box"
                  :class="{
                    'deal__icon-box--triangle': !element.schedule,
                    'deal__icon-box--green u-circle': element.schedule === 'today',
                    'deal__icon-box--grey u-circle': element.schedule === 'future',
                    'deal__icon-box--red u-circle': element.schedule === 'delay' 
                  }"  
                >
                  <span v-if="!element.schedule" class="deal__icon">!</span>
                  <i v-else class="deal__icon las la-angle-right"></i>
                </div>
              </div>
            </li>
          </template>
        </draggable>
        <draggable class="deal__column deal__column--meeting" :list="meetingsArranged" group="dealGroup" item-key="id" 
          tag="ul" :move="handleMovie"
        >
          <template #item="{element}">
            <li class="deal__cell">
              <div class="deal">
                <div class="">
                  <p class="deal__text">{{ element.description }}</p>
                  <p class="deal__company">{{ element.company }}</p>
                  <p class="deal__summary">
                    <img class="deal__img u-circle" src="images/profile.png" alt="Seller picture">
                    <span class="deal__money">{{ element.description }}</span>
                  </p>
                </div>
                <div class="deal__right deal__icon-box"
                  :class="{
                    'deal__icon-box--triangle': !element.schedule,
                    'deal__icon-box--green u-circle': element.schedule === 'today',
                    'deal__icon-box--grey u-circle': element.schedule === 'future',
                    'deal__icon-box--red u-circle': element.schedule === 'delay' 
                  }"  
                >
                  <span v-if="!element.schedule" class="deal__icon">!</span>
                  <i v-else class="deal__icon las la-angle-right"></i>
                </div>
              </div>
            </li>
          </template>
        </draggable>
        <draggable class="deal__column deal__column--need" :list="needsDefined" group="dealGroup" item-key="id" 
          tag="ul" :move="handleMovie"
        >
          <template #item="{element}">
            <li class="deal__cell">
              <div class="deal">
                <div class="">
                  <p class="deal__text">{{ element.description }}</p>
                  <p class="deal__company">{{ element.company }}</p>
                  <p class="deal__summary">
                    <img class="deal__img u-circle" src="images/profile.png" alt="Seller picture">
                    <span class="deal__money">{{ element.description }}</span>
                  </p>
                </div>
                <div class="deal__right deal__icon-box"
                  :class="{
                    'deal__icon-box--triangle': !element.schedule,
                    'deal__icon-box--green u-circle': element.schedule === 'today',
                    'deal__icon-box--grey u-circle': element.schedule === 'future',
                    'deal__icon-box--red u-circle': element.schedule === 'delay' 
                  }"  
                >
                  <span v-if="!element.schedule" class="deal__icon">!</span>
                  <i v-else class="deal__icon las la-angle-right"></i>
                </div>
              </div>
            </li>
          </template>
        </draggable>
        <draggable class="deal__column deal__column--proposal" :list="proposalsSent" group="dealGroup" item-key="id" 
          tag="ul" :move="handleMovie"
        >
          <template #item="{element}">
            <li class="deal__cell">
              <div class="deal">
                <div class="">
                  <p class="deal__text">{{ element.description }}</p>
                  <p class="deal__company">{{ element.company }}</p>
                  <p class="deal__summary">
                    <img class="deal__img u-circle" src="images/profile.png" alt="Seller picture">
                    <span class="deal__money">{{ element.description }}</span>
                  </p>
                </div>
                <div class="deal__right deal__icon-box"
                  :class="{
                    'deal__icon-box--triangle': !element.schedule,
                    'deal__icon-box--green u-circle': element.schedule === 'today',
                    'deal__icon-box--grey u-circle': element.schedule === 'future',
                    'deal__icon-box--red u-circle': element.schedule === 'delay' 
                  }"  
                >
                  <span v-if="!element.schedule" class="deal__icon">!</span>
                  <i v-else class="deal__icon las la-angle-right"></i>
                </div>
              </div>
            </li>
          </template>
        </draggable>
        <draggable class="deal__column deal__column--contract" :list="contractsSent" group="dealGroup" item-key="id" 
          tag="ul" :move="handleMovie"
        >
          <template #item="{element}">
            <li class="deal__cell">
              <div class="deal">
                <div class="">
                  <p class="deal__text">{{ element.description }}</p>
                  <p class="deal__company">{{ element.company }}</p>
                  <p class="deal__summary">
                    <img class="deal__img u-circle" src="images/profile.png" alt="Seller picture">
                    <span class="deal__money">{{ element.description }}</span>
                  </p>
                </div>
                <div class="deal__right deal__icon-box"
                  :class="{
                    'deal__icon-box--triangle': !element.schedule,
                    'deal__icon-box--green u-circle': element.schedule === 'today',
                    'deal__icon-box--grey u-circle': element.schedule === 'future',
                    'deal__icon-box--red u-circle': element.schedule === 'delay' 
                  }"  
                >
                  <span v-if="!element.schedule" class="deal__icon">!</span>
                  <i v-else class="deal__icon las la-angle-right"></i>
                </div>
              </div>
            </li>
          </template>
        </draggable>
      </section>
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

  import { ref } from "vue";
  import draggable from 'vuedraggable';

  const props = defineProps({
    deals: Array,
    time: String,
  });

  const qualifiedLeads = ref(props.deals.filter(d => d.stages_id === 1));
  const contactsMade = ref(props.deals.filter(d => d.stages_id === 2));
  const meetingsArranged = ref(props.deals.filter(d => d.stages_id === 3));
  const needsDefined = ref(props.deals.filter(d => d.stages_id === 4));
  const proposalsSent = ref(props.deals.filter(d => d.stages_id === 5));
  const contractsSent = ref(props.deals.filter(d => d.stages_id === 6));

  const handleMovie = e => {
    // Prevent putting deals to 'needs stage' when this stage was passed
    if ( e.to.getAttribute('class').includes('--need') ||
      e.to.getAttribute('class').includes('--meeting') ||
      e.to.getAttribute('class').includes('--contact') ||
      e.to.getAttribute('class').includes('--lead')
    ) {
      if ( e.from.getAttribute('class').includes('--proposal') || 
        e.from.getAttribute('class').includes('--contract') ) {
          console.log('Forbirdden');
          // alert('You cannot retun to \'needs\' stage because you already have sent a proposal or contract.');
          return false;
      }
    } 

    // if ( !e.from.getAttribute('class').includes('--proposal') ) return false;
    // if ( !e.from.getAttribute('class').includes('--contract') ) return false;

    // if ( e.to.getAttribute('class').includes('--need') ||
    //   e.to.getAttribute('class').includes('--meeting') ||
    //   e.to.getAttribute('class').includes('--contact') ||
    //   e.to.getAttribute('class').includes('--lead')
    //   ) {
    //     console.log('You cannot retun to \'needs\' stage because you already have sent a proposal or contract.');
    //     // alert('You cannot retun to \'needs\' stage because you already have sent a proposal or contract.');
    //     return false;
    // }
  }
</script>


