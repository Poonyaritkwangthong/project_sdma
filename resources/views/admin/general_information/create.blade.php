@extends('layouts.app02')

@section('title')
    test
@endsection

@section('content')
    @include('layouts.questionnaire.script')
    <style>
        #page-1,
        #page-2,
        #page-3 {
            display: none;
        }

        #page-1.active,
        #page-2.active,
        #page-3.active {
            display: block;
        }
    </style>

    <div class="mt-[4rem] mb-[4rem] text-center text-2xl">
        <h1>เครื่องมือประเมิน วินิจฉัย เเละจัดการทางสังคม</h1>
        <h2>(Social Diagnosis and Management Assessment) ตัวย่อ S.D.M.A</h2>
    </div>
    <div class="w-[90rem] h-full p-[2rem] border mx-auto rounded-xl shadow-2xl mb-[4rem]">
        <div id="page-1" class="active">
            <div class="p-[2rem] border-b flex items-center gap-2">
                <label class="text-3xl text-[#4846aa]" for="searchHN">ดึงข้อมูลหากมีเลข HN</label>
                <input class="bg-[#f4f4fc] border-[#a3a0df] rounded-lg placeholder:text-center" type="text" id="searchHN"
                    placeholder="กรอก HN หรือ ID">
                <button class="bg-[#8fd3ff] text-[#00609e] p-1 rounded-lg" id="fetchButton"
                    type="button">ดึงข้อมูล</button>
            </div>
            @include('layouts.questionnaire.result_input_script')
            <form action="{{ route('general_information.store') }}" method="POST" enctype="multipart/form-data">
                @csrf <!-- ป้องกัน CSRF (จำเป็นใน Laravel) -->

                <div class="mb-[2rem] p-[2rem] border-b">
                    @include('layouts.questionnaire.part_01')
                    @include('layouts.questionnaire.part_02')
                </div>
                <div class="flex justify-end mr-[4rem]">
                    <button onclick="changePageHandle(2)" class="text-center bg-[#8fd3ff] text-[#00609e] p-2 rounded-lg hover:scale-105 delay-100 hover:bg-[#b8e3ff]"
                        type="button">ถัดไป</button>
                </div>
        </div>

        <div id="page-2">
            <div class="mb-[2rem] p-[2rem] border-b">
                @include('layouts.questionnaire.part_03')
                @include('layouts.questionnaire.part_04')
                @include('layouts.questionnaire.part_05')
            </div>
            <div class="flex justify-between ml-[4rem] mr-[4rem]">
                <button onclick="changePageHandle(1)" class="bg-[#f4f4fc] border-[#a3a0df] p-2 rounded-lg text-[#525456] hover:scale-105 delay-100"
                    type="button">กลับ</button>
                <button onclick="changePageHandle(3)" class="text-center bg-[#8fd3ff] text-[#00609e] p-2 rounded-lg  hover:scale-105 delay-100 hover:bg-[#b8e3ff]"
                    type="button">ถัดไป</button>
            </div>
        </div>

        <div id="page-3">
            <div class="mb-[2rem] p-[2rem] border-b">
                @include('layouts.questionnaire.part_06-08')
                @include('layouts.questionnaire.part_09-10')
            </div>

            <div class="flex justify-between ml-[4rem] mr-[4rem]">
                <button onclick="changePageHandle(2)" class="bg-[#f4f4fc] border-[#a3a0df] p-2 rounded-lg text-[#525456] hover:scale-105 delay-100"
                    type="button">กลับ</button>
                <button class="bg-[#00a651] p-2 text-white rounded-lg hover:scale-105 delay-100" type="submit">บันทึก</button>
            </div>
        </div>
        </form>
    </div>
@endsection
