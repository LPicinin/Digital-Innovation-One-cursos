<template>
  <div>
    <Title titulo="VueJs" />
    <Title titulo="Curso" subtitulo="Basico" :tipo="1"/>
  </div>
</template>

<script>
import Title from "./Title.vue";

export default {
  name: "Propriedades",
  components: { Title },
  data() {
    return {
      testando: "Hello World",
    };
  },
};
</script>

<style>
</style>