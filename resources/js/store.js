import {reactive} from 'vue';

export const store = reactive({
  isAddModalOpen: false,
  isEditModalOpen: false,
  pipelines: [],
  deletePipeline(pipelineId) {
    store.pipelines = store.pipelines.filter(p => p.id !== pipelineId);
  },
  addPipelineToStore(pipeline) {
    console.log(pipeline);
    this.pipelines = [...store.pipelines, pipeline];
    console.log(this.pipelines);
  }
});