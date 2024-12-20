<aside id="default-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-white">
        <ul class="space-y-2 font-medium">
            <div class="flex justify-center mt-[2rem] mb-[2rem]">
                <div>
                    <div class="w-[9rem] h-[9rem] rounded-full bg-[#f5f5f9] mb-[2rem] overflow-hidden mx-auto">
                        <img src="https://cdn-icons-png.flaticon.com/512/8847/8847419.png" alt="">
                    </div>
                    <div class="text-left text-gray-700">
                        <h1 class="">ผู้ใช้ : นาย ทนวย คงควรคอง</h1>
                        <h1 class="">ตำเเหน่ง : ผู้บัญชาการ</h1>
                    </div>
                </div>

            </div>

            <li class="mt-[4rem]">
                <a href="{{ url('/admin/index') }}"
                    class="flex items-center p-2 text-gray-700 rounded-lg bg-[#8fd3ff] hover:bg-[#b8e3ff]">

                    <span class="ms-3">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/question') }}"
                    class="flex items-center p-2 text-gray-700 rounded-lg bg-[#f5f5f9] hover:bg-[#dcdcde]">

                    <span class="flex-1 ms-3 whitespace-nowrap">ตารางคำถาม</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/choice') }}"
                    class="flex items-center p-2 text-gray-700 rounded-lg bg-[#f5f5f9] hover:bg-[#dcdcde]">

                    <span class="flex-1 ms-3 whitespace-nowrap">ตารางตัวเลือก</span>

                </a>
            </li>
            <li>
                <a href="{{ url('/admin/informant') }}"
                    class="flex items-center p-2 text-gray-700 rounded-lg bg-[#f5f5f9] hover:bg-[#dcdcde]">

                    <span class="flex-1 ms-3 whitespace-nowrap">ตารางผู้ให้ข้อมูล</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/informant_scores') }}"
                    class="flex items-center p-2 text-gray-700 rounded-lg bg-[#f5f5f9] hover:bg-[#dcdcde]">

                    <span class="flex-1 ms-3 whitespace-nowrap">ตารางคะเเนนของผู้ให้ข้อมูล</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/general_information') }}"
                    class="flex items-center p-2 text-gray-700 rounded-lg bg-[#f5f5f9] hover:bg-[#dcdcde]">

                    <span class="flex-1 ms-3 whitespace-nowrap">ตาราง SDMA</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center p-2 text-gray-700 rounded-lg bg-[#f5f5f9] hover:bg-[#f5f5f9]">

                    <span class="flex-1 ms-3 whitespace-nowrap">ออกจากระบบ</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
