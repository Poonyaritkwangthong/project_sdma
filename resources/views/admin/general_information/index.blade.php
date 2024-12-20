@extends('layouts.admin')

@section('title')
    home page
@endsection

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="">
        <div class="mx-auto">
        </div>
        <div class="mt-4 w-[96rem] h-full border mx-auto bg-white shadow-lg rounded-lg p-6">
            <h1 class="text-[#7d8a99] text-4xl font-bold mt-2 mb-4">
                ตารางข้อมูลขอความอนุเคราะห์
            </h1>
            <div class="text-[#707c8a] flex gap-4 justify-end items-center mb-4">
                <div class="">
                    <br />
                    <a href="{{ route('general_information.create') }}">
                        <button
                            class="text-center bg-[#8fd3ff] text-[#00609e] p-3 rounded-lg w-[22rem] hover:scale-105 delay-100 hover:bg-[#b8e3ff]">
                            เพิ่ม
                        </button>
                    </a>
                </div>
            </div>
            <div class="flex justify-between border-t mb-6">
                <div class="text-[#525456] text-lg mt-4">
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
                <div class="text-[#525456] text-lg flex gap-2 items-center mt-4">
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
                        <tr class="text-[#525456] text-lg border-b">
                            <th class="p-2 pb-4 text-left">รหัส</th>
                            <th class="p-2 pb-4 text-left">ชื่อ นามสกุล</th>
                            <th class="p-2 pb-4 text-left">กลุ่มเป้าหมาย</th>
                            <th class="p-2 pb-4 text-left">การประเมินครอบครัว</th>
                            <th class="p-2 text-center">จัดการ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($general_information as $item)
                            <tr class="border-b">
                                <td class="p-4"><p class="w-full text-[#525456] text-m">{{ $item->id}}</p></td>
                                <td class="p-4"><p class="w-full text-[#525456] text-m">{{ $item->prefix }} {{ $item->full_name }}</p></td>
                                <td class="p-4"><p class="w-full text-[#525456] text-m">{{ $item->target_group }}</p></td>
                                <td class="p-4"><p class="w-full text-[#525456] text-m">{{ $item->family_assessments->result}}</p></td>
                                <td class="p-4 w-[15rem]">
                                    <div class="flex gap-2">
                                        <a href="{{ route('general_information.edit', $item->id) }}">
                                            <div
                                                class="bg-[#8fd3ff] w-[6rem] text-[#00609e] rounded-lg text-center hover:bg-[#b8e3ff] p-2 text-sm mb-2">
                                                <button class="">เเก้ไข</button>
                                            </div>
                                        </a>
                                        <a href="">
                                            <div
                                                class="bg-[#8fd3ff] w-[6rem] text-[#00609e] rounded-lg text-center hover:bg-[#b8e3ff] p-2 text-sm">
                                                <button class="">ดูรายละเอีย</button>
                                            </div>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </tbody>
                </table>
            </div>
            <div class="flex justify-between items-center mt-4">
                <p class="text-[#00609e] ml-[1rem]">
                    จำนวนข้อมูลในหน้าปัจจุบัน: {{ $general_information->count() }} |
                    แสดงข้อมูลจาก: {{ $general_information->firstItem() }} ถึง {{ $general_information->lastItem() }} |
                    จำนวนข้อมูลทั้งหมด: {{ $general_information->total() }}
                </p>

                <div class="flex gap-2 mr-[1rem]">
                    <!-- ปุ่มย้อนกลับ -->
                    @if ($general_information->previousPageUrl())
                        <a href="{{ $general_information->appends(['entries' => $entries])->previousPageUrl() }}"
                            class="p-2 bg-gray-100 text-gray-500 rounded-lg hover:scale-105 hover:bg-gray-200 shadow-xl">
                            ย้อนกลับ
                        </a>
                    @endif

                    <!-- ปุ่มถัดไป -->
                    @if ($general_information->nextPageUrl())
                        <a href="{{ $general_information->appends(['entries' => $entries])->nextPageUrl() }}"
                            class="p-2 bg-gray-100 text-gray-500 rounded-lg hover:scale-105 hover:bg-gray-200 shadow-xl">
                            ถัดไป
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
