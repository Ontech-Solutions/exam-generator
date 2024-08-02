<div class="rounded-lg w-[100%] p-20 bg-white border border-gray-200">
    @foreach($exam_questions as $exam_question)
        <div class="mb-10 p-4">
            <div class="flex flex-row items-start justify-between p-4">
                <div class="font-semibold">{{ $loop->iteration }}. {{ $exam_question->question }}</div>
            </div>
            <div>
                @if($exam_question->image == "null")@else<img src="{{ asset($exam_question->image) }}">@endif
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 p-4">
                <div>A. {{ $exam_question->option_a }}</div>
                <div>B. {{ $exam_question->option_b }}</div>
                <div>C. {{ $exam_question->option_c }}</div>
                <div>D. {{ $exam_question->option_d }}</div>
                <div>E. {{ $exam_question->option_e }}</div>
            </div>
            <div class="text-xs font-light">Competency: {{ \App\Models\Competency::where('id',$exam_question->competency_id)->first()->name }}</div>
        </div>
    @endforeach
    <hr/>
    <div class="text-center text-md font-semibold mt-20 mb-44">END OF PAPER</div>
</div>
