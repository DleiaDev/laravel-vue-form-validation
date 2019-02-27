<template>
  <div class="">

    <h3 class="text-center">Send us a message!</h3>

    <!-- Form -->
    <form @submit.prevent="submit" id="message-form">

      <!-- Email -->
      <div class="form-group">
        <input
          type="text"
          name="email"
          v-model="form.email"
          class="form-control"
          :class="{ 'is-invalid' : form.errors.has('email') }"
          placeholder="Email">
        <has-error :form="form" field="email"></has-error>
      </div>

      <!-- Message -->
      <div class="form-group">
        <textarea
          name="message"
          v-model="form.message"
          class="form-control"
          :class="{ 'is-invalid' : form.errors.has('message') }"
          placeholder="Your message..."></textarea>
        <has-error :form="form" field="message"></has-error>
      </div>

      <!-- Submit -->
      <div class="">
        <button
          id="submit-button"
          type="submit"
          class="btn btn-primary">
            Send Message
        </button>
      </div>
    </form>

  </div>
</template>

<script>
export default {
  name: 'message-form',

  data() {
    return {
      form: new Form({
        email: '',
        message: ''
      })
    }
  },

  methods: {
    submit() {
      this.form.post('/message')
        .then(response => {
          alert('Message sent!');
        });
    }
  }
}
</script>

<style lang="css">
</style>
