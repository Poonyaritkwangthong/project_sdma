@extends('layouts.app')

@section('title')
เครื่องมือประเมินความพร้อมของครอบครัว (Family Readiness Assessment)/F.R.A
@endsection

@section('content')
    <div class="flex justify-center">
        <form action="{{ route('form_informant.store') }}" method="POST">
            @csrf <!-- ป้องกัน CSRF (จำเป็นใน Laravel) -->
            <div class="mb-[2rem]">
                <h1 class="text-3xl">หน้ากรอกข้อมูลของผู้ให้ข้อมูล</h1>
                <p class="text-gray-500">เมื่อกรอกครบเเลวกดปุ่มถัดไปเพื่อทำเเบบสอบถามได้เลย</p>
            </div>
            <div class="border-b border-white border-t py-2 mb-[2rem]">

                <div class="mb-[1rem] border-b border-white">
                    <div class="mb-4">
                        <label for="question">ชื่อ นามสกุล (ผู้ให้ข้อมูล)</label><br>
                        <input class="rounded-lg w-full pl-2 p-2" type="text" name="informant_name" id="informant_name" required>
                    </div>
                    <div class="flex gap-4">
                        <div class="mb-4">
                            <label for="question">อายุ (ผู้ให้ข้อมูล)</label><br>
                            <input class="rounded-lg w-[6rem] pl-2 p-2" type="number" name="informant_age" id="informant_age" required>
                        </div>
                        <div class="mb-4">
                            <label for="question">เกี่ยวข้องเป็น</label><br>
                            <input class="rounded-lg w-[22rem] pl-2 p-2" type="text" name="related" id="related" required>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div classinformant_name
                        <label for="question">ชื่อ นามสกุล (ผู้ป่วย)</label><br>
                        <input class="rounded-lg w-full pl-2 p-2" type="text" name="patient_name" id="patient_name" required>
                    </div>
                    <div class="flex gap-7">
                        <div class="mb-4">
                            <label for="question">รหัสผู้ป่วย (HN)</label><br>
                            <input class="rounded-lg w-[22rem] pl-2 p-2" type="text" name="HN" id="HN" required>
                        </div>
                        <div class="mb-4">
                            <label for="question">อายุ (ผู้ป่วย)</label><br>
                            <input class="rounded-lg w-[6em] pl-2 p-2" type="number" name="patient_age" id="patient_age" required>
                        </div>
                    </div>
                </div>
            </div>
                <div class="flex justify-end ">
                    <button  class="bg-[#f45a15] p-2 text-white rounded-lg " type="submit">ถัดไป</button>
                </div>
        </form>
    </div>
@endsection
