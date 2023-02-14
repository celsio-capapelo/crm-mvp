<template>
  <Layout>
    <section class="seller__section">
      <table class="table">
        <thead class="table__head">
          <tr class="table__row">
            <th class="table__th">#</th>
            <th class="table__th">Name</th>
            <th class="table__th">Email</th>
            <th class="table__th">Phone</th>
            <th class="table__th">Deals Closed</th>
          </tr>
          </thead>
          <tbody>
            <tr class="table__row" v-for="seller in sellers" :key="seller.id">
              <td><input type="checkbox" name="seller-checkbox" id="#" class="seller__checkbox"></td>
              <td>
                <div class="table__name td">
                  <img class="table__img u-circle" src="/images/person-2.jpg" alt="User image phote">
                  <span>{{ seller.name }}</span>
                </div>
              </td>
              <td>{{ seller.email }}</td>
              <td>{{ seller.phone }}</td>
              <td class="seller__closed">{{ seller.deals_closed }}</td>
            </tr>
          </tbody>
      </table>
    </section>
  </Layout>
</template>

<style></style>

<script setup>
  import Layout from '../../Shared/Layout.vue';

  const props = defineProps({
    sellers: Array
  });

</script>


