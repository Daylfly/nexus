@props([
    'name',
    'class' => '',
])

@php
    $set = config('ui.icon_set', 'fontawesome');
    $faMap = [
        'dumbbell' => 'fa-solid fa-dumbbell',
        'bolt' => 'fa-solid fa-bolt',
        'star' => 'fa-solid fa-star',
        'location' => 'fa-solid fa-location-dot',
        'address-book' => 'fa-solid fa-address-book',
        'phone' => 'fa-solid fa-phone',
        'envelope' => 'fa-solid fa-envelope',
        'comment' => 'fa-solid fa-comment-dots',
        'paper-plane' => 'fa-solid fa-paper-plane',
        'fire' => 'fa-solid fa-fire',
        'chevron-right' => 'fa-solid fa-angle-right',
    ];
@endphp

@if($set === 'heroicons')
    @switch($name)
        @case('dumbbell')
            <svg class="{{ $class }}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M2.25 9.75a.75.75 0 0 1 .75.75v3a.75.75 0 0 1-1.5 0v-3a.75.75 0 0 1 .75-.75Zm19.5 0a.75.75 0 0 1 .75.75v3a.75.75 0 0 1-1.5 0v-3a.75.75 0 0 1 .75-.75ZM6 8.25a.75.75 0 0 1 .75.75v6a.75.75 0 0 1-1.5 0V9A.75.75 0 0 1 6 8.25Zm12 0a.75.75 0 0 1 .75.75v6a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75ZM8.25 11.25h7.5v1.5h-7.5v-1.5Z"/></svg>
            @break
        @case('bolt')
            <svg class="{{ $class }}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M11.25 2.25a.75.75 0 0 1 .693.459l2.25 5.25a.75.75 0 0 1-.688 1.041h-2.136l1.24 4.132a.75.75 0 0 1-1.28.73l-4.5-4.875A.75.75 0 0 1 7.5 7.75h2.27L10.558 3a.75.75 0 0 1 .692-.75Z"/></svg>
            @break
        @case('star')
            <svg class="{{ $class }}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354l-4.627 2.826c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd"/></svg>
            @break
        @case('location')
            <svg class="{{ $class }}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path fill-rule="evenodd" d="M11.54 22.351a.75.75 0 0 0 .92 0c4.866-4.183 7.29-7.583 7.29-10.351a7.75 7.75 0 1 0-15.5 0c0 2.768 2.424 6.168 7.29 10.35ZM12 10.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3Z" clip-rule="evenodd"/></svg>
            @break
        @case('address-book')
            <svg class="{{ $class }}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M5.25 3A2.25 2.25 0 0 0 3 5.25v13.5A2.25 2.25 0 0 0 5.25 21h11.25A2.25 2.25 0 0 0 18.75 18.75V5.25A2.25 2.25 0 0 0 16.5 3H5.25Zm3 4.5a2.25 2.25 0 1 1 4.5 0 2.25 2.25 0 0 1-4.5 0Zm6 8.25a.75.75 0 0 1-.75.75h-6a.75.75 0 0 1-.75-.75c0-1.657 1.79-3 3.75-3s3.75 1.343 3.75 3Z"/></svg>
            @break
        @case('phone')
            <svg class="{{ $class }}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path fill-rule="evenodd" d="M6.75 2.25A2.25 2.25 0 0 0 4.5 4.5v2.068c0 .652.265 1.277.733 1.736l2.122 2.121a.75.75 0 0 1 .167.818l-.638 1.913a.75.75 0 0 0 .182.769l3.015 3.015a.75.75 0 0 0 .769.182l1.913-.638a.75.75 0 0 1 .818.167l2.121 2.122a2.25 2.25 0 0 0 1.736.733H19.5a2.25 2.25 0 0 0 2.25-2.25v-1.5a2.25 2.25 0 0 0-1.536-2.137l-2.382-.794a2.25 2.25 0 0 0-2.162.482l-.83.83a.75.75 0 0 1-.93.122 15.05 15.05 0 0 1-4.108-4.108.75.75 0 0 1 .122-.93l.83-.83a2.25 2.25 0 0 0 .482-2.162l-.794-2.382A2.25 2.25 0 0 0 8.25 2.25h-1.5Z" clip-rule="evenodd"/></svg>
            @break
        @case('envelope')
            <svg class="{{ $class }}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M1.5 8.67v8.58A2.25 2.25 0 0 0 3.75 19.5h16.5a2.25 2.25 0 0 0 2.25-2.25V8.67l-8.69 5.215a3.75 3.75 0 0 1-3.62 0L1.5 8.67Z"/><path d="M22.5 6.908v-.158A2.25 2.25 0 0 0 20.25 4.5H3.75A2.25 2.25 0 0 0 1.5 6.75v.158l9.462 5.677a2.25 2.25 0 0 0 2.076 0L22.5 6.908Z"/></svg>
            @break
        @case('comment')
            <svg class="{{ $class }}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path fill-rule="evenodd" d="M4.804 21.644A6.75 6.75 0 0 1 3 16.75V8.25A6.75 6.75 0 0 1 9.75 1.5h4.5A6.75 6.75 0 0 1 21 8.25v8.5a6.75 6.75 0 0 1-6.75 6.75H9.75a6.72 6.72 0 0 1-3.93-1.256l-2.335.584a.75.75 0 0 1-.91-.91l.584-2.334Z" clip-rule="evenodd"/></svg>
            @break
        @case('paper-plane')
            <svg class="{{ $class }}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M3.478 2.559a.75.75 0 0 1 .823-.106l16.5 7.5a.75.75 0 0 1 0 1.367l-16.5 7.5a.75.75 0 0 1-1.05-.825l1.35-5.395a.75.75 0 0 1 .52-.54l8.354-2.39-8.355-2.389a.75.75 0 0 1-.52-.54l-1.35-5.395a.75.75 0 0 1 .228-.687Z"/></svg>
            @break
        @case('fire')
            <svg class="{{ $class }}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path fill-rule="evenodd" d="M12.963 2.286a.75.75 0 0 0-1.426 0C10.886 4.53 9.3 6.13 7.5 7.5c-2.25 1.711-3.75 4.144-3.75 7a8.25 8.25 0 0 0 16.5 0c0-2.856-1.5-5.289-3.75-7-1.8-1.37-3.386-2.97-3.537-5.214Zm.287 13.97a.75.75 0 0 1-1.5 0c0-1.156.53-2.257 1.49-3.176a.75.75 0 1 1 1.037 1.084c-.676.647-1.027 1.337-1.027 2.092Z" clip-rule="evenodd"/></svg>
            @break
        @default
            <svg class="{{ $class }}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.25a.75.75 0 0 1 .75.75v8.25H21a.75.75 0 0 1 0 1.5h-8.25V21a.75.75 0 0 1-1.5 0v-8.25H3a.75.75 0 0 1 0-1.5h8.25V3a.75.75 0 0 1 .75-.75Z"/></svg>
    @endswitch
@else
    <i {{ $attributes->merge(['class' => ($faMap[$name] ?? 'fa-solid fa-circle') . ' ' . $class]) }}></i>
@endif

