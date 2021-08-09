<template>
  <div>
    <h1>PROPS e DIRETIVAS</h1>
    <div>
      <h2 v-if="show">Diretivas v-if</h2>
      <h2 v-show="show">Diretivas v-show</h2>
    </div>
  </div>
</template>

<script>
export default {
  name: "Aula3",
  components: {},
  data() {
    return {
      show: false,
    };
  },
};
</script>

<style>
</style>