@extends('layouts.form_admin')

@section('title')
    หน้าเเก้ไขตัวเลือก
@endsection

@section('title_content')
@endsection

@section('form_admin')
    <div>
        <div class="border w-[60rem] h-full p-[2rem] rounded-3xl shadow-2xl mx-auto">
            <div class="mt-[2rem] mb-[2rem]">
                <h1 class="text-3xl ">หน้าเเก้ไขตัวเลือก</h1>
            </div>
            <form action="{{ route('choice.update', $choice->id) }}" method="POST">
                @csrf
                @method('PUT') <!-- เพื่อส่งคำขอแบบ PUT -->
                <div class="border-b mb-[2rem]">
                    <div class="mb-[1rem]">
                        <label for="choice">เเก้ไขตัวเลือก</label><br>
                        <input class="rounded-lg w-full pl-2 p-2" type="text" name="choice" id="choice"
                            value="{{ $choice->choice }}" required>
                    </div>

                    <div class="mb-[1rem]">
                        <label for="point">ระบุคะเเนน (ของตัวเลือก)</label><br>
                        <input class="rounded-lg w-[4rem] pl-2 p-2" type="number" name="point" id="point"
                            value="{{ $choice->point }}" required>
                    </div>

                    <div class="mb-[1rem]">
                        <label for="question_id">เเก้ไขการเลือกข้อคำถาม (เช่นตัวเลือกนี้อยู่ในข้อที่ 1)</label>
                        <select class="rounded-lg w-full pl-2 p-2 " name="question_id" id="question_id" required>
                            <option value="">--ไม่ได้เลือกคำถาม--</option>
                            @foreach ($questions as $item)
                                <option value="{{ $item->id }}"
                                    {{ $item->id == $choice->question_id ? 'selected' : '' }}>
                                    {{ $item->question }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-4">
                        <label>เเก้ไขตั้งสถานะตัวเลือก</label>
                        <div class="flex gap-[1rem] items-center mt-[1rem]">
                            <div>
                                <input type="radio" name="c_status" value="start" id="c_status_start"
                                    {{ $choice->c_status == 'start' ? 'checked' : '' }}>
                                <label class="bg-[#20a68a] text-white p-2 rounded-lg" for="c_status_start">เปิดใช้งาน</label><br>
                            </div>
                            <div>
                                <input type="radio" name="c_status" value="stop" id="c_status_stop"
                                    {{ $choice->c_status == 'stop' ? 'checked' : '' }}>
                                <label class="bg-[#cf0202] text-white p-2 rounded-lg" for="c_status_stop">หยุดใช้งาน</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-end mr-[1rem]">
                    <button class="bg-[#f45a15] p-2 text-white rounded-lg " type="submit">บันทึกคำถาม</button>
                </div>
            </form>
        </div>
    </div>
@endsection
