<template>
  PIPELINE'S LIST
</template>
<style></style>
<script>
  import Layout from '../../Shared/Layout.vue';
  
  export default {
    components: {Layout},
    layout: Layout,
  }
</script>

<script setup>
  import DealItem from "../../components/DealItem.vue";
  import MenuDuoIcon from "../../components/MenuDuoIcon.vue";
  import { ref, reactive } from "vue";
  import draggable from 'vuedraggable';
  import TheFilter from '../../components/TheFilter.vue';

  
</script>