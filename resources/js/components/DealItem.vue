<template>
  <li class="deal__cell" >
        <div class="deal">
          <div>
            <p class="deal__text">{{ deal.title }}</p>
            <p class="deal__company">{{ deal.primary_contact[0].name }}</p>
            <p class="deal__summary">
              <img class="deal__img u-circle" src="/images/profile.png" alt="Seller picture">
              <span class="deal__money">${{ deal.amount }}</span>
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
</template>


<script setup>
  const props = defineProps({
    deal: Object
  });
</script>

<style></style>