<div class="border-b">
    <div class="flex justify-between items-center mb-[2rem]">
        <h1 class="text-3xl text-[#4846aa]">ส่วนที่ 1 ข้อมูลทั่วไป</h1>
        <div class="">
            <label class="text-lg text-[#525456]" for="target_group">กลุ่มเป้าหมาย</label>
            <select name="target_group" class="text-center text-[#525456] p-1 rounded-lg bg-[#f4f4fc] border-[#a3a0df]"
                id="">
                <option value="--ยังไม่ได้เลือก--">--ยังไม่ได้เลือก--</option>
                <option value="ผู้ใช้บริการทั่วไป">ผู้ใช้บริการทั่วไป</option>
                <option value="ผู้ป่วยทั่วไป">ผู้ป่วยทั่วไป</option>
                <option value="ผู้ป่วยโรคเรื้อรัง">ผู้ป่วยโรคเรื้อรัง</option>
                <option value="OSCC">OSCC</option>
                <option value="ผู้ติดสารเสพติด">ผู้ติดสารเสพติด</option>
                <option value="ผู้ป่วยจิตเวช">ผู้ป่วยจิตเวช</option>
                <option value="ผู้ผิการ">ผู้ผิการ</option>
                <option value="ผู้ป่วยประสบอุบัติเหตุจากการทำงาน">ผู้ป่วยประสบอุบัติเหตุจากการทำงาน</option>
                <option value="ผู้ป่วยติดเชื่อ HIV/เอดส์">ผู้ป่วยติดเชื่อ HIV/เอดส์</option>
                <option value="ต่างด้าวหลบหนีเข้าเมือง">ต่างด้าวหลบหนีเข้าเมือง</option>
                <option value="คนไทยไม่มีเลข13หลัก/ตกหล่น">คนไทยไม่มีเลข13หลัก/ตกหล่น</option>
                <option value="ผู้ไม่มีหลักประกัน/ผู้มีปัญหาการใช้สิทธิ">ผู้ไม่มีหลักประกัน/ผู้มีปัญหาการใช้สิทธิ</option>
                <option value="สิทธิ์การรักษาไม่คุ้มครอง">สิทธิ์การรักษาไม่คุ้มครอง</option>
                <option value="ผู้ป่วยอุบัติเหตุจากรถ">ผู้ป่วยอุบัติเหตุจากรถ</option>
                <option value="อื่นๆระบุ/กลุ่มเสี่ยงต่อการร้องเรียน">อื่นๆระบุ/กลุ่มเสี่ยงต่อการร้องเรียน</option>
            </select>
        </div>
    </div>
    <div class="flex items-center mb-[2rem] ">
        <div class="">
            <label class="text-[#525456] text-lg" for="case_date">วันที่รับ case ว/ด/ป</label>
            <input class="bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg text-[#525456]  w-[11.6rem]" name="case_date" type="date">
        </div>
        <div class="ml-[4.5rem]">
            <label class="text-[#525456] text-lg" for="hn">HN</label>
            <input class="bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg text-[#525456]" name="hn" id="hn"
                type="text">
        </div>
        <div class="ml-[6.2rem]">
            <label class="text-[#525456] text-lg" for="an">AN</label>
            <input class="bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg text-[#525456]" name="an" id="an"
                type="text">
        </div>
        <div class="ml-[3.5rem]">
            <label class="text-[#525456] text-lg" for="sn">เลข สค (SN)</label>
            <input class="bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg text-[#525456] w-[14rem]" name="sn" id="sn"
                type="text">
        </div>
    </div>
    <div class="flex items-center mb-[2rem]">
        <div>
            <label class="text-[#525456] text-lg" for="prefix">คำนำหน้าชื่อ</label><br>
            <select class="bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg text-[#525456] w-[10rem] text-center" name="prefix">
                <option value="เด็กชาย">เด็กชาย</option>
                <option value="เด็กหญิง">เด็กหญิง</option>
                <option value="นาย">นาย</option>
                <option value="นาง">นาง</option>
                <option value="น.ส.">นางสาว</option>
            </select>
        </div>
        <div class="ml-[4rem]">
            <label class="text-[#525456] text-lg " for="full_name">ชื่อ-สกุล</label> <br>
            <input class="bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg text-[#525456] w-[24.7rem]" name="full_name" id="full_name"
                type="text">
        </div>
        <div class="ml-[6.2rem]">
            <label class="text-[#525456] text-lg" for="id_card_num">เลขบัตรประชาชน</label> <br>
            <input class="bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg text-[#525456] w-[13.8rem]" name="id_card_num" id="id_card_num"
                type="text">
        </div>
        <div class="ml-[3.5rem]">
            <label class="text-[#525456] text-lg" for="birth_date">ว/ด/ป เกิด</label> <br>
            <input class="bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg text-[#525456]" name="birth_date" type="date">
        </div>
        <div class="ml-[3rem]">
            <label class="text-[#525456] text-lg" for="age">อายุ</label>
            <div class="flex items-center gap-2">
                <input class="bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg text-[#525456] w-[6rem]" name="age" id="age"
                type="text">
            <p class="text-[#525456] text-lg">ปี</p>
            </div>
        </div>
    </div>
    <div class="flex items-center gap-2 mb-[2rem]">

        <div class="flex items-center gap-2">
            <label class="text-[#525456] text-lg" for="marital_status">สถานภาพสมรส</label>
            <input class="bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg text-[#525456] w-[13rem]" name="marital_status"
                type="text">
        </div>

        <div class="flex items-center gap-2 ml-[1.2rem]">
            <label class="text-[#525456] text-lg" for="nationality">สัญชาติ</label>
            <input class="bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg text-[#525456] w-[12.4rem]" name="nationality" id="nationality"
                type="text">
        </div>
        <div class="flex items-center gap-2 ml-[5.7rem]">
            <label class="text-[#525456] text-lg" for="ethnicity">เชื้อชาติ</label>
            <input class="bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg text-[#525456] w-[9.8rem]" name="ethnicity" id="ethnicity"
                type="text">
        </div>
        <div class="flex items-center gap-2 ml-[3rem]">
            <label class="text-[#525456] text-lg" for="religion">ศาสนา</label>
            <input class="bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg text-[#525456] w-[16rem]" name="religion" id="religion"
                type="text">
        </div>
    </div>

    <div class="flex items-center mb-[2rem]">

        <div class="flex items-center gap-2">
            <label class="text-[#525456] text-lg" for="education">การศึกษา</label>
            <input class="bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg text-[#525456] w-[15.8rem]" name="education" id="education"
                type="text">
        </div>
        <div>
            <label class="text-[#525456] text-lg ml-[2rem]" for="healthcare_rights">สิทธิการรักษา</label>
            <input class="bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg text-[#525456] w-[9.8rem]" name="healthcare_rights"
                type="text">
        </div>
        <div>
            <label class="text-[#525456] text-lg ml-[6.2rem]" for="occupation">อาชีพ</label>
            <input class="bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg text-[#525456] w-[11rem]" name="occupation" id="occupation"
                type="text">
        </div>
        <div class="flex items-center gap-2">
            <label class="text-[#525456] text-lg ml-[3.6rem]" for="phone_num">หมายเลขโทรศัพท์</label>
            <input class="bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg text-[#525456] w-[11rem]" name="phone_num" type="text">
        </div>
    </div>
    <div class="flex items-center mb-[2rem]">
        <div class="flex items-center gap-2">
            <label class="text-[#525456] text-lg" for="current_address">ที่อยู่ปัจจุบัน/ที่ติดต่อได้</label>
            <input class="bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg text-[#525456] w-[48rem]" name="current_address"
                id="current_address" type="text">
        </div>
    </div>

</div>
