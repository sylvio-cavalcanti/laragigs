{{-- Whatever this component surrounds will be injected in the $slot --}}
{{-- Attributes->merge Uses the 'bg-gray-50 border border-gray-200 rounded p-6' 
    classes by default, but will merge any other class that is added --}}
    
<div {{$attributes->merge(['class' => 'bg-gray-50 border border-gray-200 rounded p-6'])}}> 
    {{ $slot }} 
</div>