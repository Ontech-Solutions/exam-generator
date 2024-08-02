<x-filament-panels::page>
    <div>
        @php
            // Get today's date
            $today = Carbon\Carbon::today();

            // Get the start and end of the current week
            $startOfYear = Carbon\Carbon::now()->startOfYear();
            $endOfYear = Carbon\Carbon::now()->endOfYear();

            // Get the start and end of the current month
            $startOfMonth = Carbon\Carbon::now()->startOfMonth();
            $endOfMonth = Carbon\Carbon::now()->endOfMonth();

        @endphp
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="h-32 w-full rounded-lg bg-blue-800 bg-opacity-20 p-8 border-r-4 border-blue-800 text-end">
                <div class="font-bold text-blue-800 text-sm flex flex-row space-x-1 items-center">
                    <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
                    </svg>
                    </span>
                    <span>TOTAL PROGRAMS</span></div>
                <div class="font-semibold text-gray-600 text-xs mt-4">{{ number_format(App\Models\Program::all()->count()) }} Programs</div>
            </div>
            <div class="h-32 w-full rounded-lg bg-blue-800 bg-opacity-20 p-8 border-r-4 border-blue-800 text-end">
                <div class="font-bold text-blue-800 text-sm flex flex-row space-x-1 items-center">
                    <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244" />
                    </svg>
                    </span>
                    <span>COMPETENCiES</span></div>
                <div class="font-bold text-gray-600 text-xs mt-4">{{ number_format(App\Models\Competency::all()->count()) }} Competencies</div>
            </div>
            <div class="h-32 w-full rounded-lg bg-blue-800 bg-opacity-20 p-8 border-r-4 border-blue-800 text-end">
                <div class="font-bold text-blue-800 text-sm flex flex-row space-x-1 items-center">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                    </span>
                    <span>SYSTEM USERS</span>
                </div>
                <div class="font-bold text-gray-600 text-xs mt-4">{{ number_format(App\Models\User::all()->count()) }} Users</div>
                <div class="font-bold text-gray-700 text-xs">{{ number_format(App\Models\Branch::all()->count()) }} Branches</div>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-10">
            <div class="h-32 w-full rounded-lg bg-blue-800 bg-opacity-20 p-8 border-r-4 border-blue-800">
                <div class="font-bold text-blue-800 text-sm flex flex-row space-x-1 items-center">
                    <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 3.75V16.5L12 14.25 7.5 16.5V3.75m9 0H18A2.25 2.25 0 0 1 20.25 6v12A2.25 2.25 0 0 1 18 20.25H6A2.25 2.25 0 0 1 3.75 18V6A2.25 2.25 0 0 1 6 3.75h1.5m9 0h-9" />
                    </svg>
                    </span>
                    <span>GENERATED EXAM PAPERS</span></div>
                <div class="font-semibold text-gray-600 text-sm mt-4 text-end">{{ number_format(App\Models\ExamPaper::distinct("ref_number")->count()) }}</div>
            </div>
            <div class="h-32 w-full rounded-lg bg-blue-800 bg-opacity-20 p-8 border-r-4 border-blue-800">
                <div class="font-bold text-blue-800 text-sm flex flex-row space-x-1 items-center">
                    <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0M12 12.75h.008v.008H12v-.008Z" />
</svg>

                    </span>
                    <span>THIS YEAR'S GENERATED PAPERS</span></div>
                <div class="font-semibold text-gray-600 text-sm mt-4 text-end">{{ number_format(App\Models\ExamPaper::distinct("ref_number")->whereBetween('created_at', [$startOfYear, $endOfYear])->count()) }}</div>
            </div>

        </div>
    </div>

</x-filament-panels::page>
