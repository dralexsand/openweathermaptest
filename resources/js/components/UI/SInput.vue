<template>
  <div class="mb-3">
    <label
        :for="input_id"
        class="form-label">
      <strong>{{ input_title }}</strong>
    </label>
    <input
        :type="input_type"
        class="form-control"
        :id="input_id">
  </div>
</template>
<script>
export default {
  name: "s-input",
  props: {
    input_title: '',
    input_id: '',
    input_type: '',
  }
}
</script>
<style scoped>
label {
  font-size: 14px;
}

input {
  width: 100%;
  font-size: 14px;
  border: 1px solid teal;
  padding: 1px;
}
</style>
