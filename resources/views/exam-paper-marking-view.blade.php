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
                <div>
                    @if($exam_question->correct_answer == "A")
                        <div class="rounded border-4 border-green-800 px-4 py-1 font-bold text-primary-600">A. {{ $exam_question->option_a }}</div>
                    @else
                        <div>A. {{ $exam_question->option_a }}</div>
                    @endif
                </div>
                <div>
                    @if($exam_question->correct_answer == "B")
                        <div class="rounded border-4 border-green-800 px-4 py-1 font-bold text-primary-600">B. {{ $exam_question->option_b }}</div>
                    @else
                        <div>A. {{ $exam_question->option_b }}</div>
                    @endif
                </div>
                <div>
                    @if($exam_question->correct_answer == "C")
                        <div class="rounded border-4 border-green-800 px-4 py-1 font-bold text-primary-600">C. {{ $exam_question->option_c }}</div>
                    @else
                        <div>A. {{ $exam_question->option_c }}</div>
                    @endif
                </div>
                <div>
                    @if($exam_question->correct_answer == "D")
                        <div class="rounded border-4 border-green-800 px-4 py-1 font-bold text-primary-600">A. {{ $exam_question->option_d }}</div>
                    @else
                        <div>A. {{ $exam_question->option_d }}</div>
                    @endif
                </div>
                <div>
                    @if($exam_question->correct_answer == "E")
                        <div class="rounded border-4 border-green-800 px-4 py-1 font-bold text-primary-600">A. {{ $exam_question->option_e }}</div>
                    @else
                        <div>A. {{ $exam_question->option_e }}</div>
                    @endif
                </div>
            </div>
            <hr/>
            <div class="text-center grid grid-cols-1 md:grid-cols-2">
                <div class="text-xs font-light">Competency: {{ \App\Models\Competency::where('id',$exam_question->competency_id)->first()->name }}</div>
                <div class="text-xs font-light">Competency Weight: {{ \App\Models\Competency::where('id',$exam_question->competency_id)->first()->weight }}</div>
                <div class="text-xs font-light">Correct Answer: {{$exam_question->correct_answer}}</div>
                <div class="grid grid-cols-2">
                    <div class="text-xs font-light">Year: {{$exam_question->year}}</div>
                    <div class="text-xs font-light">Month: {{$exam_question->month}}</div>
                </div>
            </div>
            <hr/>
        </div>
    @endforeach
    <hr/>
    <div class="text-center text-md font-semibold mt-20 mb-44">END OF PAPER</div>
</div>
