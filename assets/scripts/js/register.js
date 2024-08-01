createApp({
  data() {
    return {
      username: "",
      email: "",
      password: "",
      message: "",
      messageType: "",
      currentYear: new Date().getFullYear(),
    };
  },
  methods: {
    async registerUser() {
      const formData = new FormData();
      formData.append("username", this.username);
      formData.append("email", this.email);
      formData.append("password", this.password);

      try {
        const response = await fetch("./assets/scripts/php/register.php", {
          method: "POST",
          body: formData,
        });

        const result = await response.json();

        if (result.status === "success") {
          this.resetForm();
          this.message = result.message;
          this.messageType = "is-success";
        } else {
          this.message = result.message;
          this.messageType = "is-danger";
        }
      } catch (error) {
        this.message = "An error occurred. Please try again.";
        this.messageType = "is-danger";
      }
    },
    resetForm() {
      this.username = "";
      this.password = "";
      this.email = "";
    },
    clearMessage() {
      this.message = "";
    },
  },
}).mount("#register-app");
