@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes-> merge(['class' => 'border-gray-300 focus:border-my-skyblue focus:ring-my-skyblue rounded-md shadow-sm']) !!}>
