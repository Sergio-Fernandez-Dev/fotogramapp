import { describe, it, expect } from "vitest";

import { mount } from "@vue/test-utils";
import ImageCard from "@/components/card/ImageCard.vue";

describe("ImageCard", () => {
  it("renders properly", () => {
    const wrapper = mount(ImageCard, {
      props: {
        title: "image title",
        location: "Oviedo",
      },
    });

    expect(wrapper.text()).toContain("image title");
    expect(wrapper.text()).toContain("Oviedo");
  });
});
