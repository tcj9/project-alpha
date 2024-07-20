const { createApp } = Vue;

createApp({
  data() {
    return {
      username: "",
      password: "",
    };
  },
  methods: {
    loginUser() {
      // Add logic to handle user login
      console.log("Logging in user:", this.username, this.password);
    },
  },
}).mount("#login-app");
