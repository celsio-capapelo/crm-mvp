<template>
  <TheFilter>
    <MenuDuoIcon></MenuDuoIcon>
  </TheFilter>
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

  <section class="deal__table">
    <draggable class="deal__column deal__column--leads" v-model="qualifiedLeads" group="stage" 
      :move="handleMove" @add="handleAdd" item-key="id" tag="ul" id="9" stage="leads"
    >
      <template #item="{element}">
        <DealItem :deal="element" :id="element.id"/>
      </template>
    </draggable>

    <draggable class="deal__column deal__column--contacts" v-model="contactsMade" group="stage" 
      :move="handleMove" @add="handleAdd" item-key="id" tag="ul" id="2" stage="leads"
    >
      <template #item="{element}">
        <DealItem :deal="element" :id="element.id"/>
      </template>
    </draggable>

    <draggable class="deal__column deal__column--meeting" v-model="meetingsArranged" group="stage" 
      :move="handleMove" @add="handleAdd" item-key="id" tag="ul" id="3" stage="leads"
    >
      <template #item="{element}">
        <DealItem :deal="element" :id="element.id"/>
      </template>
    </draggable>

    <draggable class="deal__column deal__column--needs" v-model="needsDefined" group="stage" 
      :move="handleMove" @add="handleAdd" item-key="id" tag="ul" id="4" stage="leads"
    >
      <template #item="{element}">
        <DealItem :deal="element" :id="element.id"/>
      </template>
    </draggable>

    <draggable class="deal__column deal__column--proposals" v-model="proposalsSent" group="stage" 
      :move="handleMove" @add="handleAdd" item-key="id" tag="ul" id="5" stage="leads"
    >
      <template #item="{element}">
        <DealItem :deal="element" :id="element.id"/>
      </template>
    </draggable>

    <draggable class="deal__column deal__column--contracts" v-model="contractsSent" group="stage" 
      :move="handleMove" @add="handleAdd" item-key="id" tag="ul" id="6" stage="leads"
    >
      <template #item="{element}">
        <DealItem :deal="element" :id="element.id"/>
      </template>
    </draggable>
  </section>
  <Modal :isOpen="store.isAddModalOpen" @close-modal="store.isAddModalOpen = false"/>
  <EditPipelineModal :isOpen="store.isEditModalOpen" @close-modal="store.isEditModalOpen = false"/>
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
  import {store} from '../../store.js';
  import DealItem from "../../components/DealItem.vue";
  import MenuDuoIcon from "../../components/MenuDuoIcon.vue";
  import Modal from "../../components/Modal.vue";
  import EditPipelineModal from "../../components/EditPipelineModal.vue";
  import { ref, reactive, provide } from "vue";
  import draggable from 'vuedraggable';
  import TheFilter from '../../components/TheFilter.vue';

  // Helpers
  const writeResource = async function (method, url, payload) {
    try {
        const response = await fetch(
            // 1) Add URL
            url,
            {
                // 2) Add headers, method, credentials and payload
                headers: {
                    "Content-Type": "application/json",
                    Accept: "application/json, text-plain, */*",
                    "X-Requested-With": "XMLHttpRequest",
                    "X-CSRF-TOKEN": document
                        .querySelector('meta[name="csrf-token"]')
                        .getAttribute("content"),
                },
                method,
                credentials: "same-origin",
                body: JSON.stringify(payload),
            }
        );
        
        // 3) Handle Success
        if (!response.ok)
            throw new Error(
                `Something went wrong. ${response.statusText} (${response.status})`
            );
        // if (method === 'put') projectNotesView();
        const data = await response.json();
        return data;
        // 3) Handle Error response
    } catch (err) {
        console.log(err.message);
    }
  };

  // Props
  const props = defineProps({
    deals: Array,
    primaryContactArr: Array,
    stages: Array,
    errors: Object,
    // pipeline: Object,
    pipelines: Array,
  });

  // State
  const state = reactive({
    deals: props.deals,
    stages: props.stages,
    
  });

  // Provide
  provide('pipelines', props.pipelines);


  // Create group of deals by stage
  const qualifiedLeads = ref(state.deals.filter(d => d.stage_id == 9));
  const contactsMade = ref(state.deals.filter(d => d.stage_id === 2));
  const meetingsArranged = ref(state.deals.filter(d => d.stage_id === 3));
  const needsDefined = ref(state.deals.filter(d => d.stage_id === 4));
  const proposalsSent = ref(state.deals.filter(d => d.stage_id === 5));
  const contractsSent = ref(state.deals.filter(d => d.stage_id === 6));

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

  const handleAdd = e => {
    // Update added deal in state
    let deal = state.deals.find(d => d.id === +e.item.getAttribute('id'));
    const stage = state.stages.find(s => s.id === +e.to.getAttribute('id'));
    deal = {...deal, stage_id: stage.id, stage: stage};

    // Update added deal in DB
    writeResource('put', '/pipelines/deals/' + deal.id, { stageId: deal.stage_id });
  }
</script>
