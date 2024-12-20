@extends('layouts.form_admin')

@section('title')
    หน้าเเก้ไขคำถาม
@endsection

@section('form_admin')
    <div class="border w-[60rem] h-full p-[2rem] rounded-3xl shadow-2xl mx-auto">
        <div class="mt-[2rem] mb-[2rem]">
            <h1 class="text-3xl ">หน้าเเก้ไขคำถาม</h1>
        </div>
        <form action="{{ route('question.update', $question->id) }}" method="POST">
            @csrf <!-- ป้องกัน CSRF -->
            @method('PUT') <!-- กำหนด HTTP Method เป็น PUT -->
            <div class="border-b mb-[2rem]">
                <div class="mb-[1rem]">
                    <label for="question">ตั้งคำถาม</label>
                    <input class="rounded-lg w-full pl-2 p-2" type="text" name="question" id="question"
                        value="{{ $question->question }}" required>
                </div>
                <div class="mb-[1rem]">
                    <label>ตั้งประเภทคำถาม</label>
                    <div class="flex gap-[1rem] items-center mt-[1rem]">
                        <div>
                            <input type="radio" name="q_type" value="radio" id="q_type_radio"
                                {{ $question->q_type == 'radio' ? 'checked' : '' }}>
                            <label for="q_type_radio">แบบเลือกได้ตัวเลือกเดียว</label><br>
                        </div>
                        <div>
                            <input type="radio" name="q_type" value="checkbox" id="q_type_checkbox"
                                {{ $question->q_type == 'checkbox' ? 'checked' : '' }}>
                            <label for="q_type_checkbox">แบบเลือกได้หลายตัวเลือก</label>
                        </div>
                    </div>
                </div>

                <div class="mb-[1rem]">
                    <label>ตั้งสถานะคำถาม</label>
                    <div class="flex gap-[1rem] items-center mt-[1rem]">
                        <div>
                            <input type="radio" name="q_status" value="start" id="q_status_start"
                                {{ $question->q_status == 'start' ? 'checked' : '' }}>
                            <label class="bg-[#20a68a] text-white p-2 rounded-lg" for="q_status_start">เปิดใช้งาน</label><br>
                        </div>
                        <div>
                            <input type="radio" name="q_status" value="stop" id="q_status_stop"
                                {{ $question->q_status == 'stop' ? 'checked' : '' }}>
                            <label class="bg-[#cf0202] text-white p-2 rounded-lg" for="q_status_stop">หยุดใช้งาน</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-end mr-[1rem]">
                <button class="bg-[#f45a15] p-2 text-white rounded-lg " type="submit">บันทึกคำถาม</button>
            </div>
        </form>

    </div>
@endsection
