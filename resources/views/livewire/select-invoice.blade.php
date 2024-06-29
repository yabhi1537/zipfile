<select wire:model="selectedOption1" class="select">
    @foreach ($options1 as $option)
        <option>{{ $option }}</option>
    @endforeach
</select>