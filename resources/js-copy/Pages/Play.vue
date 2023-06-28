<script setup>
  import { ref } from "vue";
  import draggable from "vuedraggable";

  const data = ref([
    {
      id: 1,
      order: 1,
      content: "test1",
    },
    {
      id: 2,
      order: 2,
      content: "test2",
    },
    {
      id: 3,
      order: 3, 
      content: "teat3",
    },
  ]);

  const onDragEnd = async () => {
  // THIS CODE IS JUST AN IDEA
  for (let i = 0; i < data.length; i++) {
      try {
        const res = await axios.put("YOUR BACKEND PATH", {
          id: data[i].id,
        });
        console.log(res.data);
        return;
      } catch (err) {
        console.log(err);
        return;
      }
    }
  };
</script>

<template>
  <div class="hello">
    <!-- <draggable :list="data" item-key="id" @end="onDragEnd"> -->
    <draggable :list="data" item-key="id">
      <template #item="{ element }">
        <div class="drag-item">
          {{ element.content }}
        </div>
      </template>
    </draggable>
  </div>
</template>

<style scoped>
  .drag-item {
    background: blue;
    margin: 10px 0;
    color: #fff;
  }
</style>