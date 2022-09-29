<script setup>
import ImageCard from "@/components/card/ImageCard.vue";
import { onMounted } from "vue";
import { doGetRequest } from "@/services/apiRequests";
import { useCardStore } from "@/stores/cardList";
import UploadForm from "../components/forms/UploadForm.vue";

const store = useCardStore();

onMounted(async () => {
  store.cardList.value = await doGetRequest("images");
  console.log(store.cardList.value)
});
</script>

<template>
  <div class="grid">
    <UploadForm />
    <ImageCard
      v-for="(card, index) in store.cardList.value"
      :key="index"
      :id="card.id"
      :url="card.url"
      :title="card.title"
      :location="card.location"
    />
  </div>
</template>
