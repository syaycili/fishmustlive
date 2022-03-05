<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 girdikart shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
<style>
body{
    background-color: #D9AFD9;
    background-image: linear-gradient(315deg, #D9AFD9 0%, #97D9E1 100%);
}
.girdikart{
    background-color: rgba(255, 255, 255, 0.596)
}
</style>
