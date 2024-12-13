@extends('layouts.app')

@section('title')
    test
@endsection

@section('content')
    @include('questionnaire.script')
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
        <form action="{{ route('test.store') }}" method="POST">
            @csrf <!-- ป้องกัน CSRF (จำเป็นใน Laravel) -->
            <div id="page-1" class="active">
                <div class="mb-[2rem] p-[2rem] border-b">
                    @include('questionnaire.part_01')
                    @include('questionnaire.part_02')
                </div>
                <div class="flex justify-end">
                    <button onclick="changePageHandle(2)" class="bg-[#f45a15] p-2 text-white rounded-lg"
                        type="button">ถัดไป</button>
                </div>
            </div>

            <div id="page-2">
                <div class="mb-[2rem] p-[2rem] border-b">
                    @include('questionnaire.part_03')
                    @include('questionnaire.part_04')
                    @include('questionnaire.part_05')
                </div>
                <div class="flex justify-between ml-[4rem] mr-[4rem]">
                    <button onclick="changePageHandle(1)" class="bg-[#f45a15] p-2 text-white rounded-lg"
                        type="button">กลับ</button>
                    <button onclick="changePageHandle(3)" class="bg-[#00a651] p-2 text-white rounded-lg"
                        type="button">ถัดไป</button>
                </div>
            </div>

            <div id="page-3">
                <div class="mb-[2rem] p-[2rem] border-b">
                    @include('questionnaire.part_06-08')
                    @include('questionnaire.part_09-10')
                </div>
            </div>
            <div class="flex justify-between ml-[4rem] mr-[4rem]">
                <button onclick="changePageHandle(2)" class="bg-[#f45a15] p-2 text-white rounded-lg"
                    type="button">กลับ</button>
                <button class="bg-[#00a651] p-2 text-white rounded-lg" type="submit">ส่งแบบสอบถาม</button>
            </div>
        </form>
    </div>
@endsection
