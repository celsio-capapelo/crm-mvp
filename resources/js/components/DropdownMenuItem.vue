<template>
  <li class="menu__item menu__item--space-between" >
    <div>
      <button v-if="!isOpen" class="btn btn--text">{{ item.name }}</button>
      <form v-else  @submit.prevent="form.put('/pipelines/' + form.id, form)">
        <div>
          <label for="pipeline-name">Pipeline name</label>
          <input type="text" placeholder="Pipeline" name="pipeline-name" id="pipeline-name" v-model="form.name">
          <p v-if="$page.props.errors.name" v-text="$page.props.errors.name" 
            :class="{'u-text--error': $page.props.errors.name}" ></p>
        </div>
        <div>
          <label for="#">Pipeline type</label>
          <select name="pipeline-type" id="#" v-model="form.purpose_id">
            <option value="">Select an option below</option>
            <option v-for="p in purposes" :key="p.id" :value="p.id">{{ p.name }}</option>
          </select>
          <p v-if="$page.props.errors.purpose_id" v-text="$page.props.errors.purpose_id" 
            :class="{'u-text--error': $page.props.errors.purpose_id}" ></p>
        </div>
        <div>
          <button type="submit">Update</button>
          <button @click.prevent="handleEdit">Cancel</button>
        </div>
      </form>
    </div>
    <div>
      <i @click="isOpen = true" class="las la-pen"></i>
      <i class="las la-trash"></i>
    </div>
  </li>
</template>

<style></style>

<script setup>
  import { defineProps, ref, onMounted, inject } from "vue";
  import { useForm } from '@inertiajs/inertia-vue3'

  // State
  const isOpen = ref(false);
  const form = useForm({
    id: null,
    name: null,
    purpose_id: null,
    user_id: 1,
  });
  
  
  // Props
  const props = defineProps({
    item: Object,
  });
  
  // Methods
  const submit = () => {
    console.log();
  };
  
  const handleEdit = () => {
    isOpen.value = true;
  };
  
  // Lifecycle
  
  // 1. Created
  const purposes = inject('purposes');
  form.id = props.item.id;
  form.name = props.item.name;
  form.purpose_id = props.item.purpose_id;
  form.purpose_name = props.item.purpose.name;
</script>