import { ref } from "vue";
import { defineStore } from "pinia";

export const useCardStore = defineStore("card", () => {
  const cardList = ref([]);

  return { cardList };
});
