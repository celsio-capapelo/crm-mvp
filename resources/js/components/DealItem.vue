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
    </div>
  </li>
</template>

<style></style>

<script setup>
  const props = defineProps({
    deal: Object
  });
</script>