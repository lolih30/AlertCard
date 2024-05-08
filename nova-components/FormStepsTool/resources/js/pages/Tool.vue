<template>
  <div>
    <!-- Mostrar el iframe -->
    <iframe :src="formsteps.url" width="100%" height="400px" @load="handleIframeLoad"></iframe>

    <!-- Mostrar las indicaciones -->
    <div v-if="formsteps">
      <h3>{{ formsteps.titulo }}</h3>
      <p>{{ formsteps.descripcion }}</p>
      <a :href="formsteps.url" target="_blank">Ir a la URL</a>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      currentStepIndex: 0, // Índice del paso actual
      steps: [], // Array de pasos cargados desde el archivo de configuración
    };
  },
  mounted() {
    // Cargar los pasos desde el archivo de configuración
    this.steps = require('@/config/Formsteps.php');
  },
  computed: {
    currentStep() {
      return this.steps[this.currentStepIndex];
    },
  },
  methods: {
    handleIframeLoad() {
      // Escuchar el evento de carga del iframe para obtener la nueva URL
      const iframe = this.$el.querySelector('iframe');
      const newUrl = iframe.contentWindow.location.href;

      // Encontrar el índice del paso que coincide con la nueva URL
      this.currentStepIndex = this.steps.findIndex(step => step.url === newUrl);
    },
  },
};
</script>
