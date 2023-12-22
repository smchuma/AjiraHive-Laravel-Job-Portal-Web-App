<button {{$attributes->twMerge([
    'class' => 'bg-blue-500 hover:scale-105 text-white font-bold py-2 px-5 rounded-md transition ',
    'type' => 'submit'
    ])}} 
    >
    {{$slot}}
</button>