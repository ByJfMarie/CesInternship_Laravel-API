<template>
  <div class="connexion">
    <h1>Login</h1>
    <form action="" method="post" @submit.prevent="handleLogin">
      <p>
        Email <br />
        <input type="text" id="email" name="email" v-model="form.email" />
        <span class="text-danger" v-if="errors.email">{{
          errors.email[0]
        }}</span>
      </p>
      <p>
        Password <br />
        <input type="password" id="pswd" name="pswd" v-model="form.password" />
        <span class="text-danger" v-if="errors.password">{{
          errors.password[0]
        }}</span>
      </p>

      <input type="submit" value="Submit" class="btn-valider" />
      <input type="reset" value="Reset" class="btn-reset" />
    </form>
    <form action="" method="post" @submit.prevent="handleLogout">
      <input type="submit" value="submit" />
    </form>
  </div>
</template>

<script>
export default {
  name: "LoginForm",
  data() {
    return {
      form: { email: null, password: null },
      errors: {},
    };
  },
  methods: {
    async handleLogin() {
      try {
        await axios.get("/sanctum/csrf-cookie");
        await axios.post("/login", this.form);
        window.location = "/home";
      } catch (error) {
        this.errors = error.response.data.errors;
      }
    },
    async handleLogout() {
      try {
        await axios.get("/sanctum/csrf-cookie");
        await axios.post("/logout", this.form);
        window.location = "/";
      } catch (error) {
        this.errors = error.response.data.errors;
      }
    },
  },
};
</script>
