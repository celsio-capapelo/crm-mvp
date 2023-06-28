<template>
<section class="deal__table">
  <ul class="deal__column ">
    <draggable class="deal__cell" :list="qualifiedLeads" group="dealGroup" itemKey="id" 
      tag="li" 
    >
      <template #item="{element}">
        {{ element }}
        <!-- <div class="deal">
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
          <div class="deal__right deal__icon-box deal__icon-box--green u-circle">
            <i class="deal__icon las la-angle-right"></i>
          </div>
      </div> -->
      </template>
    </draggable>
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
      </section>
    
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
  import { ref } from "vue";
  import Layout from '../Shared/Layout.vue';
  import draggable from "vuedraggable";

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
</script>

<script>
  export default {
    layout: Layout
  }
</script>
