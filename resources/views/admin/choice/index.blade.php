@extends('layouts.admin')

@section('title')
    ตารางตัวเลือก
@endsection

@section('table')
    <div class="">
        <div class="mx-auto">
        </div>
        <div class="mt-4 w-[96rem] h-full border mx-auto bg-white shadow-lg rounded-lg p-6">
            <h1 class="text-[#7d8a99] text-4xl font-bold mt-2 mb-4">
                ตารางตัวเลือก
            </h1>
            <div class="text-[#707c8a] flex gap-4 justify-end items-center mb-4">
                <div class="">
                    <br />
                    <a href="{{ route('choice.create') }}">
                        <button
                            class="text-center bg-[#8fd3ff] text-[#00609e] p-3 rounded-lg w-[22rem] hover:scale-105 delay-100 hover:bg-[#b8e3ff]">
                            เพิ่มตัวเลือก
                        </button>
                    </a>
                </div>
            </div>
            <div class="flex justify-between items-center border-t mb-6">
                <div class="text-[#707c8a]  mt-4">
                    <form class="flex gap-2 items-center" method="GET" action="{{ url()->current() }}">
                        <p>Show</p>
                        <select name="entries" class="border p rounded-lg" onchange="this.form.submit()">
                            <option value="10" {{ request('entries') == 10 ? 'selected' : '' }}>10</option>
                            <option value="25" {{ request('entries') == 25 ? 'selected' : '' }}>25</option>
                            <option value="50" {{ request('entries') == 50 ? 'selected' : '' }}>50</option>
                            <option value="100" {{ request('entries') == 100 ? 'selected' : '' }}>100</option>
                        </select>
                        <p>entries</p>
                    </form>
                </div>
                <div class="text-[#707c8a] flex gap-2 items-center mt-4">
                    <form method="GET" action="{{ url()->current() }}">
                        <label for="search">ค้นหา</label>
                        <input id="search" name="query" class="border p-1 pl-2 rounded-lg" type="text"
                               placeholder="ค้นหา" value="{{ request('query') }}" />
                        <button type="submit" class="bg-[#8fd3ff] text-[#00609e] p-1 rounded-lg">ค้นหา</button>
                    </form>
                </div>
            </div>
            <div class="mx-auto">
                <table class="w-full">
                    <thead>
                        <tr class="text-center text-[#7d8a99] text-sm border-b">
                            <th class="p-2 pb-4 text-left">เลขข้อ</th>
                            <th class="p-2 pb-4 text-left">ตัวเลือก</th>
                            <th class="p-2 pb-4 w-[15rem]">คะเเนน (ตามเเต่ละตัวเลือก)</th>
                            <th class="p-2 pb-4 text-left">คำถาม (ตัวเลือก)</th>
                            <th class="p-2 pb-4">สถานะ</th>
                            <th class="p-2 pb-4 w-[10rem]">จัดการข้อมูล</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($choices as $item)
                            <tr class="text-[#7d8a99] border-b text-center">
                                <td class="p-4 w-[8rem] text-left">{{ $item->id }}</td>
                                <td class="p-4 text-left">{{ $item->choice }}</td>
                                <td class="p-4">{{ $item->point }}</td>
                                <td class="p-4 text-left">{{ $item->question->id }} {{ $item->question->question }}</td>
                                @if ($item->c_status === 'start')
                                    <td class="p-4 text-[#20a68a]">{{ $item->c_status }}</td>
                                @else
                                    <td class="p-4 text-[#d60092]">{{ $item->c_status }}</td>
                                @endif
                                <td class="p-4">
                                    <div class="flex gap-2 justify-center items-center">
                                        <a href="{{ route('choice.edit', $item->id) }}">
                                            <div
                                                class="bg-[#8fd3ff] text-[#00609e] rounded-lg text-center hover:bg-[#b8e3ff] p-2 text-sm">
                                                <button class="">เเก้ไข</button>
                                            </div>
                                        </a>

                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="flex justify-between items-center mt-4">
                <p class="text-[#00609e] ml-[1rem]">
                    จำนวนข้อมูลในหน้าปัจจุบัน: {{ $choices->count() }} |
                    แสดงข้อมูลจาก: {{ $choices->firstItem() }} ถึง {{ $choices->lastItem() }} |
                    จำนวนข้อมูลทั้งหมด: {{ $choices->total() }}
                </p>

                <div class="flex gap-2 mr-[1rem]">
                    <!-- ปุ่มย้อนกลับ -->
                    @if ($choices->previousPageUrl())
                        <a href="{{ $choices->appends(['entries' => $entries])->previousPageUrl() }}"
                            class="p-2 bg-gray-100 text-gray-500 rounded-lg hover:scale-105 hover:bg-gray-200 shadow-xl">
                            ย้อนกลับ
                        </a>
                    @endif

                    <!-- ปุ่มถัดไป -->
                    @if ($choices->nextPageUrl())
                        <a href="{{ $choices->appends(['entries' => $entries])->nextPageUrl() }}"
                            class="p-2 bg-gray-100 text-gray-500 rounded-lg hover:scale-105 hover:bg-gray-200 shadow-xl">
                            ถัดไป
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
