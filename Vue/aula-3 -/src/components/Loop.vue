<template>
  <div>
    <ul>
      <li v-for="(item, index) in todos" :key="index">
        {{ item }}
      </li>
    </ul>
    <p>
      Todos v-For com (v-If, para esse caso substituir o v-if por uma filtragem
      computada)
    </p>
    <ul>
      <li v-for="(item, index) in filteredTodos" :key="index">
        {{ item }}
      </li>
    </ul>
    <p>Loop com componentes</p>
    <ul>
        <ListItem
      v-for="(todo, index) in todosComponent"
      :key="index"
      v-bind="todo"
    />
    </ul>
    
  </div>
</template>

<script>
import ListItem from "./ListItem.vue";
export default {
  name: "Loop",
  components: { ListItem },
  computed: {
    filteredTodos() {
      return this.todos.filter((todo) => !todo.isCompleted);
    },
  },
  data() {
    return {
      todos0: ["Item 1", "Item 2", "Item 3", "Item 4"],
      todos: [
        { label: "Todo1", isCompleted: false },
        { label: "Todo2", isCompleted: false },
        { label: "Todo3", isCompleted: true },
        { label: "Todo4", isCompleted: true },
      ],
      todosComponent: [
        { label: "Todo1", value: "world" },
        { label: "Todo2", value: "potter" },
        { label: "Todo3", value: 0 },
        { label: "Todo4", value: 1 },
      ],
      todos2: {
        item1: "Item 1",
        item2: "Item 2",
        item3: "Item 3",
      },
      todos3: "Hello world Vue.js",
      todos4: 10,
    };
  },
};
</script>

<style>
</style>