createApp({
  data() {
    return {
      login: "",
      password: "",
      message: "",
      messageType: "",
      currentYear: new Date().getFullYear(),
    };
  },
  methods: {
    loginUser() {
      // Add logic to handle user login
      console.log("Logging in user:", this.login, this.password);
    },
    resetForm() {
      this.login = "";
      this.password = "";
    },
    clearMessage() {
      this.message = "";
    },
  },
  mounted() {
    console.clear();
  },
}).mount("#login-app");
