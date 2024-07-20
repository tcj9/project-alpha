const { createApp } = Vue;

createApp({
  data() {
    return {
      username: "",
      email: "",
      password: "",
    };
  },
  methods: {
    registerUser() {
      // Add logic to handle user registration
      console.log(
        "Registering user:",
        this.username,
        this.email,
        this.password
      );
    },
  },
}).mount("#register-app");
