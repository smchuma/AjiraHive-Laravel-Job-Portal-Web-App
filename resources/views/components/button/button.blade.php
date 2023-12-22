<button {{$attributes->twMerge([
    'class' => 'border bg-transparent border-black text-black hover:scale-105  font-bold py-2 px-5 rounded-lg transition ',
    'type' => 'submit'
    ])}} 
    >
    {{$slot}}
</button>