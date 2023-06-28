<template>
  <ul class="deal__column">
    <Container>
      <Draggable v-for="deal in deals" :deal="deal" :key="deal.id">
        <DealItem />
      </Draggable>
      
  </Container>
  </ul>
  
</template>

<style></style>

<script>
  import DealItem from './DealItem.vue';
  import { Container, Draggable } from 'vue3-smooth-dnd';

  export default {
    components: {
      DealItem,
      Container,
      Draggable
    },
    props: ['deals', 'stage']
  }
</script>