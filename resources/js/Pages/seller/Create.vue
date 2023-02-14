<!-- <template>
  <p>INDEX</p>
  <a href="/show">SHOW</a>
</template>

<style></style>
<script setup></script> -->

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

      <!-- Deals section START -->
      <section class="deal__table">
        <ul class="deal__column ">
          <li class="deal__cell" v-for="deal in qualifiedLeads" :key="deal.id">
            <div class="deal">
              <div class="">
                <p class="deal__text">{{ deal.description }}</p>
                <p class="deal__company">{{ deal.company }}</p>
                <p class="deal__summary">
                  <img class="deal__img u-circle" src="images/profile.png" alt="Seller picture">
                  <span class="deal__money">{{ deal.description }}</span>
                </p>
              </div>
              <div class="deal__right deal__icon-box"
                :class="{
                  'deal__icon-box--triangle': !deal.schedule,
                  'deal__icon-box--green u-circle': deal.schedule === 'today',
                  'deal__icon-box--grey u-circle': deal.schedule === 'future',
                  'deal__icon-box--red u-circle': deal.schedule === 'delay' 
                }"  
              >
                <span v-if="!deal.schedule" class="deal__icon">!</span>
                <i v-else class="deal__icon las la-angle-right"></i>
              </div>
              <!-- <div class="deal__right deal__icon-box deal__icon-box--green u-circle">
                <i class="deal__icon las la-angle-right"></i>
              </div> -->
            </div>
          </li>
        </ul> 
        
        
        <ul class="deal__column ">
          <li class="deal__cell" v-for="deal in contactsMade" :key="deal.id">
            <div class="deal">
              <div class="">
                <p class="deal__text">{{ deal.description }}</p>
                <p class="deal__company">{{ deal.company }}</p>
                <p class="deal__summary">
                  <img class="deal__img u-circle" src="images/profile.png" alt="Seller picture">
                  <span class="deal__money">{{ deal.description }}</span>
                </p>
              </div>
              <div class="deal__right deal__icon-box"
                :class="{
                  'deal__icon-box--triangle': !deal.schedule,
                  'deal__icon-box--green u-circle': deal.schedule === 'today',
                  'deal__icon-box--grey u-circle': deal.schedule === 'future',
                  'deal__icon-box--red u-circle': deal.schedule === 'delay' 
                }"  
              >
                <span v-if="!deal.schedule" class="deal__icon">!</span>
                <i v-else class="deal__icon las la-angle-right"></i>
              </div>
            </div>
          </li>
        </ul>

       
        <ul class="deal__column ">
          <li class="deal__cell" v-for="deal in meetingsArranged" :key="deal.id">
            <div class="deal">
              <div class="">
                <p class="deal__text">{{ deal.description }}</p>
                <p class="deal__company">{{ deal.company }}</p>
                <p class="deal__summary">
                  <img class="deal__img u-circle" src="images/profile.png" alt="Seller picture">
                  <span class="deal__money">{{ deal.description }}</span>
                </p>
              </div>
              <div class="deal__right deal__icon-box"
                :class="{
                  'deal__icon-box--triangle': !deal.schedule,
                  'deal__icon-box--green u-circle': deal.schedule === 'today',
                  'deal__icon-box--grey u-circle': deal.schedule === 'future',
                  'deal__icon-box--red u-circle': deal.schedule === 'delay' 
                }"  
              >
                <span v-if="!deal.schedule" class="deal__icon">!</span>
                <i v-else class="deal__icon las la-angle-right"></i>
              </div>
            </div>
          </li>
        </ul>
        <ul class="deal__column ">
          <li class="deal__cell" v-for="deal in needsDefined" :key="deal.id">
            <div class="deal">
              <div class="">
                <p class="deal__text">{{ deal.description }}</p>
                <p class="deal__company">{{ deal.company }}</p>
                <p class="deal__summary">
                  <img class="deal__img u-circle" src="images/profile.png" alt="Seller picture">
                  <span class="deal__money">{{ deal.description }}</span>
                </p>
              </div>
              <div class="deal__right deal__icon-box"
                :class="{
                  'deal__icon-box--triangle': !deal.schedule,
                  'deal__icon-box--green u-circle': deal.schedule === 'today',
                  'deal__icon-box--grey u-circle': deal.schedule === 'future',
                  'deal__icon-box--red u-circle': deal.schedule === 'delay' 
                }"  
              >
                <span v-if="!deal.schedule" class="deal__icon">!</span>
                <i v-else class="deal__icon las la-angle-right"></i>
              </div>
            </div>
          </li>
        </ul>
        <ul class="deal__column ">
          <li class="deal__cell" v-for="deal in proposalsSent" :key="deal.id">
            <div class="deal">
              <div class="">
                <p class="deal__text">{{ deal.description }}</p>
                <p class="deal__company">{{ deal.company }}</p>
                <p class="deal__summary">
                  <img class="deal__img u-circle" src="images/profile.png" alt="Seller picture">
                  <span class="deal__money">{{ deal.description }}</span>
                </p>
              </div>
              <div class="deal__right deal__icon-box"
                :class="{
                  'deal__icon-box--triangle': !deal.schedule,
                  'deal__icon-box--green u-circle': deal.schedule === 'today',
                  'deal__icon-box--grey u-circle': deal.schedule === 'future',
                  'deal__icon-box--red u-circle': deal.schedule === 'delay' 
                }"  
              >
                <span v-if="!deal.schedule" class="deal__icon">!</span>
                <i v-else class="deal__icon las la-angle-right"></i>
              </div>
            </div>
          </li>
        </ul>
        <ul class="deal__column ">
          <li class="deal__cell" v-for="deal in contractsSent" :key="deal.id">
            <div class="deal">
              <div class="">
                <p class="deal__text">{{ deal.description }}</p>
                <p class="deal__company">{{ deal.company }}</p>
                <p class="deal__summary">
                  <img class="deal__img u-circle" src="images/profile.png" alt="Seller picture">
                  <span class="deal__money">{{ deal.description }}</span>
                </p>
              </div>
              <div class="deal__right deal__icon-box"
                :class="{
                  'deal__icon-box--triangle': !deal.schedule,
                  'deal__icon-box--green u-circle': deal.schedule === 'today',
                  'deal__icon-box--grey u-circle': deal.schedule === 'future',
                  'deal__icon-box--red u-circle': deal.schedule === 'delay' 
                }"  
              >
                <span v-if="!deal.schedule" class="deal__icon">!</span>
                <i v-else class="deal__icon las la-angle-right"></i>
              </div>
            </div>
          </li>
        </ul>
        <!-- <draggable class="deal__column deal__column--leads" :list="dealsInLeads" 
          group="stage" item-key="id" tag="ul" id="stage-1" stage="leads">
          <template #item="{element}">
            <DealItem :deal="element" />
          </template>
        </draggable> -->
        <!-- <draggable class="deal__column deal__column--leads" group="stage" tag="ul" stage="leads" 
          :list="deals.filter(d => d.stages_id === 1)" itemKey="id"
        >
          <template #item="{element}">
            <DealItem :deal="element" />
          </template>
        </draggable> -->
        .
        <!-- <ul class="deal__column deal__column--leads">
          <DealItem v-for="deal in deals.filter(d => d.stages_id === 1)" :key="deal.id" :deal="deal"/>
        </ul> -->
        <!-- <ul class="deal__column deal__column--leads">
          <DealItem v-for="deal in deals.filter(d => d.stages_id === 2)" :key="deal.id" :deal="deal"/>
        </ul>
        <ul class="deal__column deal__column--leads">
          <DealItem v-for="deal in deals.filter(d => d.stages_id === 3)" :key="deal.id" :deal="deal"/>
        </ul>
        <ul class="deal__column deal__column--leads">
          <DealItem v-for="deal in deals.filter(d => d.stages_id === 4)" :key="deal.id" :deal="deal"/>
        </ul>
        <ul class="deal__column deal__column--leads">
          <DealItem v-for="deal in deals.filter(d => d.stages_id === 5)" :key="deal.id" :deal="deal"/>
        </ul>
        <ul class="deal__column deal__column--leads">
          <DealItem v-for="deal in deals.filter(d => d.stages_id === 6)" :key="deal.id" :deal="deal"/>
        </ul> -->
      </section>
      
      <!--  
      <section class="deal__table">
        <draggable class="deal__column deal__column--leads" v-model="deals.leads" group="stage" 
          @start="handleStart" :move="handeMove" 
          @end="handleEnd" item-key="id" tag="ul" id="stage-1" @add="handleAdd" stage="leads">
          <template #item="{element}">
            <DealItem :deal="element" />
          </template>
        </draggable>
      
        
      <draggable class="deal__column deal__column--contacts" v-model="deals.contacts" group="stage" 
          @start="handleStart" :move="handeMove" 
          @end="handleEnd" item-key="id" tag="ul" id="stage-2" @add="handleAdd" stage="contacts">
          <template #item="{element}">
            <DealItem :deal="element" />
          </template>
        </draggable>
        <draggable class="deal__column deal__column--meetings" v-model="deals.meetings" group="stage" 
          @start="handleStart" :move="handeMove" 
          @end="handleEnd" item-key="id" tag="ul" id="stage-3" @add="handleAdd" stage="meetings">
          <template #item="{element}">
            <DealItem :deal="element" />
          </template>
        </draggable>
        <draggable class="deal__column deal__column--needs" v-model="deals.needs" group="stage" 
          @start="handleStart" :move="handeMove" 
          @end="handleEnd" item-key="id" tag="ul" id="stage-4" @add="handleAdd" stage="needs">
          <template #item="{element}">
            <DealItem :deal="element" />
          </template>
        </draggable>
        <draggable class="deal__column deal__column--proposals" v-model="deals.proposals" group="stage" 
          @start="handleStart" :move="handeMove" 
          @end="handleEnd" item-key="id" tag="ul" id="stage-5" @add="handleAdd" stage="proposals">
          <template #item="{element}">
            <DealItem :deal="element" />
          </template>
        </draggable>
        <draggable class="deal__column deal__column--contracts" v-model="deals.contracts" group="stage" 
          @start="handleStart" :move="handeMove" 
          @end="handleEnd" item-key="id" tag="ul" id="stage-6" @add="handleAdd" stage="contracts">
          <template #item="{element}">
            <DealItem :deal="element" />
          </template>
        </draggable>
        
        <DealList id="list-2">
          <DealItem v-for="deal in deals.leads" :key="deal.id" :deal="deal" 
            :id="`deal-${deal.id}`" />
        </DealList>
        <DealList id="list-2">
          <DealItem v-for="deal in deals.contacts" :key="deal.id" :deal="deal" 
            :id="`deal-${deal.id}`" />
        </DealList>
        <DealList id="list-3">
          <DealItem v-for="deal in deals.meetings" :key="deal.id" :deal="deal" 
            :id="`deal-${deal.id}`" />
        </DealList>
        <DealList id="list-4">
          <DealItem v-for="deal in deals.needs" :key="deal.id" :deal="deal" 
            :id="`deal-${deal.id}`" />
        </DealList>
        <DealList id="list-5">
          <DealItem v-for="deal in deals.proposals" :key="deal.id" :deal="deal" 
            :id="`deal-${deal.id}`" />
        </DealList>
        <DealList id="list-6">
          <DealItem v-for="deal in deals.contracts" :key="deal.id" :deal="deal" 
            :id="`deal-${deal.id}`" />
        </DealList> 
        
      </section>
    -->
      <!-- Deals section END -->

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
  import DealItem from '../components/DealItem.vue';
  import TheSideBar from '../components/TheSideBar.vue';
  import TheNavbar from '../components/TheNavbar.vue';
  import draggable from "vuedraggable";

  import { ref } from "vue";

  const props = defineProps({
    deals: Array
  });

  const qualifiedLeads = ref(props.deals.filter(d => d.stages_id === 1));
  const contactsMade = ref(props.deals.filter(d => d.stages_id === 2));
  const meetingsArranged = ref(props.deals.filter(d => d.stages_id === 3));
  const needsDefined = ref(props.deals.filter(d => d.stages_id === 4));
  const proposalsSent = ref(props.deals.filter(d => d.stages_id === 5));
  const contractsSent = ref(props.deals.filter(d => d.stages_id === 6));
</script>


