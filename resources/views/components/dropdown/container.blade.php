@props(['trigger'])

<div x-data="{ show: false }" @click.away="show = false">
    {{-- trigger --}}
    <div @click="show = !show">
        {{ $trigger }}
    </div>

    {{-- dropdown links --}}
    <div x-show="show" style="display: none" class="py-2 absolute bg-gray-100 mt-2 rounded-xl w-full z-50">
        {{ $slot }}
    </div>
</div>
