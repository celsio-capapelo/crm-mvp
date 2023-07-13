<!-- <template>
  <div>
    <H1>{{ title }}</H1>
    <div>{{ description }}</div>
  </div>
</template> -->

<template>
  <div class="wrapper">
    <div class="error">
      <h1 class="error__title">{{ title }}!</h1>
      <h2 class="error__description">{{ description }}</h2>
      <p class="error__code">{{ props.status }}</p>
      <div>
        <a class="error__btn btn btn--primary" href="/pipelines/deals">Go back</a>
      </div>
    </div>
  </div>
</template>

<style lang="scss">
  #app {
    // display: flex;
    // align-items: center;
    // justify-content: center;
    height: 100vh;

    display: grid;
    grid-template-columns: auto;
    align-items: center;
    justify-content: center;
  }

  .wrapper {
    width: max-content;
  }
  .error {
    // border: 1px dotted red;
    position: relative;
    // position: absolute;
    // top: 50%;
    // left: 50%;
    // transform: translate(-50%, -50%);
    

    &__title {
      text-transform: uppercase;
      font-size: 4.8rem;
      margin-bottom: 1.4rem;
      z-index: 9999;
    }
    &__description {
      text-transform: uppercase;
      font-size: 2rem;
      z-index: 9999;
    }
    &__code {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      font-size: 25rem;
      color: rgba(#999, .3);
    }
    &__btn {
      display: inline-block;
      text-decoration: none;
    }
    
    & div:last-child {
      text-align: center;
      text-transform: uppercase;
      margin-top: 4.8rem;
      z-index: 9999;
      transform: translateY(50px);
    }
  }
</style>

<script setup>
  import { computed } from 'vue'

  const props = defineProps({ status: Number })

  const title = computed(() => {
    return {
      503: '503: Service Unavailable',
      500: '500: Server Error',
      404: '404: Page Not Found',
      403: '403: Forbidden',
    }[props.status]
  })

  const description = computed(() => {
    return {
      503: 'Sorry, we are doing some maintenance. Please check back soon.',
      500: 'Whoops, something went wrong on our servers.',
      404: 'Sorry, the page you are looking for could not be found.',
      403: 'Sorry, you are forbidden from accessing this page.',
    }[props.status]
  })
  console.log(props.status);
</script>

