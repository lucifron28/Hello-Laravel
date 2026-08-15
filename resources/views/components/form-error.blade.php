@props(['field'])

@error($field)
    <p {{ $attributes->merge(['class' => 'mt-1 text-sm text-rose-300']) }}>{{ $message }}</p>
@enderror
