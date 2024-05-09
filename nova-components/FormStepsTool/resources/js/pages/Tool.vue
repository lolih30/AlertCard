<template>
    <div>     
        <div v-if="currentStep">
            <h3>{{ currentStep.title }}</h3>
            <p>{{ currentStep.description }}</p>
            <br>
        </div>

        <iframe src="http://127.0.0.1:8000/forms/test1.html" width="100%" height="400px" @load="handleIframeLoad"></iframe>
    </div>
  </template>
  
  <script>
  export default {
    data() {
        return {
            iframeUrl: '',
            currentStep: null,
            steps: null
        };
    },
  
    methods: {
        handleIframeLoad() {
            const iframe = this.$el.querySelector('iframe');
            this.iframeUrl = iframe.contentWindow.location.href;
            console.log("Navegando..", this.iframeUrl)
            console.log('steps', this.steps)
           
  
            // Buscar el paso correspondiente
            for (const stepId in this.steps) {
                if (this.steps[stepId].url === this.iframeUrl) {
                    console.log(this.steps[stepId])
                    this.currentStep = this.steps[stepId];
                    break;
                }
            }

        }
    },
    mounted() {
        this.steps = Nova.config('steps');
    }
  }
  </script>