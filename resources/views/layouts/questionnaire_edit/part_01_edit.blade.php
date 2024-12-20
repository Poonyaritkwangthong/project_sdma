<div class="border-b">
    <div class="flex justify-between items-center mb-[2rem]">
        <h1 class="text-3xl text-[#4846aa]">ส่วนที่ 1 ข้อมูลทั่วไป</h1>
        <div class="">
            <label class="text-lg text-[#525456]" for="target_group">กลุ่มเป้าหมาย</label>
            <select name="target_group" class="text-center text-[#525456] p-1 rounded-lg bg-[#f4f4fc] border-[#a3a0df]"
                id="target_group">
                <option value="--ยังไม่ได้เลือก--"
                    {{ $general_information->target_group == '--ยังไม่ได้เลือก--' ? 'selected' : '' }}>
                    --ยังไม่ได้เลือก--</option>
                <option value="ผู้ใช้บริการทั่วไป"
                    {{ $general_information->target_group == 'ผู้ใช้บริการทั่วไป' ? 'selected' : '' }}>
                    ผู้ใช้บริการทั่วไป</option>
                <option value="ผู้ป่วยทั่วไป"
                    {{ $general_information->target_group == 'ผู้ป่วยทั่วไป' ? 'selected' : '' }}>ผู้ป่วยทั่วไป</option>
                <option value="ผู้ป่วยโรคเรื้อรัง"
                    {{ $general_information->target_group == 'ผู้ป่วยโรคเรื้อรัง' ? 'selected' : '' }}>
                    ผู้ป่วยโรคเรื้อรัง</option>
                <option value="OSCC" {{ $general_information->target_group == 'OSCC' ? 'selected' : '' }}>OSCC
                </option>
                <option value="ผู้ติดสารเสพติด"
                    {{ $general_information->target_group == 'ผู้ติดสารเสพติด' ? 'selected' : '' }}>ผู้ติดสารเสพติด
                </option>
                <option value="ผู้ป่วยจิตเวช"
                    {{ $general_information->target_group == 'ผู้ป่วยจิตเวช' ? 'selected' : '' }}>ผู้ป่วยจิตเวช</option>
                <option value="ผู้พิการ" {{ $general_information->target_group == 'ผู้พิการ' ? 'selected' : '' }}>
                    ผู้พิการ</option>
                <option value="ผู้ป่วยประสบอุบัติเหตุจากการทำงาน"
                    {{ $general_information->target_group == 'ผู้ป่วยประสบอุบัติเหตุจากการทำงาน' ? 'selected' : '' }}>
                    ผู้ป่วยประสบอุบัติเหตุจากการทำงาน</option>
                <option value="ผู้ป่วยติดเชื้อ HIV/เอดส์"
                    {{ $general_information->target_group == 'ผู้ป่วยติดเชื้อ HIV/เอดส์' ? 'selected' : '' }}>
                    ผู้ป่วยติดเชื้อ HIV/เอดส์</option>
                <option value="ต่างด้าวหลบหนีเข้าเมือง"
                    {{ $general_information->target_group == 'ต่างด้าวหลบหนีเข้าเมือง' ? 'selected' : '' }}>
                    ต่างด้าวหลบหนีเข้าเมือง</option>
                <option value="คนไทยไม่มีเลข13หลัก/ตกหล่น"
                    {{ $general_information->target_group == 'คนไทยไม่มีเลข13หลัก/ตกหล่น' ? 'selected' : '' }}>
                    คนไทยไม่มีเลข13หลัก/ตกหล่น</option>
                <option value="ผู้ไม่มีหลักประกัน/ผู้มีปัญหาการใช้สิทธิ"
                    {{ $general_information->target_group == 'ผู้ไม่มีหลักประกัน/ผู้มีปัญหาการใช้สิทธิ' ? 'selected' : '' }}>
                    ผู้ไม่มีหลักประกัน/ผู้มีปัญหาการใช้สิทธิ</option>
                <option value="สิทธิ์การรักษาไม่คุ้มครอง"
                    {{ $general_information->target_group == 'สิทธิ์การรักษาไม่คุ้มครอง' ? 'selected' : '' }}>
                    สิทธิ์การรักษาไม่คุ้มครอง</option>
                <option value="ผู้ป่วยอุบัติเหตุจากรถ"
                    {{ $general_information->target_group == 'ผู้ป่วยอุบัติเหตุจากรถ' ? 'selected' : '' }}>
                    ผู้ป่วยอุบัติเหตุจากรถ</option>
                <option value="อื่นๆระบุ/กลุ่มเสี่ยงต่อการร้องเรียน"
                    {{ $general_information->target_group == 'อื่นๆระบุ/กลุ่มเสี่ยงต่อการร้องเรียน' ? 'selected' : '' }}>
                    อื่นๆระบุ/กลุ่มเสี่ยงต่อการร้องเรียน</option>
            </select>
        </div>
    </div>
    <div class="flex items-center mb-[2rem] ">
        <div class="">
            <label class="text-[#525456] text-lg" for="case_date">วันที่รับ case ว/ด/ป</label>
            <input class="bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg text-[#525456]  w-[11.6rem]" name="case_date"
                type="date" value="{{ $general_information->case_date }}">
        </div>
        <div class="ml-[4.5rem]">
            <label class="text-[#525456] text-lg" for="hn">HN</label>
            <input class="bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg text-[#525456]" name="hn" id="hn"
                value="{{ $general_information->hn }}" type="text">
        </div>
        <div class="ml-[6.2rem]">
            <label class="text-[#525456] text-lg" for="an">AN</label>
            <input class="bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg text-[#525456]" name="an" id="an"
                value="{{ $general_information->an }}" type="text">
        </div>
        <div class="ml-[3.5rem]">
            <label class="text-[#525456] text-lg" for="sn">เลข สค (SN)</label>
            <input class="bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg text-[#525456] w-[14rem]" name="sn"
                value="{{ $general_information->sn }}" id="sn" type="text">
        </div>
    </div>
    <div class="flex items-center mb-[2rem]">
        <div>
            <label class="text-[#525456] text-lg" for="prefix">คำนำหน้าชื่อ</label><br>
            <select class="bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg text-[#525456] w-[10rem] text-center"
                name="prefix">
                <option value="เด็กชาย" {{ $general_information->prefix == 'เด็กชาย' ? 'selected' : '' }}>เด็กชาย
                </option>
                <option value="เด็กหญิง" {{ $general_information->prefix == 'เด็กหญิง' ? 'selected' : '' }}>เด็กหญิง
                </option>
                <option value="นาย" {{ $general_information->prefix == 'นาย' ? 'selected' : '' }}>นาย</option>
                <option value="นาง" {{ $general_information->prefix == 'นาง' ? 'selected' : '' }}>นาง</option>
                <option value="น.ส." {{ $general_information->prefix == 'น.ส.' ? 'selected' : '' }}>นางสาว</option>
            </select>
        </div>
        <div class="ml-[4rem]">
            <label class="text-[#525456] text-lg " for="full_name">ชื่อ-สกุล</label> <br>
            <input class="bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg text-[#525456] w-[24.7rem]" name="full_name"
                id="full_name" value="{{ $general_information->full_name }}" type="text">
        </div>
        <div class="ml-[6.2rem]">
            <label class="text-[#525456] text-lg" for="id_card_num">เลขบัตรประชาชน</label> <br>
            <input class="bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg text-[#525456] w-[13.8rem]" name="id_card_num"
                id="id_card_num" value="{{ $general_information->id_card_num }}" type="text">
        </div>
        <div class="ml-[3.5rem]">
            <label class="text-[#525456] text-lg" for="birth_date">ว/ด/ป เกิด</label> <br>
            <input class="bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg text-[#525456]" name="birth_date" type="date"
                value="{{ $general_information->birth_date }}">
        </div>
        <div class="ml-[3rem]">
            <label class="text-[#525456] text-lg" for="age">อายุ</label>
            <div class="flex items-center gap-2">
                <input class="bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg text-[#525456] w-[6rem]" name="age"
                    id="age" value="{{ $general_information->age }}" type="text">
                <p class="text-[#525456] text-lg">ปี</p>
            </div>
        </div>
    </div>
    <div class="flex items-center gap-2 mb-[2rem]">

        <div class="flex items-center gap-2">
            <label class="text-[#525456] text-lg" for="marital_status">สถานภาพสมรส</label>
            <input class="bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg text-[#525456] w-[13rem]" name="marital_status"
                value="{{ $general_information->marital_status }}" type="text">
        </div>

        <div class="flex items-center gap-2 ml-[1.2rem]">
            <label class="text-[#525456] text-lg" for="nationality">สัญชาติ</label>
            <input class="bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg text-[#525456] w-[12.4rem]" name="nationality"
                id="nationality" value="{{ $general_information->nationality }}" type="text">
        </div>
        <div class="flex items-center gap-2 ml-[5.7rem]">
            <label class="text-[#525456] text-lg" for="ethnicity">เชื้อชาติ</label>
            <input class="bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg text-[#525456] w-[9.8rem]" name="ethnicity"
                id="ethnicity" value="{{ $general_information->ethnicity }}" type="text">
        </div>
        <div class="flex items-center gap-2 ml-[3rem]">
            <label class="text-[#525456] text-lg" for="religion">ศาสนา</label>
            <input class="bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg text-[#525456] w-[16rem]" name="religion"
                id="religion" value="{{ $general_information->religion }}" type="text">
        </div>
    </div>

    <div class="flex items-center mb-[2rem]">

        <div class="flex items-center gap-2">
            <label class="text-[#525456] text-lg" for="education">การศึกษา</label>
            <input class="bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg text-[#525456] w-[15.8rem]" name="education"
                id="education" value="{{ $general_information->education }}" type="text">
        </div>
        <div>
            <label class="text-[#525456] text-lg ml-[2rem]" for="healthcare_rights">สิทธิการรักษา</label>
            <input class="bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg text-[#525456] w-[9.8rem]"
                name="healthcare_rights" value="{{ $general_information->healthcare_rights }}" type="text">
        </div>
        <div>
            <label class="text-[#525456] text-lg ml-[6.2rem]" for="occupation">อาชีพ</label>
            <input class="bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg text-[#525456] w-[11rem]" name="occupation"
                id="occupation" value="{{ $general_information->occupation }}" type="text">
        </div>
        <div class="flex items-center gap-2">
            <label class="text-[#525456] text-lg ml-[3.6rem]" for="phone_num">หมายเลขโทรศัพท์</label>
            <input class="bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg text-[#525456] w-[11rem]" name="phone_num"
                type="text" value="{{ $general_information->phone_num }}">
        </div>
    </div>
    <div class="flex items-center mb-[2rem]">
        <div class="flex items-center gap-2">
            <label class="text-[#525456] text-lg" for="current_address">ที่อยู่ปัจจุบัน/ที่ติดต่อได้</label>
            <input class="bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg text-[#525456] w-[48rem]"
                name="current_address" value="{{ $general_information->current_address }}" id="current_address"
                type="text">
        </div>
    </div>

</div>
