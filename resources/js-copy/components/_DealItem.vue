<template>
  <li class="deal__cell" >
    <div class="deal">
      <div>
        <p class="deal__text">{{ deal.description }}</p>
        <p class="deal__company">{{ deal.company }}</p>
        <p class="deal__summary">
          <img class="deal__img u-circle" :src=" deal.img" alt="Seller picture">
          <span class="deal__money">${{ deal.money }}</span>
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

<style></style>

<script setup>
  const props = defineProps({
    deal: Object
  });
</script>