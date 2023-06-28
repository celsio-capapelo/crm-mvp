import {store} from './store.js';

export const closeAddPipelineModal = () => {
  store.isAddModalOpen = false;
}