@extends('layouts.user')

@section('title')
    Home Page
@endsection

@section('content')
    <div class="bg-white border w-full h-[45rem] mx-auto overflow-hidden bg-cover" style="background-image: url('{{ asset('images/sky.jpg') }}')">
        <div>

            <div class="text-center mt-[18rem] mb-[4rem] text-white">
                <h1 class="text-3xl mb-2 ">เว็ปไซต์นี้ทำเพื่อเก็มข้อมูลความเป็นอยู่ของผู้ป่วย</h1>
                <p class="text-2xl">เพื่อนำมาดำเนินช่วยเหลือผู้ป่วยที่ความเป็นอยู่ไม่ดี</p>
            </div>
            <div class="flex justify-center">
                <a href="{{ url('/page/form_test2') }}">
                    <button
                        class="bg-[#70c8ff] hover:bg-[#94d6ff] text-white p-[1.5rem] text-2xl rounded-full w-[25rem] flex items-center gap-2 justify-center hover:-translate-y-1 hover:scale-105  duration-100 hover:shadow-white hover:shadow-lg hover:text-gray-600">ทำเเบบสอบถามได้เลย!
                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 8 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1" />
                        </svg></button>
                </a>
            </div>
        </div>
    </div>
@endsection
