@extends('layouts.admin')

@section('title')
    Admin index Page
@endsection

@section('content')
    <div class="bg-white p-[2rem] rounded-xl border shadow-lg mb-[2rem]">
        <div class="flex justify-center gap-[4rem]">
            <div class="w-[22rem] h-[13rem] border p-[1rem] rounded-xl shadow-xl">
                <div class="flex items-center">
                    <img class="w-[10rem] h-[10rem]" src="https://cdn-icons-png.flaticon.com/512/5580/5580956.png"
                        alt="">
                    <div class="w-full">
                        <h1 class="text-lg text-gray-600 font-bold">จำนวนผู้ทำเเบบสอบถามทั้งหมด</h1><br>
                        <p class="ml-[3rem] text-3xl text-gray-600">0</p>
                    </div>
                </div>
            </div>
            <div class="w-[22rem] h-[13rem] border p-[1rem] rounded-xl shadow-xl">
                <div class="flex items-center gap-[2rem] mt-[2rem] ml-[3rem]">
                    <img class="w-[6rem] h-[6rem]" src="/images/user.svg" alt="">
                    <div class="w-full">
                        <h1 class="text-lg text-gray-600 font-bold">คะเเนนเฉลี่ย</h1>
                        <p class="ml-[2rem] text-3xl text-gray-600">0</p>
                    </div>
                </div>
            </div>
            <div class="w-[22rem] h-[13rem] border p-[1rem] rounded-xl shadow-xl">
                <div class="flex items-center gap-[2rem] mt-[2rem] ml-[3rem]">
                    <img class="w-[6rem] h-[6rem]" src="/images/stats.svg" alt="">
                    <div class="w-full">
                        <h1 class="text-lg text-gray-600 font-bold">เกณฑ์เฉลี่ย</h1>
                        <p class="ml-[2rem] text-3xl text-gray-600">0</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white p-[2rem] border rounded-xl shadow-lg">
        <div>
            <h1 class="text-center mb-[2rem] text-2xl">จำนวนผู้ทำเเบบสอบถามต่อเดือน/ปี 2567</h1>
            <div class="w-[60rem] mx-auto">
                @include('layouts.chart_bar')
            </div>
        </div>
    </div>
@endsection
