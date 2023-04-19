
<template>

  <!-- Deals section START -->
  <section class="deal__table">
    <draggable class="deal__column deal__column--leads" v-model="qualifiedLeads" group="stage" 
      :move="handleMove" item-key="id" tag="ul" id="stage-1" stage="leads"
    >
      <template #item="{element}">
        <DealItem :deal="element"/>
      </template>
    </draggable>

    <draggable class="deal__column deal__column--contacts" v-model="contactsMade" group="stage" 
      :move="handleMove" item-key="id" tag="ul" id="stage-2" stage="leads"
    >
      <template #item="{element}">
        <DealItem :deal="element"/>
      </template>
    </draggable>

    <draggable class="deal__column deal__column--meeting" v-model="meetingsArranged" group="stage" 
      :move="handleMove" item-key="id" tag="ul" id="stage-3" stage="leads"
    >
      <template #item="{element}">
        <DealItem :deal="element"/>
      </template>
    </draggable>

    <draggable class="deal__column deal__column--needs" v-model="needsDefined" group="stage" 
      :move="handleMove" item-key="id" tag="ul" id="stage-4" stage="leads"
    >
      <template #item="{element}">
        <DealItem :deal="element"/>
      </template>
    </draggable>

    <draggable class="deal__column deal__column--proposals" v-model="proposalsSent" group="stage" 
      :move="handleMove" item-key="id" tag="ul" id="stage-5" stage="leads"
    >
      <template #item="{element}">
        <DealItem :deal="element"/>
      </template>
    </draggable>

    <draggable class="deal__column deal__column--contracts" v-model="contractsSent" group="stage" 
      :move="handleMove" item-key="id" tag="ul" id="stage-6" stage="leads"
    >
      <template #item="{element}">
        <DealItem :deal="element"/>
      </template>
    </draggable>
  </section>

  <!-- <section class="deal__table">
    <ul class="deal__column">
        <DealItem v-for="deal in deals" :key="deal.id" :deal="deal" />
    </ul>
  </section> -->

  <!-- <h1>Deals</h1>
  <section>
    <h2>Deals</h2>
    <ul>
      <li v-for="deal in deals" :key="deal.id">{{ deal.title }}</li>
    </ul>
  </section>
  <section>
    <h2>Stages</h2>
    <ul>
      <li v-for="deal in deals" :key="deal.id">{{ deal.id }} {{ deal.stage.name }}</li>
    </ul>
  </section>
  <section>
    <h2>Companies</h2>
    <ul>
      <li v-for="deal in deals" :key="deal.id">{{ deal.id }} {{ deal.company.name }}</li>
    </ul>
  </section>
  <section>
    <h2>Primary Contacts</h2>
    <ul>
      <li v-for="deal in deals" :key="deal.id">{{ deal.id }} {{ deal.primary_contact[0].name }}</li>
    </ul>
  </section> -->
</template>

<style>
</style>

<script>
  import Layout from '../../Shared/Layout.vue';

  export default {
    components: {Layout},
    layout: Layout,
  }
</script>

<script setup>
  import DealItem from "../../components/DealItem.vue";
  import { ref } from "vue";
  import draggable from 'vuedraggable';

  const props = defineProps({
    deals: Array,
    primaryContactArr: Array,
  });

  // onMounted(()=> {
    // props.deals.forEach(d => console.log(d.primary_contact[0].name));
  // });

  // Create group of deals by stage
  const qualifiedLeads = ref(props.deals.filter(d => d.stage_id == 9));
  const contactsMade = ref(props.deals.filter(d => d.stage_id === 2));
  const meetingsArranged = ref(props.deals.filter(d => d.stage_id === 3));
  const needsDefined = ref(props.deals.filter(d => d.stage_id === 4));
  const proposalsSent = ref(props.deals.filter(d => d.stage_id === 5));
  const contractsSent = ref(props.deals.filter(d => d.stage_id === 6));

  // Prevent putting deals to 'needs stage' when this stage was passed
  const handleMove = e => {
    if ( e.to.getAttribute('class').includes('--needs')) {
      if (e.from.getAttribute('class').includes('--proposals') 
        || e.from.getAttribute('class').includes('--contracts')) {
          console.log('Forbirdden');
          // alert('You cannot retun to \'needs\' stage because you already have sent a proposal or contract.');
          return false;
      }
    } 
  }

</script>
