@props(['name','value'=>''])

<x-form.card-wrapper>
   <x-form.label :name="$name"/>
   <textarea name="{{ $name }}" id="{{ $name }}" cols="30" rows="10" class="form-control editor">{!!old($name,$value)!!}</textarea>
   <x-error :name="$name" />
</x-form.card-wrapper>