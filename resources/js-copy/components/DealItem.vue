<template>
  <li class="deal__cell" :class="{'deal__cell--stagnated': isStagnatedDeal}" >
        <div class="deal">
          <div>
            <p class="deal__text">{{ deal.title }}</p>
            <p class="deal__company">{{ deal.primary_contact[0].name }}</p>
            <p class="deal__summary">
              <img class="deal__img u-circle" :src="deal.owner[0].image" alt="Deal\'Seller picture">
              <!-- <span class="deal__money">${{ deal.amount }}</span> -->
              <span class="deal__money">{{formatedAmount}}</span>
            </p>
          </div>
          <div class="deal__right deal__icon-box"
          :class="{
            'deal__icon-box--triangle': !state.deal.activities.length,
            'deal__icon-box--green u-circle': firstActivitySchedule === 'today',
            'deal__icon-box--grey u-circle': firstActivitySchedule === 'future',
            'deal__icon-box--red u-circle': firstActivitySchedule === 'delay' 
          }"  
          >
          <span v-if="!state.deal.activities.length" class="deal__icon">!</span>
          <i v-else class="deal__icon las la-angle-right"></i>
        </div>
      </div>
    </li>
</template>


<script setup>
  import { onBeforeMount, computed, ref, reactive } from 'vue';

  // Helpers
  const calcDaysPassed = (date1, date2) =>
    (date2 - date1) / (1000 * 60 * 60 * 24);
    
  const formatedAmount = Intl.NumberFormat('en-US', {
    style: "currency",
    currency: 'USD',
  }).format(props.deal.amount);

  // Props
  const props = defineProps({
    deal: Object,
  });

  // console.log(props.deal.id);
  
  // State
  const state = reactive({
    deal: props.deal
  });

  // Reactive data
  const firstActivitySchedule = ref('');
  const daysPassed = ref(0);
  const isStagnatedDeal = ref(false);

  // Lifecycle Hooks
  onBeforeMount(() => {
    try {
      // Add icon to indicate no activity, delayed activity, today activity and future activity
      if (!state.deal.activities.length) return;
      
      const now = (new Date(2023, 4, 12));
      // const now = new Date();
      const nextActivitySchedule = state.deal.activities
        .sort((a, b) => a.pivot.schedule - b.pivot.schedule)[0].pivot.schedule;
      const schedule = new Date(nextActivitySchedule);
      daysPassed.value = calcDaysPassed(now, schedule);
      
      if (daysPassed.value < 0) firstActivitySchedule.value = 'delay';
      if (daysPassed.value === 0) firstActivitySchedule.value = 'today';
      if (daysPassed.value > 0) firstActivitySchedule.value = 'future';

      // Add red background to stagnated activities
      // Is stagnated if passed 7 days without complete the activity
      if (daysPassed.value < -7) isStagnatedDeal.value = true;
      
    } catch (e) {
      console.log(e.message);
    }
  })

  // Emitted events
  const emit = defineEmits(['changedStage']);
  emit('changedStage', 'deal stage changed');
  // console.log('event emitted');

</script>

<style></style>