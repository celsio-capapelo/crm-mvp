<template>
  <div class="modal modal--add-pipeline" 
    :class="{'modal--visible': isOpen}"
    id=""
    @click="handleClickToCloseModal"
    @keyup="handleEscKey"
  >
    <div class="modal__content">
      <!-- Modal Header -->
      <div class="modal__header u-border-bottom">
        <h4 class="modal__title" >Add/edit pipeline</h4>
        <span class="modal__close"><i class="las la-times"></i></span>
      </div>
      <!-- <form class="form" @submit.prevent="submit" >
        <div class="form__group">
          <label class="form__label" for="name">Pipeline name</label>
          <input class="form__input" :class="{'u-border--error': $page.props.errors.name}" type="text" 
            placeholder="Deal name" id="initialFocusOnAddPipelineModal" v-model="form.name"/>
          <p v-if="$page.props.errors.name" v-text="$page.props.errors.name" 
            :class="{'u-text--error': $page.props.errors.name}" ></p>
        </div>
        <div class="form__group">
          <label class="form__label" for="purpose_id">Pipeline type</label>
          <select class="form__select"  :class="{'u-border--error': $page.props.errors.purpose_id}" name="purpose_id" id="purpose_id" v-model="form.pipeline" >
            <option class="form__option" value="1">Sales</option>
            <option class="form__option" value="2" selected>Prospect</option>
            <option class="form__option" value="3">Leads generation</option>
          </select>
          <p v-if="$page.props.errors.purpose_id" v-text="$page.props.errors.purpose_id"
          :class="{'u-text--error': $page.props.errors.purpose_id}"></p>
        </div>
      

      <div class="modal__footer u-border-top">
        <span class="btn btn--link btn--s modal__close" role="button">Cancel</span>
        <button class="btn btn--primary btn--s" type="submit">Save</button>
      </div>
    </form> -->
    <form class="form" @submit.prevent="submit" >
        <div class="form__group">
          <label class="form__label" for="name">Pipeline name</label>
          <input class="form__input" :class="{'u-border--error': $page.props.errors.name}" type="text" 
            placeholder="Pipeline name" id="initialFocusOnAddPipelineModal" v-model="form.name"/>
          <p v-if="$page.props.errors.name" v-text="$page.props.errors.name" 
            :class="{'u-text--error': $page.props.errors.name}" ></p>
        </div>
        <div class="form__group">
          <label class="form__label" for="purpose_id">Pipeline type</label>
          <select class="form__select"  :class="{'u-border--error': $page.props.errors.purpose_id}" name="purpose_id" id="purpose_id" v-model="form.purpose_id" >
            <option class="form__option" value="1">Sales</option>
            <option class="form__option" value="2" selected>Prospect</option>
            <option class="form__option" value="3">Leads generation</option>
          </select>
          <p v-if="$page.props.errors.purpose_id" v-text="$page.props.errors.purpose_id"
          :class="{'u-text--error': $page.props.errors.purpose_id}"></p>
        </div>
        <!-- Modal Footer -->
        <div class="modal__footer u-border-top">
          <span class="btn btn--link btn--s modal__close" role="button">Cancel</span>
          <button class="btn btn--primary btn--s" type="submit">Save</button>
        </div>
    </form>
    </div>
    
  </div>
</template>

<style></style>

<script setup>
// Import
import {defineEmits, reactive} from 'vue';
import { Inertia } from '@inertiajs/inertia';
import {store} from '../store.js';
import {closeAddPipelineModal} from '../helpers.js';
import { useForm } from '@inertiajs/inertia-vue3'

const form = useForm({
  name: null,
  purpose_id: null,
  user_id: 1,
})

// Event
const emit = defineEmits(['closeModal']);

// State
// const form = reactive({
//   name: '',
//   pipeline: '',
// });

// Props
const props = defineProps({
  isOpen: Boolean,
});

// Method
// const submit = () => {
//   Inertia.post('/pipelines', {'name': form.name, 'purpose_id': form.pipeline, 'user_id': 1});
// }
// const submit = () => {
//   form.submit('post', '/pipelines', {
//     data: form,
//     onSuccess: page => {console.log(page)},
//     onError: erros => {console.dir(erros.message)},
//   });
// }
const submit = () => {
  form.submit('post', '/pipelines', {
    data: form,
    onSuccess: async page => {
      const response = await fetch('/api/pipelines');
      const data = await response.json();
      const lastPipelineInDB = data[data.length - 1];
      store.addPipelineToStore(lastPipelineInDB);
    },
    onError: erros => {console.dir(erros.message)},
  });
}
const handleClickToCloseModal = (e) => {
  if (e.target.classList.contains('modal--visible') 
    || e.target.classList.contains('la-times') 
    || e.target.classList.contains('modal__close')
  )
    closeAddPipelineModal();
};

const handleEscKey = (e) => {
  if (e.key === 'Escape') closeAddPipelineModal();
};
</script>