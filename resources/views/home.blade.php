@extends('layouts.app')

@section('title')
    home page
@endsection

@section('content')
<a href="{{ route('test.create') }}"><button>เพิ่ม</button></a>
 <table>
    <thead>
        <tr>
            <th>general_id</th>
            <th>facts_id</th>
            <th>social_id</th>
            <th>problem_id</th>
            <th>risk_id</th>
            <th>social_support_id</th>
            <th>monitor_and_evaluate_id</th>
            <th>termination_of_service_id</th>
            <th>family_assessments_id</th>
            <th>family_tree_and_house_map_id</th>
            <th>จัดการ</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th>
                <div>
                    <a href=""><button>เเก้ไข</button></a>
                    <a href=""><button>ดูรายละเอียด</button></a>
                </div>
            </th>
        </tr>
    </tbody>
 </table>
@endsection
