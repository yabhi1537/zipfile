<select wire:model="selectedOption1" name="gender" class="form-control select">
    @foreach ($options1 as $option)
       @if($option == 'Select Gender')
       <option value="" @if($option == $options2) selected @endif >{{ $option }}</option>
       @else
        <option value="{{ $option }}" @if($option == $options2) selected @endif >{{ $option }}</option>
       @endif
    @endforeach
</select> 
 