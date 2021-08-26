<form {{ $attributes->merge(['class'=>'card shadow']) }}>
    <div class="card-header p-1 bg-primary"></div>
    <div class="card-body">
        {{ $slot }}
    </div>
</form>
