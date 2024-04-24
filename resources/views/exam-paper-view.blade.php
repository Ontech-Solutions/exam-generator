<div class="rounded-lg w-[100%] p-20 bg-white border border-gray-200">
    @foreach($exam_questions as $exam_question)
        <div class="mb-10 p-4">
            <div class="flex flex-row items-start justify-between p-4">
                <div class="font-semibold">{{ $loop->iteration }}. {{ $exam_question->question }}</div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 p-4">
                <div>{{ $exam_question->option_a }}</div>
                <div>{{ $exam_question->option_b }}</div>
                <div>{{ $exam_question->option_c }}</div>
                <div>{{ $exam_question->option_d }}</div>
            </div>
        </div>
    @endforeach
    <hr/>
    <div class="text-center text-md font-semibold mt-20 mb-44">END OF PAPER</div>
</div>
