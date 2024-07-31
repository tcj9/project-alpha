const { createApp: createIndexMainApp } = Vue;

createIndexMainApp({
  data() {
    return {
      homepageImg: "",
      currentYear: new Date().getFullYear(),
    };
  },
  methods: {
    setHomepageImg() {
      function getRandomNumberMinMax(min, max) {
        const minCeiled = Math.ceil(min);
        const maxFloored = Math.floor(max);
        return Math.floor(
          Math.random() * (maxFloored - minCeiled + 1) + minCeiled
        );
      }

      let randomNumber1Thru4 = getRandomNumberMinMax(1, 4);
      this.homepageImg = `./assets/imgs/home-img-${randomNumber1Thru4}.jpeg`;
    },
  },
  mounted() {
    this.setHomepageImg();
  },
}).mount("#app");
