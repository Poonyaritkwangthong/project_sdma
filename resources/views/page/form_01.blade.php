@extends('layouts.app')

@section('title')
เครื่องมือประเมินความพร้อมของครอบครัว (Family Readiness Assessment)/F.R.A
@endsection

@section('content')
<form action="{{ route('form_01.process') }}" method="POST">
    @csrf
    <div class=" mx-auto border-b-2 p-2 border-gray-500">
        <label for="">1. ระดับรายได้ของครอบครัว</label><br>
        <input type="radio" name="income" value="0" id="option0"
            {{ isset($selectedIncome) && $selectedIncome == '0' ? 'checked' : '' }}>
        <label for="option0">0. ไม่มีรายได้ทั้งจากตนเองหรือได้รับจากผู้อื่น</label><br>
        <input type="radio" name="income" value="1" id="option1"
            {{ isset($selectedIncome) && $selectedIncome == '1' ? 'checked' : '' }}>
        <label for="option1">1. ไม่มีรายได้ของตนเอง (มีหนี้สิน ไม่มีเงินออม)</label><br>
        <input type="radio" name="income" value="2" id="option2"
            {{ isset($selectedIncome) && $selectedIncome == '2' ? 'checked' : '' }}>
        <label for="option2">2. มีรายได้น้อยกว่ารายจ่าย (มีหนี้สิน ไม่มีเงินออม)</label><br>
        <input type="radio" name="income" value="3" id="option3"
            {{ isset($selectedIncome) && $selectedIncome == '3' ? 'checked' : '' }}>
        <label for="option3">3. มีรายได้เท่ากับรายจ่าย (ไม่มีเงินออมและไม่มีปัญหาหนี้สิน)</label><br>
        <input type="radio" name="income" value="4" id="option4"
            {{ isset($selectedIncome) && $selectedIncome == '4' ? 'checked' : '' }}>
        <label for="option4">4. มีรายได้สูงกว่ารายจ่าย แต่ไม่มีเงินออม (ไม่มีเงินออมและไม่มีปัญหาหนี้สิน)</label><br>
        <input type="radio" name="income" value="5" id="option5"
            {{ isset($selectedIncome) && $selectedIncome == '5' ? 'checked' : '' }}>
        <label for="option5">5. มีรายได้สูงกว่ารายจ่าย (มีเงินออม ไม่มีปัญหาหนี้สิน)</label><br><br>
    </div>
    <div class="mb-4 mx-auto border-b-2 p-2 border-gray-500">
        @csrf
        <label for="">2. สภาพแวดล้อมภายในบ้าน (ตอบได้มากกว่า 1 ข้อ) ข้อละ 1 คะแนน</label><br>

        <input type="checkbox" name="income[]" value="1" id="option0"
            {{ is_array($selectedIncome) && in_array('0', $selectedIncome) ? 'checked' : '' }}>
        <label for="option0">0. ไม่มีที่อยู่แน่นอน เร่ร่อน ไร้บ้าน</label><br>

        <input type="checkbox" name="income[]" value="1" id="option1"
            {{ is_array($selectedIncome) && in_array('1', $selectedIncome) ? 'checked' : '' }}>
        <label for="option1">1. มีที่อยู่แน่นอน แต่สภาพแวดล้อมไม่เหมาะสม</label><br>

        <input type="checkbox" name="income[]" value="1" id="option2"
            {{ is_array($selectedIncome) && in_array('2', $selectedIncome) ? 'checked' : '' }}>
        <label for="option2">2. ที่อยู่มีความเป็นสัดส่วน</label><br>

        <input type="checkbox" name="income[]" value="1" id="option3"
            {{ is_array($selectedIncome) && in_array('3', $selectedIncome) ? 'checked' : '' }}>
        <label for="option3">3. ที่อยู่ถุกสุขลักษณะ ความสะอาด เรียบร้อย</label><br>

        <input type="checkbox" name="income[]" value="1" id="option4"
            {{ is_array($selectedIncome) && in_array('4', $selectedIncome) ? 'checked' : '' }}>
        <label for="option4">4. ที่อยู่มีความปลอยภัยทางกายภาพ</label><br>

        <input type="checkbox" name="income[]" value="1" id="option5"
            {{ is_array($selectedIncome) && in_array('5', $selectedIncome) ? 'checked' : '' }}>
        <label for="option5">5. ที่อยู่มีพื้นที่ว่างในการทำกิจกรรม</label><br>
    </div>

    <div class="mb-4 mx-auto border-b-2 p-2 border-gray-500">
        @csrf
        <label for="">3. ความรักใคร่ผูกพันในครอบครัว (ตอบได้มากกว่า 1 ข้อ) ข้อละ 1 คะแนน</label><br>

        <input type="checkbox" name="income[]" value="1" id="option0"
            {{ is_array($selectedIncome) && in_array('0', $selectedIncome) ? 'checked' : '' }}>
        <label for="option0">0. ไม่ได้รับความรัก</label><br>

        <input type="checkbox" name="income[]" value="1" id="option1"
            {{ is_array($selectedIncome) && in_array('1', $selectedIncome) ? 'checked' : '' }}>
        <label for="option1">1. ดูเเลเอาใจใส่ เอื้ออาทร</label><br>

        <input type="checkbox" name="income[]" value="1" id="option2"
            {{ is_array($selectedIncome) && in_array('2', $selectedIncome) ? 'checked' : '' }}>
        <label for="option2">2. ส่งเสริม สนับสนุนทางจิตใจ กล่าวชื่นชม</label><br>

        <input type="checkbox" name="income[]" value="1" id="option3"
            {{ is_array($selectedIncome) && in_array('3', $selectedIncome) ? 'checked' : '' }}>
        <label for="option3">3. มีการสัมผัสทางกาย</label><br>

        <input type="checkbox" name="income[]" value="1" id="option4"
            {{ is_array($selectedIncome) && in_array('4', $selectedIncome) ? 'checked' : '' }}>
        <label for="option4">4. ทำกิจกรรมร่วมกันสม่ำเสมอ</label><br>
    </div>

    <div class="mb-4 mx-auto border-b-2 p-2 border-gray-500">
        @csrf
        <label for="">4. ความสามารถในการเเก้ไขปัญหาของสมาชิกในครอบครัว (ตอบได้มากกว่า 1 ข้อ) ข้อละ 1 คะแนน</label><br>

        <input type="checkbox" name="income[]" value="1" id="option0"
            {{ is_array($selectedIncome) && in_array('0', $selectedIncome) ? 'checked' : '' }}>
        <label for="option0">0. ไม่มีความสามารถในการเเก้ไขปัญหา</label><br>

        <input type="checkbox" name="income[]" value="1" id="option1"
            {{ is_array($selectedIncome) && in_array('1', $selectedIncome) ? 'checked' : '' }}>
        <label for="option1">1. เผชิญปัญหาร่วมกัน</label><br>

        <input type="checkbox" name="income[]" value="1" id="option2"
            {{ is_array($selectedIncome) && in_array('2', $selectedIncome) ? 'checked' : '' }}>
        <label for="option2">2. รับรู้ปัญหาและหาร่วมกัน</label><br>

        <input type="checkbox" name="income[]" value="1" id="option3"
            {{ is_array($selectedIncome) && in_array('3', $selectedIncome) ? 'checked' : '' }}>
        <label for="option3">3. รับผิดชอบปัญหาร่วมกัน</label><br>

        <input type="checkbox" name="income[]" value="1" id="option4"
            {{ is_array($selectedIncome) && in_array('4', $selectedIncome) ? 'checked' : '' }}>
        <label for="option4">4. ทำกิจกรรมร่วมกันอย่างสม่ำเสมอ</label><br>
    </div>

    <div class="mb-4 mx-auto border-b-2 p-2 border-gray-500">
        @csrf
        <label for="">5. ความสามารถของสมาชิกในครอบครัวต่อการจัดการพฤติกรรมที่ไม่เหมาะสมของผู้ป่วย (ตอบได้มากกว่า 1 ข้อ) ข้อละ 1 คะแนน</label><br>

        <input type="checkbox" name="income[]" value="1" id="option0"
            {{ is_array($selectedIncome) && in_array('0', $selectedIncome) ? 'checked' : '' }}>
        <label for="option0">0. ไม่มีความสามารถในการจัดการพฤติกรรม</label><br>

        <input type="checkbox" name="income[]" value="1" id="option1"
            {{ is_array($selectedIncome) && in_array('1', $selectedIncome) ? 'checked' : '' }}>
        <label for="option1">1. มีทักษะการควบคุมพฤติกรรม</label><br>

        <input type="checkbox" name="income[]" value="1" id="option2"
            {{ is_array($selectedIncome) && in_array('2', $selectedIncome) ? 'checked' : '' }}>
        <label for="option2">2. การฝึกให้เเรงเสริมที่เหมาะสม</label><br>

        <input type="checkbox" name="income[]" value="1" id="option3"
            {{ is_array($selectedIncome) && in_array('3', $selectedIncome) ? 'checked' : '' }}>
        <label for="option3">3. ฝึกระเบียบวินัย</label><br>

        <input type="checkbox" name="income[]" value="1" id="option4"
            {{ is_array($selectedIncome) && in_array('4', $selectedIncome) ? 'checked' : '' }}>
        <label for="option4">4. สมาชิกในครอบครัวรู้วิธีการดูเเลเมื่อผู้ป่วยมีปัญหา พฤติกรรม</label><br>

        <input type="checkbox" name="income[]" value="1" id="option5"
            {{ is_array($selectedIncome) && in_array('5', $selectedIncome) ? 'checked' : '' }}>
        <label for="option5">5. ยอมรับกฎ กติกาของครอบครัว</label><br>
    </div>


    <div class="mb-4 mx-auto border-b-2 p-2 border-gray-500">
        @csrf
        <label for="">6. การยอมรับเเละให้อภัยของสมาชิกในครอบครัวเมื่อผู่ป่วยทำผิดหรือมีพฤติกรรมไม่เหมาะสม (ตอบได้มากกว่า 1 ข้อ) ข้อละ 1 คะแนน</label><br>

        <input type="checkbox" name="income[]" value="1" id="option0"
            {{ is_array($selectedIncome) && in_array('0', $selectedIncome) ? 'checked' : '' }}>
        <label for="option0">0. ไม่มีการยอมรับหรือให้กำลังใจ</label><br>

        <input type="checkbox" name="income[]" value="1" id="option1"
            {{ is_array($selectedIncome) && in_array('1', $selectedIncome) ? 'checked' : '' }}>
        <label for="option1">1. ยอมรับความเเตกต่างส่วนบุคคล</label><br>

        <input type="checkbox" name="income[]" value="1" id="option2"
            {{ is_array($selectedIncome) && in_array('2', $selectedIncome) ? 'checked' : '' }}>
        <label for="option2">2. ให้อภัยเเละให้โอกาสเเก้ไข</label><br>

        <input type="checkbox" name="income[]" value="1" id="option3"
            {{ is_array($selectedIncome) && in_array('3', $selectedIncome) ? 'checked' : '' }}>
        <label for="option3">3. ยอมรับโดยไม่มีเงื่อนไข</label><br>

        <input type="checkbox" name="income[]" value="1" id="option4"
            {{ is_array($selectedIncome) && in_array('4', $selectedIncome) ? 'checked' : '' }}>
        <label for="option4">4. ให้กำลังใจ</label><br>
    </div>

    <div class="mb-4 mx-auto border-b-2 p-2 border-gray-500">
        @csrf
        <label for="">7. การสื่อสารระหว่างกันของสมาชิกในครอบครัว (ตอบได้มากกว่า 1 ข้อ) ข้อละ 1 คะแนน</label><br>

        <input type="checkbox" name="income[]" value="1" id="option0"
            {{ is_array($selectedIncome) && in_array('0', $selectedIncome) ? 'checked' : '' }}>
        <label for="option0">0. ไม่มีการสื่อสารใดๆ</label><br>

        <input type="checkbox" name="income[]" value="1" id="option1"
            {{ is_array($selectedIncome) && in_array('1', $selectedIncome) ? 'checked' : '' }}>
        <label for="option1">1. มีการรับรู้ความรู้สึก</label><br>

        <input type="checkbox" name="income[]" value="1" id="option2"
            {{ is_array($selectedIncome) && in_array('2', $selectedIncome) ? 'checked' : '' }}>
        <label for="option2">2. พูดคุย/เเสดงความรู้สึกและความต้องการได้อย่าง เปิดเผย</label><br>

        <input type="checkbox" name="income[]" value="1" id="option3"
            {{ is_array($selectedIncome) && in_array('3', $selectedIncome) ? 'checked' : '' }}>
        <label for="option3">3. มีอิศระในการเเสดงความคิดเห็น</label><br>

        <input type="checkbox" name="income[]" value="1" id="option4"
            {{ is_array($selectedIncome) && in_array('4', $selectedIncome) ? 'checked' : '' }}>
        <label for="option4">4. มีสัมผัส โอบกอดระหว่างสมาชิก</label><br>

        <input type="checkbox" name="income[]" value="1" id="option5"
            {{ is_array($selectedIncome) && in_array('5', $selectedIncome) ? 'checked' : '' }}>
        <label for="option5">5. มีการซื่อสารเพื่อลดการขัดเเย้ง</label><br>
    </div>


    <div class="mb-4 mx-auto border-b-2 p-2 border-gray-500">
        @csrf
        <label for="">8. การตระหนักเเละสามารถทำหน้าที่ตามบทบาทของตนอย่างเหมาะสมของสมาชิกในครอบครัว (ตอบได้มากกว่า 1 ข้อ) ข้อละ 1 คะแนน</label><br>

        <input type="checkbox" name="income[]" value="1" id="option0"
            {{ is_array($selectedIncome) && in_array('0', $selectedIncome) ? 'checked' : '' }}>
        <label for="option0">0. ไม่มีการทำหน้าที่ตามทบบาท</label><br>

        <input type="checkbox" name="income[]" value="1" id="option1"
            {{ is_array($selectedIncome) && in_array('1', $selectedIncome) ? 'checked' : '' }}>
        <label for="option1">1. ตระหนักรู้ มีความชัดเจนให้บทบาทของตน</label><br>

        <input type="checkbox" name="income[]" value="1" id="option2"
            {{ is_array($selectedIncome) && in_array('2', $selectedIncome) ? 'checked' : '' }}>
        <label for="option2">2. การเเบ่งเบาภาระ</label><br>

        <input type="checkbox" name="income[]" value="1" id="option3"
            {{ is_array($selectedIncome) && in_array('3', $selectedIncome) ? 'checked' : '' }}>
        <label for="option3">3. มีส่วนร่วมในกิจกรรมของครอบครัว</label><br>

        <input type="checkbox" name="income[]" value="1" id="option4"
            {{ is_array($selectedIncome) && in_array('4', $selectedIncome) ? 'checked' : '' }}>
        <label for="option4">4. การมอบหมายหน้าที่ในครอบครัว</label><br>

        <input type="checkbox" name="income[]" value="1" id="option5"
            {{ is_array($selectedIncome) && in_array('5', $selectedIncome) ? 'checked' : '' }}>
        <label for="option5">5. รับผิดชอบต่มบทบาท หน้าที่</label><br>
    </div>


    <div class="mb-4 mx-auto border-b-2 p-2 border-gray-500">
        @csrf
        <label for="">9. ความรู้ ความเข้าใจของสมาชิกในครอบครัวต่อการดูเเลผู้ป่วย (ตอบได้มากกว่า 1 ข้อ) ข้อละ 1 คะแนน</label><br>

        <input type="checkbox" name="income[]" value="1" id="option0"
            {{ is_array($selectedIncome) && in_array('0', $selectedIncome) ? 'checked' : '' }}>
        <label for="option0">0. ไม่มีความรู้ความเข้าใจในการดูเเล</label><br>

        <input type="checkbox" name="income[]" value="1" id="option1"
            {{ is_array($selectedIncome) && in_array('1', $selectedIncome) ? 'checked' : '' }}>
        <label for="option1">1. มีความรู้ ความเข้าใจเรื่องโรคที่ผู้ป่วยเป็น</label><br>

        <input type="checkbox" name="income[]" value="1" id="option2"
            {{ is_array($selectedIncome) && in_array('2', $selectedIncome) ? 'checked' : '' }}>
        <label for="option2">2. มีความรู้ ความเข้าใจในการดูเเลผู้ป่วย</label><br>

        <input type="checkbox" name="income[]" value="1" id="option3"
            {{ is_array($selectedIncome) && in_array('3', $selectedIncome) ? 'checked' : '' }}>
        <label for="option3">3. มีความสามารถในการดูเเลผู้ป่วย</label><br>

        <input type="checkbox" name="income[]" value="1" id="option4"
            {{ is_array($selectedIncome) && in_array('4', $selectedIncome) ? 'checked' : '' }}>
        <label for="option4">4. มีความสามารถในการสังเกตอาการเปลี่ยนเเปลง อาการกำเริบของผู้ป่วยได้</label><br>

        <input type="checkbox" name="income[]" value="1" id="option5"
            {{ is_array($selectedIncome) && in_array('5', $selectedIncome) ? 'checked' : '' }}>
        <label for="option5">5. มีความเข้าใจในสภาพจิตใจของผู้ป่วย</label><br>
    </div>


    <div class="mb-4 mx-auto border-b-2 p-2 border-gray-500">
        @csrf
        <label for="">10. การมีเครือข่ายทางสังคมในสมาชิกครอบครัว เพื่อขอรับการช่วยเหลือ (ตอบได้มากกว่า 1 ข้อ) ข้อละ 1 คะแนน</label><br>

        <input type="checkbox" name="income[]" value="1" id="option0"
            {{ is_array($selectedIncome) && in_array('0', $selectedIncome) ? 'checked' : '' }}>
        <label for="option0">0. ไม่มีเครือข่าย</label><br>

        <input type="checkbox" name="income[]" value="1" id="option1"
            {{ is_array($selectedIncome) && in_array('1', $selectedIncome) ? 'checked' : '' }}>
        <label for="option1">1. ญาติ (ที่ไม่ได้อยู่ในครอบครัว)</label><br>

        <input type="checkbox" name="income[]" value="1" id="option2"
            {{ is_array($selectedIncome) && in_array('2', $selectedIncome) ? 'checked' : '' }}>
        <label for="option2">2. เพื่อนบ้าน</label><br>

        <input type="checkbox" name="income[]" value="1" id="option3"
            {{ is_array($selectedIncome) && in_array('3', $selectedIncome) ? 'checked' : '' }}>
        <label for="option3">3. ผู้นำชุมชน / อาสาสมัครในชุมชน</label><br>

        <input type="checkbox" name="income[]" value="1" id="option4"
            {{ is_array($selectedIncome) && in_array('4', $selectedIncome) ? 'checked' : '' }}>
        <label for="option4">4. หน่วยงานภาครัฐ / เอกชน</label><br>
    </div>


    <button type="submit">ไปหน้าถัดไป</button>
</form>

@endsection
