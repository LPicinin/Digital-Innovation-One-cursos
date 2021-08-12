<template>
  <div>
    <li @click="$emit('increment', 5, $event)">Click me</li>
    <li @click="evento">Click me</li>
  </div>
</template>

<script>
export default {
  name: "ListItem2",
  props: {},
  //created() {this.$root.$on("increment", this.increment);},
  methods: {
    evento(event) {
      this.$emit("increment", 5, event);
      //this.$root.$emit("increment", 5, event);
    },
  },
};
</script>

<style>
</style>