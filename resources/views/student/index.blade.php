<x-guidance-layout>
    <div id="container" class="w-full relative">
        {{-- <div class="fixed z-30 top-3 rounded left-1/2 transform -translate-x-1/2 bg-green-100 px-14 py-3"><p class="poppins text-lg text-green-800 ">' + response.message + '</p></div> --}}
        <div class="flex justify-between items-center px-4 py-4 border-b border-gray-300">
            <div class="flex space-x-4 items-center border-l-4 border-blue-400 py-1 px-2">
                <h1 class="poppins text-2xl font-medium">LEARNERS</h1>
            </div>
            <div class="w-2/3 flex">
                <form action="/students" class="flex w-full justify-end space-x-4">
                    <input name="search" id="search-student" type="text" placeholder="Search by First name, Last name or LRN.." 
                    class="w-500px poppins text-sm focus:outline-none focus:bg-blue-100 border border-gray-400 rounded focus:border-blue-400 py-2 px-4">
                    <a id="add-student" class="poppins py-2 px-4 bg-blue-600 text-sm text-white font-medium rounded cursor-pointer">New Student</a>
                </form>
            </div>
        </div>

        <div class="w-full h-600px px-4 overflow-auto">
            <div class="w-full py-4 px-2">
                <div class="w-fit flex space-x-2">
                    <div class="active-level level all flex items-center space-x-2 rounded py-1 px-4 bg-gray-200 group hover:bg-blue-400 hover:text-white cursor-pointer">
                        <p class="poppins text-base cursor-pointer no-underline">All</p>
                    </div>

                    <div data-grade-level="kinder" class="level flex items-center space-x-2 rounded py-1 px-4 bg-gray-200 group hover:bg-blue-400 hover:text-white cursor-pointer">
                        <label class="poppins text-base cursor-pointer">Kinder</label>
                    </div>

                    <div data-grade-level="1" class="level flex items-center space-x-2 rounded py-1 px-4 bg-gray-200 group hover:bg-blue-400 hover:text-white cursor-pointer">
                        <label class="poppins text-base cursor-pointer">Grade 1</label>
                    </div>

                    <div data-grade-level="2" class="level flex items-center space-x-2 rounded py-1 px-4 bg-gray-200 group hover:bg-blue-400 hover:text-white cursor-pointer">
                        <label class="poppins text-base cursor-pointer">Grade 2</label>
                    </div>

                    <div data-grade-level="3" class="level flex items-center space-x-2 rounded py-1 px-4 bg-gray-200 group hover:bg-blue-400 hover:text-white cursor-pointer">
                        <label class="poppins text-base cursor-pointer">Grade 3</label>
                    </div>

                    <div data-grade-level="4" class="level flex items-center space-x-2 rounded py-1 px-4 bg-gray-200 group hover:bg-blue-400 hover:text-white cursor-pointer">
                        <label class="poppins text-base cursor-pointer">Grade 4</label>
                    </div>

                    <div data-grade-level="5" class="level flex items-center space-x-2 rounded py-1 px-4 bg-gray-200 group hover:bg-blue-400 hover:text-white cursor-pointer">
                        <label class="poppins text-base cursor-pointer">Grade 5</label>
                    </div>

                    <div data-grade-level="6" class="level flex items-center space-x-2 rounded py-1 px-4 bg-gray-200 group hover:bg-blue-400 hover:text-white cursor-pointer">
                        <label class="poppins text-base cursor-pointer">Grade 6</label>
                    </div>
                </div>

                <div class="flex items-center space-x-4">
                    <div class="pt-4 py-2 flex space-x-3 items-center">
                        <h1>TOTAL LEARNERS:</h1>
                        <h1 id="total-student" class="text-base text-blue-400 font-medium px-2 border border-blue-400 rounded"></h1>
                    </div>

                    <div class="pt-4 py-2 flex space-x-3 items-center">
                        <h1>RESULT COUNT:</h1>
                        <h1 id="enrolled-student" class="text-base text-blue-400 font-medium px-2 border border-blue-400 rounded"></h1>
                    </div>
                </div>
            </div>

            {{-- Students card container --}}
            <div id="students-container" class="w-full flex flex-wrap -m-2 px-2">
                
            </div>

            <div class="w-full poppins px-2 py-6">
                <div class="pagination my-5"> 

                </div>
            </div>

            {{-- Add new student modal --}}
            <x-addstudent-modal/>
            
        <div>

    </div>
</x-guidance-layout>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script src="{{ asset('js/student_index.js') }}"></script>

<script>
    const levels = document.querySelectorAll('.level');

    levels.forEach(level => {
        level.addEventListener('click', () => {
            const current = document.querySelector('.active-level');
            current.classList.remove('active-level');
            level.classList.add('active-level');
        });
    });

</script>