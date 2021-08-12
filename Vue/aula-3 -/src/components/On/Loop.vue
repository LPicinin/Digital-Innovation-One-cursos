<template>
  <div>
    <p>V-ON / Eventos Customizados / Modificadores</p>
    <ListItem @increment="increment" />
    {{ count }}
  </div>
</template>

<script>
import ListItem from "./ListItem.vue";
export default {
  name: "Loop",
  components: { ListItem },
  computed: {},
  data() {
    return {
      count: 0,
      text: "",
    };
  },
  methods: {
    increment(valor, event) {
      this.count+=valor;
    },
  },
};
</script>

<style>
</style>