
@props(['name','type' => 'text','value'=>''])
<x-form.card-wrapper>
    <x-form.label :name="$name"/>
    <input type="{{ $type }}" class="form-control" id="{{ $name }}" aria-describedby="{{ $name }}" name="{{ $name }}" value="{{ old($name,$value) }}" >
    <x-error :name="$name"/>
</x-form.card-wrapper>