@php
    $preguntas = [
        'What does SendIt?' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis quae distinctio nemo natus, accusantium magni, nam eveniet sint iusto odio assumenda laborum. Nobis vero quas consequatur aspernatur blanditiis maiores expedita?',
        'What coding languages ?' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis quae distinctio nemo natus, accusantium magni, nam eveniet sint iusto odio assumenda laborum. Nobis vero quas consequatur aspernatur blanditiis maiores expedita?',
        'How fast will I get my coded website?' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis quae distinctio nemo natus, accusantium magni, nam eveniet sint iusto odio assumenda laborum. Nobis vero quas consequatur aspernatur blanditiis maiores expedita?',
        'How can I check the progress of my website?' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis quae distinctio nemo natus, accusantium magni, nam eveniet sint iusto odio assumenda laborum. Nobis vero quas consequatur aspernatur blanditiis maiores expedita?',
        'If I have a blog, do you count each post as a separate page?' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis quae distinctio nemo natus, accusantium magni, nam eveniet sint iusto odio assumenda laborum. Nobis vero quas consequatur aspernatur blanditiis maiores expedita?',
    ];
@endphp

<section class="py-20 bg-[#f6f7fa] rounded-3xl">
    <div class="h-full max-w-5xl mx-auto">
        <div class="flex flex-col gap-12">
            <div>
            <h2 class="font-semibold tracking-tighter text-5xl text-center">
                FAQ
            </h2>
            <p class="mx-auto mt-4 text-sm text-gray-600 text-center">
                Frequent questions &amp; answers
            </p>
            </div>
            <div class="flex flex-col mx-auto max-w-2xl gap-6 text-base text-gray-400 w-full px-4">
                @foreach ($preguntas as $pregunta => $respuesta)
                    <x-sendit.faq-item :pregunta="$pregunta" :respuesta="$respuesta" />
                @endforeach
            </div>
        </div>
    </div>
</section>
