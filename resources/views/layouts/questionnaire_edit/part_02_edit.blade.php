<h1 class="text-3xl text-[#4846aa] mb-[2rem] mt-[2rem]">ส่วนที่ 2 ข้อมูลการค้นหาข้อเท็จจริงเบื่องต้น</h1>
<h1 class="mb-[1rem] text-[#525456] text-lg">2.1 การค้นหาข้อเท็จจริงเบื่องต้น</h1>
<label class="pl-6 text-[#525456] text-lg" for="receive">2.1.1 การรับเรื่อง</label>
<div class=" flex gap-4">
    <div class="grid grid-rows-2 grid-flow-col gap-[1rem] items-center mb-[2rem] mt-[1rem] pl-16">
        <div>
            <input type="radio" id="self" name="receive" value="ผู้ป่วยมาด้วยตัวเอง" onclick="toggleFields('none')"
                {{ $general_information->finding_facts->receive == 'ผู้ป่วยมาด้วยตัวเอง' ? 'checked' : '' }}>
            <label class="text-[#525456] text-lg" for="self">ผู้ป่วยมาด้วยตัวเอง</label>
        </div>
        <div>
            <input type="radio" id="community" name="receive" value="ผู้ป่วยในชุมชน"
                onclick="toggleFields('none')"{{ $general_information->finding_facts->receive == 'ผู้ป่วยในชุมชน' ? 'checked' : '' }}>
            <label class="text-[#525456] text-lg" for="community">ผู้ป่วยในชุมชน</label>
        </div>
        <div class="flex gap-6 items-center">
            <div>
                <input type="radio" id="internal" name="receive" value="หน่วยงานภายใน"
                    onclick="toggleFields('internal')"
                    {{ $general_information->finding_facts->receive == 'หน่วยงานภายใน' ? 'checked' : '' }}>
                <label class="text-[#525456] text-lg" for="internal">หน่วยงานภายใน</label>
            </div>
            <div id="additionalFields" style="display: none;">
                <div class="flex items-center gap-2">
                    <div>
                        <label class="text-[#525456] text-lg" for="receive_detail_internal">แผนก</label>
                        <input type="text"
                            class="text-[#525456] text-lg bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg"
                            id="receive_detail_internal"
                            value="{{ $general_information->finding_facts->receive_detail }}" name="receive_detail"
                            placeholder="โปรดระบุแผนก" disabled>
                    </div>
                    <div>
                        <label class="text-[#525456] text-lg" for="admit_date">Admit วันที่</label>
                        <input class="text-[#525456] text-lg bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg"
                            type="date" id="admit_date" value="{{ $general_information->finding_facts->admit_date }}"
                            name="admit_date">
                    </div>
                </div>
            </div>
        </div>
        <div class="flex gap-6 items-center">
            <div>
                <input type="radio" id="externalRadio" name="receive" value="หน่วยงานภายนอก"
                    onclick="toggleFields('external')"
                    {{ $general_information->finding_facts->receive == 'หน่วยงานภายนอก' ? 'checked' : '' }}>
                <label class="text-[#525456] text-lg" for="externalRadio">หน่วยงานภายนอก</label>
            </div>
            <div id="externalField" style="display: none;">
                <label class="text-[#525456] text-lg" for="receive_detail_external">ระบุ</label>
                <input class="text-[#525456] text-lg bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg" type="text"
                    id="receive_detail_external" value="{{ $general_information->finding_facts->receive_detail }}"
                    name="receive_detail" placeholder="โปรดระบุหน่วยงานภายนอก" disabled>
            </div>
        </div>
    </div>
</div>
<div>
    <label class="pl-6 text-[#525456] text-lg" for="">2.1.2 กลุ่มเป้าหมาย/ประเภทผู้ใช้บริการ (เลือกตอบ 1
        ข้อ)</label>
    <div class="grid grid-rows-5 grid-flow-col gap-[1rem] mt-[1rem] pl-16 mb-[1rem]">
        <div>
            <input type="radio" id="target_general" name="facts_target_group" value="ผู้ใช้บริการทั่วไป"
                onclick="hideAllFields2()"{{ $general_information->finding_facts->facts_target_group == 'ผู้ใช้บริการทั่วไป' ? 'checked' : '' }}>
            <label class="text-[#525456] text-lg" for="target_general">1.ผู้ใช้บริการทั่วไป</label>
        </div>
        <div class="flex gap-2 items-center">
            <input type="radio" id="target_general_patient" name="facts_target_group" value="ผู้ป่วยทั่วไป"
                onclick="toggleFields2(true, 'textField1')"
                {{ $general_information->finding_facts->facts_target_group == 'ผู้ป่วยทั่วไป' ? 'checked' : '' }}>
            <label class="text-[#525456] text-lg" for="target_general_patient">2.ผู้ป่วยทั่วไป</label>
            <div id="textField1" style="display: none;">
                <label class="text-[#525456] text-lg" for="facts_target_group_detail">ระบุโรค</label>
                <input class="text-[#525456] text-lg bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg" type="text"
                    name="facts_target_group_detail_temp" oninput="updateHiddenField()"
                    value="{{ $general_information->finding_facts->facts_target_group_detail }}">
            </div>
        </div>
        <div class="flex gap-2 items-center">
            <input type="radio" id="target_general_patient" name="facts_target_group" value="ผู้ป่วยเรื้อรัง"
                onclick="toggleFields2(true, 'textField2')"
                {{ $general_information->finding_facts->facts_target_group == 'ผู้ป่วยเรื้อรัง' ? 'checked' : '' }}>
            <label class="text-[#525456] text-lg" for="target_general_patient">3.ผู้ป่วยเรื้อรัง</label>
            <div id="textField2" style="display: none;">
                <label class="text-[#525456] text-lg" for="facts_target_group_detail">ระบุโรค</label>
                <input class="text-[#525456] text-lg bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg" type="text"
                    name="facts_target_group_detail_temp" oninput="updateHiddenField()"
                    value="{{ $general_information->finding_facts->facts_target_group_detail }}">
            </div>
        </div>
        <div class="flex gap-2 items-center">
            <input type="radio" id="target_general_patient" name="facts_target_group" value="OSCC"
                onclick="toggleFields2(true, 'textField3')"
                {{ $general_information->finding_facts->facts_target_group == 'OSCC' ? 'checked' : '' }}>
            <label class="text-[#525456] text-lg" for="target_general_patient">4.OSCC</label>
            <div id="textField3" style="display: none;">
                <label class="text-[#525456] text-lg" for="facts_target_group_detail">ระบุประเภท</label>
                <input class="text-[#525456] text-lg bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg" type="text"
                    name="facts_target_group_detail_temp" oninput="updateHiddenField()"
                    value="{{ $general_information->finding_facts->facts_target_group_detail }}">
            </div>
        </div>
        <div class="flex gap-2 items-center">
            <input type="radio" id="target_general_patient" name="facts_target_group" value="ผู้ติดสารเสพติด"
                onclick="toggleFields2(true, 'textField4')"
                {{ $general_information->finding_facts->facts_target_group == 'ผู้ติดสารเสพติด' ? 'checked' : '' }}>
            <label class="text-[#525456] text-lg" for="target_general_patient">5.ผู้ติดสารเสพติด</label>
            <div id="textField4" style="display: none;">
                <label class="text-[#525456] text-lg" for="facts_target_group_detail">ระบุ</label>
                <input class="text-[#525456] text-lg bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg" type="text"
                    name="facts_target_group_detail_temp" oninput="updateHiddenField()"
                    value="{{ $general_information->finding_facts->facts_target_group_detail }}">
            </div>
        </div>
        <div class="flex gap-2 items-center">
            <input type="radio" id="target_general_patient" name="facts_target_group" value="ผู้ป่วยจิตเวช"
                onclick="toggleFields2(true, 'textField5')"
                {{ $general_information->finding_facts->facts_target_group == 'ผู้ป่วยจิตเวช' ? 'checked' : '' }}>
            <label class="text-[#525456] text-lg" for="target_general_patient">6.ผู้ป่วยจิตเวช</label>
            <div id="textField5" style="display: none;">
                <label class="text-[#525456] text-lg" for="facts_target_group_detail">ระบุอาการ</label>
                <input class="text-[#525456] text-lg bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg" type="text"
                    name="facts_target_group_detail_temp" oninput="updateHiddenField()"
                    value="{{ $general_information->finding_facts->facts_target_group_detail }}">
            </div>
        </div>
        <div class="flex gap-2 items-center">
            <input type="radio" id="target_general_patient" name="facts_target_group" value="ผู้พิการ"
                onclick="toggleFields2(true, 'textField6')"
                {{ $general_information->finding_facts->facts_target_group == 'ผู้พิการ' ? 'checked' : '' }}>
            <label class="text-[#525456] text-lg" for="target_general_patient">7.ผู้พิการ</label>
            <div id="textField6" style="display: none;">
                <label class="text-[#525456] text-lg" for="facts_target_group_detail">ระบุประเภท</label>
                <input class="text-[#525456] text-lg bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg" type="text"
                    name="facts_target_group_detail_temp" oninput="updateHiddenField()"
                    value="{{ $general_information->finding_facts->facts_target_group_detail }}">
            </div>
        </div>
        <!-- เพิ่มตัวเลือกอื่นๆ -->
        <!-- Hidden Field -->
        <input type="hidden" name="facts_target_group_detail" id="hiddenField">
        <div>
            <input type="radio" id="target_general" name="facts_target_group"
                value="ผู้ป่วยประสบอุบัติเหตุจากการทำงาน" onclick="hideAllFields2()"
                {{ $general_information->finding_facts->facts_target_group == 'ผู้ป่วยประสบอุบัติเหตุจากการทำงาน' ? 'checked' : '' }}>
            <label class="text-[#525456] text-lg" for="target_general">8.ผู้ป่วยประสบอุบัติเหตุจากการทำงาน</label>
        </div>
        <div>
            <input type="radio" id="target_general" name="facts_target_group" value="ผู้ป่วยติดเชื้อHIV/เอดส์"
                onclick="hideAllFields2()"
                {{ $general_information->finding_facts->facts_target_group == 'ผู้ป่วยติดเชื้อHIV/เอดส์' ? 'checked' : '' }}>
            <label class="text-[#525456] text-lg" for="target_general">9.ผู้ป่วยติดเชื้อHIV/เอดส์</label>
        </div>
        <div>
            <input type="radio" id="target_general" name="facts_target_group" value="ต่างด้าวหลบหนีเข้าเมือง"
                onclick="hideAllFields2()"
                {{ $general_information->finding_facts->facts_target_group == 'ต่างด้าวหลบหนีเข้าเมือง' ? 'checked' : '' }}>
            <label class="text-[#525456] text-lg" for="target_general">10.ต่างด้าวหลบหนีเข้าเมือง</label>
        </div>
        <div>
            <input type="radio" id="target_general" name="facts_target_group" value="คนไทยไม่มีเลข 13 หลัก/ตกหล่น"
                onclick="hideAllFields2()"
                {{ $general_information->finding_facts->facts_target_group == 'คนไทยไม่มีเลข 13 หลัก/ตกหล่น' ? 'checked' : '' }}>
            <label class="text-[#525456] text-lg" for="target_general">11.คนไทยไม่มีเลข 13 หลัก/ตกหล่น</label>
        </div>
        <div>
            <input type="radio" id="target_general" name="facts_target_group"
                value="ผู้ไม่มีหลักประกัน/ผู้มีปัญหาการใช้สิทธิ" onclick="hideAllFields2()"
                {{ $general_information->finding_facts->facts_target_group == 'ผู้ไม่มีหลักประกัน/ผู้มีปัญหาการใช้สิทธิ' ? 'checked' : '' }}>
            <label class="text-[#525456] text-lg"
                for="target_general">12.ผู้ไม่มีหลักประกัน/ผู้มีปัญหาการใช้สิทธิ</label>
        </div>
        <div>
            <input type="radio" id="target_general" name="facts_target_group" value="สิทธิ์การรักษาไม่คุ้มครอง"
                onclick="hideAllFields2()"
                {{ $general_information->finding_facts->facts_target_group == 'สิทธิ์การรักษาไม่คุ้มครอง' ? 'checked' : '' }}>
            <label class="text-[#525456] text-lg" for="target_general">13.สิทธิ์การรักษาไม่คุ้มครอง</label>
        </div>
        <div>
            <input type="radio" id="target_general" name="facts_target_group" value="ผู้ป่วยอุบัติเหตุจากรถ"
                onclick="hideAllFields2()"
                {{ $general_information->finding_facts->facts_target_group == 'ผู้ป่วยอุบัติเหตุจากรถ' ? 'checked' : '' }}>
            <label class="text-[#525456] text-lg" for="target_general">14.ผู้ป่วยอุบัติเหตุจากรถ</label>
        </div>
        <div>
            <input type="radio" id="target_general" name="facts_target_group"
                value="อื่นๆระบุ/กลุ่มเสี่ยงต่อการร้องเรียน" onclick="hideAllFields2()"
                {{ $general_information->finding_facts->facts_target_group == 'อื่นๆระบุ/กลุ่มเสี่ยงต่อการร้องเรียน' ? 'checked' : '' }}>
            <label class="text-[#525456] text-lg" for="target_general">15.อื่นๆระบุ/กลุ่มเสี่ยงต่อการร้องเรียน</label>
        </div>
        <!-- ส่วนอื่นๆ ยังคงเหมือนเดิม -->
    </div>

    <div class="flex gap-[6rem] pl-16 mb-[2rem] mt-[2rem]">
        <div class="flex gap-2">
            <label class="text-[#525456] text-lg" for="medical_expenses">ค่ารักษาพยาบาล</label>
            <input class="text-[#525456] text-lg bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg" name="medical_expenses"
                value="{{ $general_information->finding_facts->medical_expenses }}" type="text">
            <p class="text-[#525456] text-lg">บาท</p>
        </div>
        <div class="flex gap-2">
            <label class="text-[#525456] text-lg" for="can_pay">ชำระเงินได้</label>
            <input class="text-[#525456] text-lg bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg" name="can_pay"
                value="{{ $general_information->finding_facts->can_pay }}" type="text">
            <p class="text-[#525456] text-lg">บาท</p>
        </div>
        <div class="flex gap-2">
            <label class="text-[#525456] text-lg" for="helping_pay">อนุเคราะห์</label>
            <input class="text-[#525456] text-lg bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg" name="helping_pay"
                value="{{ $general_information->finding_facts->helping_pay }}" type="text">
            <p class="text-[#525456] text-lg">บาท</p>
        </div>
    </div>
</div>
<div>
    <label class="pl-6 text-[#525456] text-lg" for="informant">2.1.3 ผู้ให้ข้อมูล</label>
    <div class="flex gap-4 items-center mt-[1rem] mb-[2rem] pl-16">
        <div>
            <input type="radio" value="ผู้ใช้บริการ" name="informant" id="informant1" onclick="hideAllFields3()"
                {{ $general_information->finding_facts->informant == 'ผู้ใช้บริการ' ? 'checked' : '' }}>
            <label class="text-[#525456] text-lg" for="informant">1. ผู้ใช้บริการ</label>
        </div>
        <div class="flex gap-2 items-center">
            <div>
                <input type="radio" value="ผู้อื่น" name="informant" id="informant2"
                    onclick="toggleFields3(true)"
                    {{ $general_information->finding_facts->informant == 'ผู้อื่น' ? 'checked' : '' }}>
                <label class="text-[#525456] text-lg" for="informant">2. ผู้อื่น</label>
            </div>
            <div id="on-3" style="display: none;">
                <label class="text-[#525456] text-lg" for="other_name">ระบุชื่อ</label>
                <input class="text-[#525456] text-lg bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg" name="other_name"
                    value="{{ $general_information->finding_facts->other_name }}" type="text" id="other_name">
                <label class="text-[#525456] text-lg" for="relation">เกี่ยวข้องเป็น</label>
                <input class="text-[#525456] text-lg bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg" name="relation"
                    value="{{ $general_information->finding_facts->relation }}" type="text" id="relation">
            </div>
        </div>
    </div>
</div>
<div class="pl-6 mb-[2rem] flex gap-4 items-center">
    <div>
        <label class="text-[#525456] text-lg" for="address_informant">2.1.4 ที่อยู่ผู้ให้ข้อมูล/ที่ติดต่อได้</label>
        <input class="text-[#525456] text-lg bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg w-[44rem]" type="text"
            value="{{ $general_information->finding_facts->address_informant }}" name="address_informant"
            id="">
    </div>
    <div>
        <label class="text-[#525456] text-lg" for="informant_phone_num">หมายเลขโทรศัพท์</label>
        <input class="text-[#525456] text-lg bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg" type="text"
            value="{{ $general_information->finding_facts->informant_phone_num }}" name="informant_phone_num"
            id="">
    </div>
</div>
<div class="pl-6 mb-[2rem]">
    <label class="text-[#525456] text-lg" for="">2.1.5 รายได้เฉลี่ยต่อเดือน</label>

    <div class="flex items-center gap-2 mt-[1rem] pl-9">
        <label class="text-[#525456] text-lg" for="income">จำนวน</label>
        <input class="text-[#525456] text-lg bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg" type="text"
            value="{{ $general_information->finding_facts->income }}" name="income" id="">
        <p class="text-[#525456] text-lg">บาท</p>
    </div>
    <div class="mt-[1rem]">
        <label class="text-[#525456] text-lg pl-9" for="source_of_income">เเหล่งที่มาของรายได้</label>
        <div class="pl-[6rem]">
            <input type="radio" value="จากการทำงาน" name="source_of_income" id="source_of_income_work"
                onclick="hideAllFields4()"
                {{ $general_information->finding_facts->source_of_income == 'จากการทำงาน' ? 'checked' : '' }}>
            <label class="text-[#525456] text-lg" for="source_of_income_work">จากการทำงาน</label>
        </div>
        <div class="flex gap-2 items-center pl-[6rem]">
            <input type="radio" value="จากผู้อื่น" name="source_of_income" id="source_of_income_other"
                onclick="toggleFields4(true)"
                {{ $general_information->finding_facts->source_of_income == 'จากผู้อื่น' ? 'checked' : '' }}>
            <label class="text-[#525456] text-lg" for="source_of_income_other">จากผู้อื่น</label>
            <div id="on-4" style="display: none;">
                <label class="text-[#525456] text-lg" for="source_of_income_detail">ระบุ</label>
                <input class="text-[#525456] text-lg bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg" type="text"
                    value="{{ $general_information->finding_facts->source_of_income_detail }}"
                    name="source_of_income_detail" id="source_of_income_detail">
            </div>
        </div>
    </div>
</div>
<div>
    <label class="pl-6 text-[#525456] text-lg" for="having_debt">2.1.6 การมีหนี้สิน</label><br>
    <div class="flex gap-8 items-center pl-6">
        <div class="flex items-center gap-4 pl-10 mt-[1rem]">
            <div>
                <input type="radio" value="ไม่มี" name="having_debt" id="" onclick="hideAllFields5()"
                    {{ $general_information->finding_facts->having_debt == 'ไม่มี' ? 'checked' : '' }}>
                <label class="text-[#525456] text-lg" for="having_debt">ไม่มี</label>
            </div>
            <div class="flex gap-2 items-center">
                <div>
                    <input type="radio" value="มี" name="having_debt" id="having_debt_yes"
                        onclick="toggleFields5(true)"
                        {{ $general_information->finding_facts->having_debt == 'มี' ? 'checked' : '' }}>
                    <label class="text-[#525456] text-lg" for="having_debt_yes">มี</label>
                </div>
                <div id="on-5" style="display: none">
                    <div class="flex gap-2 items-center">
                        <div class="flex items-center gap-2">
                            <label class="text-[#525456] text-lg" for="total_debt">จำนวน</label>
                            <input class="text-[#525456] text-lg bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg"
                                value="{{ $general_information->finding_facts->total_debt }}" type="text"
                                name="total_debt" id="total_debt">
                            <p class="text-[#525456] text-lg">บาท</p>
                        </div>
                        <div class="flex items-center gap-4">
                            <label class="text-[#525456] text-lg" for="source_of_debt">เเหล่งหนี้สิน</label>
                            <div>
                                <input type="radio" value="ในระบบ" name="source_of_debt" id="debt_in_system"
                                    {{ $general_information->finding_facts->source_of_debt == 'ในระบบ' ? 'checked' : '' }}>
                                <label class="text-[#525456] text-lg" for="debt_in_system">ในระบบ</label>
                            </div>
                            <div>
                                <input type="radio" value="นอกระบบ" name="source_of_debt" id="debt_out_system"
                                    {{ $general_information->finding_facts->source_of_debt == 'นอกระบบ' ? 'checked' : '' }}>
                                <label class="text-[#525456] text-lg" for="debt_out_system">นอกระบบ</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
