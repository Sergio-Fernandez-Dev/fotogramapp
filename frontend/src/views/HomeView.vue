<script setup>
import ImageCard from "@/components/card/ImageCard.vue";
import { onMounted, ref } from "vue";
import { doGetRequest } from "@/services/apiRequests";

const imageList = ref({});

onMounted(async () => {
  imageList.value = await doGetRequest("images");
});
</script>

<template>
  <div class="grid">
    <ImageCard
      v-for="(image, index) in imageList"
      :key="index"
      :url="image.url"
      :title="image.title"
      :location="image.location"
    />
  </div>
</template>
