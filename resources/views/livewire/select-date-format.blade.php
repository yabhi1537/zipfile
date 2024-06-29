<select wire:model="selectedOption1" name="dateformat" class="form-control select">
    @foreach ($options1 as $option)
    @if($option == 'Select DateFormat')
        <option value="" @if($option == $options2) selected @endif>{{ $option }}</option>
        @else
        <option value="{{ $option }}" @if($option == $options2) selected @endif>{{ $option }}</option>
        @endif
    @endforeach
</select> 