<template>
  <div>
    <h1>{{ titulo }}</h1>
    <h2>{{ subtitulo }}</h2>
    <h4>{{ tipo }}</h4>
  </div>
</template>

<script>
export default {
  name: "Title",
  inheritAttrs: false,//faz com que o componente não herde atributos que não estão no props
  props: {
    titulo: {
      type: String,
      required: true,
    },
    subtitulo: {
      type: String,
      required: false,
      default: "Subtitulo",
    },
    tipo: {
      type: Number,
      validator(value) {
        return [1, 2, 3].includes(value);
      },
    },
  },
};
</script>

<style>
</style>