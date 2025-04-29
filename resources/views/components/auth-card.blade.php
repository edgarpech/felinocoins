<div style="background-color: rgb(0 12 66); justify-content: center; overflow: hidden; min-height: 100vh;" class="flex flex-col items-center sm:pt-0">
    <div>
        <div>
            {{ $logo }}
        </div>
    
        <div class="w-full sm:max-w-md mt-2 px-6 overflow-hidden sm:rounded-lg" style="height: inherit;">
            {{ $slot }}
        </div>
    </div>
</div>
