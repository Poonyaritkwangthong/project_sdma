@extends('layouts.app')

@section('title')
    ผลคะเเนนเเละเกณต์การวัด
@endsection

@section('content')
    <div>
        <div class="bg-white p-4 rounded-xl w-[30rem] h-full mx-auto">
            <h1 class="text-3xl text-center">ผลในการทำเเบบประเมิน</h1>
            <div class="text-lef text-xl  p-2 mx-auto ">
                <p class="text-center">ชื่อ: {{ $informant->informant_name }}</p>
                <p class="text-center mb-2">คะแนนรวม: {{ $informant->total_score }}</p>
                <div class="text-3xl text-center">
                    <p>
                        @if ($informant->total_score <= 20)
                            <h1 class="text-red-700">เกณฑ์: ระดับความพร้อมน้อย</h1>
                        @elseif ($informant->total_score <= 30)
                            <h1 class="text-yellow-600">เกณฑ์: ระดับความพร้อมปลานกลาง</h1>
                        @elseif ($informant->total_score <= 40)
                            <h1 class="text-green-500">เกณฑ์: ระดับความพร้อมมาก</h1>
                        @elseif ($informant->total_score <= 47)
                            <h1 class="text-blue-600">เกณฑ์: ระดับความพร้อมมากที่สุด</h1>
                        @endif
                    </p>
                </div>

            </div>

            <div class="flex justify-end">
                <a href="{{ route('form_test2.store') }}"><button
                    class="p-2 bg-orange-600 text-sm text-white rounded-xl hover:bg-orange-400 mt-4">กลับไปที่ฟอร์ม</button></a>
            </div>

        </div>

    </div>
@endsection
