<x-guidance-layout>
    <div id="container" class="w-full flex flex-col p-4 px-6 pb-0 relative">
        <div class="">
            <a class="flex w-fit justify-start items-center space-x-2 group rounded cursor-pointer" href="/archive">
                <i class='bx bx-left-arrow-alt text-gray-600 text-2xl group-hover:text-red-700'></i>
                <p class="poppins text-base text-gray-600 group-hover:text-red-700">back</p>
            </a>
        </div>

        <div class="w-full flex flex-col space-y-6 py-4 pb-6">
            <div class="w-full h-250px flex space-x-4">
                <div class="min-w-250px w-250px h-250px rounded border border-gray-200 p-2 shadow-lg">
                    {{-- <img src="{{$student->image ? asset('storage/' . $student->image) : asset('image/male.png')}}" 
                    alt="" class="w-full h-full shadow-lg rounded"> --}}

                    <img src="{{$student->image ? asset('storage/' . $student->image) : ($student->sex == 'Female' ? asset('image/female.png') : asset('image/male.png'))}}" 
                    alt="" class="w-full h-full rounded">

                </div>
    
                <div class="w-full h-fit flex justify-between p-4 rounded shadow space-x-8 border border-gray-200">
                    <div class="w-full flex flex-col">
                        <div class="flex items-center space-x-2 border border-gray-300 py-1 px-2">
                            <h1 class="poppins text-2xl font-medium">{{$student->first_name}}</h1>
                            <h1 class="poppins text-2xl font-medium">{{$student->middle_name}}</h1>
                            <h1 class="poppins text-2xl font-medium">{{$student->last_name}}</h1>
                        </div>
                        <div class="flex justify-between border border-gray-300 border-t-0 py-1 px-2">
                            <h1 class="poppins text-base">BIRTHDATE: </h1>
                            <h1 class="poppins text-base">{{date('F j, Y', strtotime($student->dob))}}</h1>
                        </div>
                        <div class="flex justify-between border border-gray-300 border-t-0 py-1 px-2">
                            <h1 class="poppins text-base">Sex: </h1>
                            <h1 class="poppins text-base">{{$student->sex}}</h1>
                        </div>
                        <div class="flex justify-between border border-gray-300 border-t-0 py-1 px-2">
                            <h1 class="poppins text-base">GRADE LEVEL: </h1>
                            <h1 class="poppins text-base">
                                @if (is_null($grade_level))
                                    <span class="text-red-400 text-sm">Unable to retrieve</span>
                                @elseif ($grade_level != 'kinder')
                                    Grade {{ $grade_level }}   
                                @else
                                    Kinder
                                @endif
                            </h1>                            
                        </div>
                        <div class="flex justify-between items-center border border-gray-300 border-t-0 py-1 px-2">
                            {{-- && $section->has($student->section_id) --}}
                            <h1 class="poppins text-base">SECTION: </h1>
                            @if ($section)
                                <h1 class="poppins text-base">{{$section->name}}</h1>
                            @else
                                <h1 class="poppins text-sm text-red-400">No section yet</h1>
                            @endif
                        </div>
                        <div class="flex justify-between border border-gray-300 border-t-0 py-1 px-2">
                            <h1 class="poppins text-base">LRN: </h1>
                            <h1 class="poppins text-base">{{$student->lrn}}</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full flex space-x-4 h-screen">
                <div class="w-2/3 h-full flex justify-center items-center shadow-md rounded border border-gray-200">
                    <p>This is the report card area</p>
                </div>

                <div class="w-1/3 h-full ">
                    <div class="w-full h-400px flex justify-center items-center shadow rounded border border-gray-200">
                        <p>Parents information area</p>
                    </div>

                    <div>

                    </div>
                </div>
            </div>

        </div>
    </div>

     
</x-guidance-layout>


 
 
 
 
 
 
 
 
 
 
 
 