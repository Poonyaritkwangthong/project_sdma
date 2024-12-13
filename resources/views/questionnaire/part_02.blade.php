<h1 class="text-3xl mb-[2rem] mt-[2rem]">ส่วนที่ 2 ข้อมูลการค้นหาข้อเท็จจริงเบื่องต้น</h1>
<h1 class="mb-[1rem]">2.1 การค้นหาข้อเท็จจริงเบื่องต้น</h1>
<div class="flex gap-6">
    <label class="pl-6" for="receive">2.1.1 การรับเรื่อง</label>
    <div class="grid grid-rows-2 grid-flow-col gap-4 items-center mb-[2rem]">
        <div>
            <input type="radio" id="self" name="receive" value="ผู้ป่วยมาด้วยตัวเอง" onclick="toggleFields('none')">
            <label for="self">ผู้ป่วยมาด้วยตัวเอง</label>
        </div>
        <div>
            <input type="radio" id="community" name="receive" value="ผู้ป่วยในชุมชน" onclick="toggleFields('none')">
            <label for="community">ผู้ป่วยในชุมชน</label>
        </div>
        <div class="flex items-center gap-2">
            <div>
                <input type="radio" id="internal" name="receive" value="หน่วยงานภายใน"
                    onclick="toggleFields('internal')">
                <label for="internal">หน่วยงานภายใน</label>
            </div>
            <div id="additionalFields" style="display: none;">
                <label for="receive_detail_internal">แผนก</label>
                <input type="text" id="receive_detail_internal" name="receive_detail_internal"
                    placeholder="โปรดระบุแผนก" disabled>
                <div>
                    <label for="admit_date">Admit วันที่</label>
                    <input type="date" id="admit_date" name="admit_date">
                </div>
            </div>
        </div>
        <div class="flex items-center">
            <div>
                <input type="radio" id="externalRadio" name="receive" value="หน่วยงานภายนอก"
                    onclick="toggleFields('external')">
                <label for="externalRadio">หน่วยงานภายนอก</label>
            </div>
            <div id="externalField" style="display: none;">
                <label for="receive_detail_external">ระบุ</label>
                <input type="text" id="receive_detail_external" name="receive_detail_external"
                    placeholder="โปรดระบุหน่วยงานภายนอก" disabled>
            </div>
        </div>
    </div>
</div>
<div>
    <label class="pl-6" for="">2.1.2 กลุ่มเป้าหมาย/ประเภทผู้ใช้บริการ (เลือกตอบ 1
        ข้อ)</label>
    <div class="grid grid-rows-5 grid-flow-col gap-[1rem] mt-[1rem] pl-16 mb-[1rem]">
        <div>
            <input type="radio" id="target_general" name="facts_target_group" value="ผู้ใช้บริการทั่วไป"
                onclick="hideAllFields2()">
            <label for="target_general">1.ผู้ใช้บริการทั่วไป</label>
        </div>
        <div class="flex gap-2 items-center">
            <input type="radio" id="target_general_patient" name="facts_target_group" value="ผู้ป่วยทั่วไป"
                onclick="toggleFields2(true, 'textField1')">
            <label for="target_general_patient">2.ผู้ป่วยทั่วไป</label>
            <div id="textField1" style="display: none;">
                <label for="facts_target_group_detail">ระบุโรค</label>
                <input type="text" name="facts_target_group_detail">
            </div>
        </div>
        <div class="flex gap-2 items-center">
            <input type="radio" id="target_general_patient" name="facts_target_group" value="ผู้ป่วยเรื้อรัง"
                onclick="toggleFields2(true, 'textField2')">
            <label for="target_general_patient">3.ผู้ป่วยเรื้อรัง</label>
            <div id="textField2" style="display: none;">
                <label for="facts_target_group_detail">ระบุโรค</label>
                <input type="text" name="facts_target_group_detail">
            </div>
        </div>
        <div class="flex gap-2 items-center">
            <input type="radio" id="target_general_patient" name="facts_target_group" value="OSCC"
                onclick="toggleFields2(true, 'textField3')">
            <label for="target_general_patient">4.OSCC</label>
            <div id="textField3" style="display: none;">
                <label for="facts_target_group_detail">ระบุประเภท</label>
                <input type="text" name="facts_target_group_detail">
            </div>
        </div>
        <div class="flex gap-2 items-center">
            <input type="radio" id="target_general_patient" name="facts_target_group" value="ผู้ติดสารเสพติด"
                onclick="toggleFields2(true, 'textField4')">
            <label for="target_general_patient">5.ผู้ติดสารเสพติด</label>
            <div id="textField4" style="display: none;">
                <label for="facts_target_group_detail">ระบุ</label>
                <input type="text" name="facts_target_group_detail">
            </div>
        </div>
        <div class="flex gap-2 items-center">
            <input type="radio" id="target_general_patient" name="facts_target_group" value="ผู้ป่วยจิตเวช"
                onclick="toggleFields2(true, 'textField5')">
            <label for="target_general_patient">6.ผู้ป่วยจิตเวช</label>
            <div id="textField5" style="display: none;">
                <label for="facts_target_group_detail">ระบุอาการ</label>
                <input type="text" name="facts_target_group_detail">
            </div>
        </div>
        <div class="flex gap-2 items-center">
            <input type="radio" id="target_general_patient" name="facts_target_group" value="ผู้พิการ"
                onclick="toggleFields2(true, 'textField6')">
            <label for="target_general_patient">7.ผู้พิการ</label>
            <div id="textField6" style="display: none;">
                <label for="facts_target_group_detail">ระบุประเภท</label>
                <input type="text" name="facts_target_group_detail">
            </div>
        </div>
        <div>
            <input type="radio" id="target_general" name="facts_target_group"
                value="ผู้ป่วยประสบอุบัติเหตุจากการทำงาน" onclick="hideAllFields2()">
            <label for="target_general">8.ผู้ป่วยประสบอุบัติเหตุจากการทำงาน</label>
        </div>
        <div>
            <input type="radio" id="target_general" name="facts_target_group" value="ผู้ป่วยติดเชื้อHIV/เอดส์"
                onclick="hideAllFields2()">
            <label for="target_general">9.ผู้ป่วยติดเชื้อHIV/เอดส์</label>
        </div>
        <div>
            <input type="radio" id="target_general" name="facts_target_group" value="ต่างด้าวหลบหนีเข้าเมือง"
                onclick="hideAllFields2()">
            <label for="target_general">10.ต่างด้าวหลบหนีเข้าเมือง</label>
        </div>
        <div>
            <input type="radio" id="target_general" name="facts_target_group" value="คนไทยไม่มีเลข 13 หลัก/ตกหล่น"
                onclick="hideAllFields2()">
            <label for="target_general">11.คนไทยไม่มีเลข 13 หลัก/ตกหล่น</label>
        </div>
        <div>
            <input type="radio" id="target_general" name="facts_target_group"
                value="ผู้ไม่มีหลักประกัน/ผู้มีปัญหาการใช้สิทธิ" onclick="hideAllFields2()">
            <label for="target_general">12.ผู้ไม่มีหลักประกัน/ผู้มีปัญหาการใช้สิทธิ</label>
        </div>
        <div>
            <input type="radio" id="target_general" name="facts_target_group" value="สิทธิ์การรักษาไม่คุ้มครอง"
                onclick="hideAllFields2()">
            <label for="target_general">13.สิทธิ์การรักษาไม่คุ้มครอง</label>
        </div>
        <div>
            <input type="radio" id="target_general" name="facts_target_group" value="ผู้ป่วยอุบัติเหตุจากรถ"
                onclick="hideAllFields2()">
            <label for="target_general">14.ผู้ป่วยอุบัติเหตุจากรถ</label>
        </div>
        <div>
            <input type="radio" id="target_general" name="facts_target_group"
                value="อื่นๆระบุ/กลุ่มเสี่ยงต่อการร้องเรียน" onclick="hideAllFields2()">
            <label for="target_general">15.อื่นๆระบุ/กลุ่มเสี่ยงต่อการร้องเรียน</label>
        </div>
        <!-- ส่วนอื่นๆ ยังคงเหมือนเดิม -->
    </div>

    <div class="flex justify-between pl-16 mb-[2rem] mt-[2rem]">
        <div>
            <label for="medical_expenses">ค่ารักษาพยาบาล</label>
            <input name="medical_expenses" type="text">
            <p>บาท</p>
        </div>
        <div>
            <label for="can_pay">ชำระเงินได้</label>
            <input name="can_pay" type="text">
            <p>บาท</p>
        </div>
        <div>
            <label for="helping_pay">อนุเคราะห์</label>
            <input name="helping_pay" type="text">
            <p>บาท</p>
        </div>
    </div>
</div>
<div>
    <label class="pl-6" for="informant">2.1.3 ผู้ให้ข้อมูล</label>
    <div class="flex gap-4 items-center mt-[1rem] mb-[2rem] pl-16">
        <div>
            <input type="radio" value="ผู้ใช้บริการ" name="informant" id="informant1" onclick="hideAllFields3()">
            <label for="informant">1. ผู้ใช้บริการ</label>
        </div>
        <div class="flex gap-2 items-center">
            <input type="radio" value="ผู้อื่น" name="informant" id="informant2" onclick="toggleFields3(true)">
            <label for="informant">2. ผู้อื่น</label>
            <div id="on-3" style="display: none;">
                <label for="other_name">ระบุชื่อ</label>
                <input name="other_name" type="text" id="other_name">
                <label for="relation">เกี่ยวข้องเป็น</label>
                <input name="relation" type="text" id="relation">
            </div>
        </div>
    </div>
</div>
<div class="pl-6 mb-[2rem]">
    <label for="address_informant">2.1.4 ที่อยู่ผู้ให้ข้อมูล/ที่ติดต่อได้</label>
    <input type="text" name="address_informant" id="">
    <label for="informant_phone_num">หมายเลขโทรศัพท์</label>
    <input type="text" name="informant_phone_num" id="">
</div>
<div class="flex justify-between items-center pl-6 mb-[2rem]">
    <label for="">2.1.5 รายได้เฉลี่ยต่อเดือน</label>
    <div>
        <label for="income">จำนวน</label>
        <input type="text" name="income" id="">
        <p>บาท</p>
    </div>
    <div class="flex gap-2 items-center">
        <label for="source_of_income">เเหล่งที่มาของรายได้</label>
        <div>
            <input type="radio" value="จากการทำงาน" name="source_of_income" id=""
                onclick="hideAllFields4()">
            <label for="source_of_income">จากการทำงาน</label>
        </div>
        <div class="flex gap-2 items-center">
            <input type="radio" value="จากผู้อื่น" name="source_of_income" id=""
                onclick="toggleFields4(true)">
            <label for="source_of_income">จากผู้อื่น</label>
            <div id="on-4" style="display: none;">
                <label for="source_of_income_detail">ระบุ</label>
                <input type="text" value="" name="source_of_income_detail" id="">
            </div>
        </div>
    </div>
</div>
<div>
    <label class="pl-6" for="having_debt">2.1.6 การมีหนี้สิน</label><br>
    <div class="flex gap-8 items-center pl-6">
        <div class="flex items-center gap-4">
            <input type="radio" value="ไม่มี" name="having_debt" id="" onclick="hideAllFields5()">
            <label for="having_debt">ไม่มี</label>
            <div class="flex items-center gap-2">
                <input type="radio" value="มี" name="having_debt" id=""
                    onclick="toggleFields5(true)">
                <label for="having_debt">มี</label>
                <div class="flex items-center gap-2" id="on-5" style="display: none">
                    <label for="total_debt">จำนวน</label>
                    <input type="text" name="total_debt" id="">
                    <p>บาท</p>
                </div>
            </div>
        </div>
        <div class="flex gap-4">
            <label for="source_of_debt">เเหล่งหนี้สิน</label>
            <div>
                <input type="radio" value="ในระบบ" name="source_of_debt" id="">
                <label for="source_of_debt">ในระบบ</label>
            </div>
            <div>
                <input type="radio" value="นอกระบบ" name="source_of_debt" id="">
                <label for="source_of_debt">นอกระบบ</label>
            </div>
        </div>
    </div>
</div>
