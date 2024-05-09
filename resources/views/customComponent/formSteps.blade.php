@extends('nova::layout')

@section('content')
<tool-component class="flex flex-col space-y-4">
    <div class="flex flex-col items-center">
        <iframe :src="iframeUrl" width="100%" height="400px" @load="handleIframeLoad"></iframe>
    </div>
    <div v-if="currentStep" class="flex flex-col items-center">
        <h3>{{ currentStep.titulo }}</h3>
        <p>{{ currentStep.descripcion }}</p>
        <a :href="currentStep.url" target="_blank" class="btn btn-primary">Ir a la URL</a>
    </div>
</tool-component>
@endsection