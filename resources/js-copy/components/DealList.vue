<template>
  <ul class="deal__column" :id="id" >
    <slot />
  </ul>
  
</template>

<style></style>

<script>
  export default {
    methods: {
      drop: e => {
        // const cardId = e.dataTransfer.getData('cardId');
        // const card = document.getElementById(cardId);
        
        // console.log(e.dataTransfer.getData('text/html').innerHTML);
        // card.style.display = 'block';
        // e.target.appendChild(card);
        // e.target.appendChild(e.dataTransfer.getData('text/html'));
        
        e.stopPropagation();
        // const markup = `
        //   <li class="deal__cell">${e.dataTransfer.getData('text/html')}</li>
        // `;
        e.target.insertAdjacentHTML('beforeend', e.dataTransfer.getData('text/html'));
        // console.log(e.dataTransfer.getData('text/html'));
      }
    },
    props: ['id', 'deals', 'stage'],
  }
</script>