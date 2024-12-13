<div class="flex justify-between items-center mb-[2rem]">
    <h1 class="text-3xl">ส่วนที่ 1 ข้อมูลทั่วไป</h1>
    <div>
        <label class="text-lg" for="target_group">กลุ่มเป้าหมาย</label>
        <select name="target_group" class="text-center" name="" id="">
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
<div class="flex justify-between items-center mb-[2rem]">
    <div>
        <label for="case_date">วันที่รับ caseว/ด/ป</label>
        <input name="case_date" type="date">
    </div>
    <div>
        <label for="hn">HN</label>
        <input name="hn" type="text">
    </div>
    <div>
        <label for="an">AN</label>
        <input name="an" type="text">
    </div>
    <div>
        <label for="sn">เลข สค (SN)</label>
        <input name="sn" type="text">
    </div>
</div>
<div class="flex justify-between items-center mb-[2rem]">
    <div>
        <label for="prefix">คำนำหน้าชื่อ</label>
        <select name="prefix" id="">
            <option value="เด็กชาย">เด็กชาย</option>
            <option value="เด็กหญิง">เด็กหญิง</option>
            <option value="นาย">นาย</option>
            <option value="นาง">นาง</option>
            <option value="นางสาว">นางสาว</option>
        </select>
    </div>
    <div>
        <label for="full_name">ชื่อ-สกุล</label>
        <input name="full_name" type="text">
    </div>
    <div>
        <label for="id_card_num">เลขบัตรประชาชน</label>
        <input name="id_card_num" type="text">
    </div>
    <div>
        <label for="birth_date">ว/ด/ป เกิด</label>
        <input name="birth_date" type="date">
    </div>
</div>
<div class="flex justify-between items-center mb-[2rem]">
    <div class="flex items-center gap-2">
        <label for="age">อายุ</label>
        <input name="age" type="text">
        <p>ปี</p>
    </div>
    <div class="flex items-center gap-2">
        <label for="nationality">สัญชาติ</label>
        <input name="nationality" type="text">
    </div>
    <div class="flex items-center gap-2">
        <label for="ethnicity">เชื้อชาติ</label>
        <input name="ethnicity" type="text">
    </div>
</div>
<div class="flex justify-between items-center mb-[2rem]">
    <div class="flex items-center gap-2">
        <label for="religion">ศาสนา</label>
        <input name="religion" type="text">
    </div>
    <div class="flex items-center gap-2">
        <label for="marital_status">สถานภาพสมรส</label>
        <input name="marital_status" type="text">
    </div>
    <div class="flex items-center gap-2">
        <label for="education">การศึกษา</label>
        <input name="education" type="text">
    </div>
</div>
<div class="flex justify-between items-center mb-[2rem]">
    <div>
        <label for="healthcare_rights">สิทธิการรักษา</label>
        <input name="healthcare_rights" type="text">
    </div>
    <div>
        <label for="occupation">อาชีพ</label>
        <input name="occupation" type="text">
    </div>
    <div>
        <label for="phone_num">หมายเลขโทรศัพท์</label>
        <input name="phone_num" type="text">
    </div>
</div>
<div>
    <label for="current_address">ที่อยู่ปัจจุบัน/ที่ติดต่อได้</label>
    <input name="current_address" type="text">
</div>
