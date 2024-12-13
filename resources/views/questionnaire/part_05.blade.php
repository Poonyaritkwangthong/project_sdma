<div class="mt-[2rem]">
    <label class="text-3xl" for="">ส่วนที่ 5 การประเมินความเสี่ยงของผู้ป่วย
        สามารถระบุได้มากกว่า 1
        ประเด็นความเสี่ยง/ปัจจัยความเสี่ยง</label>
    <div class="grid grid-rows-7 grid-flow-col gap-4 mt-[1rem] pl-16">
        <div>
            <input value="0.ไม่มีความเสี่ยง" onclick="toggleFields6(this, 'riskText1')" type="checkbox"
                name="risk[]" id="checkbox1">
            <label for="risk">0.ไม่มีความเสี่ยง</label>
            <input id="riskText1" style="display: none;" type="text" name="risk_detail[]" id="">
        </div>
        <div>
            <input value="1.การเจ็บป่วยซ้ำ" onclick="toggleFields6(this, 'riskText2')" type="checkbox" name="risk[]"
                id="checkbox1">
            <label for="risk">1.การเจ็บป่วยซ้ำ</label>
            <input id="riskText2" style="display: none;" type="text" name="risk_detail[]" id="">
        </div>
        <div>
            <input value="2.การทำเเท้ว/ทอดทิ้งบุตร" onclick="toggleFields6(this, 'riskText3')" type="checkbox" name="risk[]"
                id="checkbox1">
            <label for="risk">2.การทำเเท้ว/ทอดทิ้งบุตร</label>
            <input id="riskText3" style="display: none;" type="text" name="risk_detail[]" id="">
        </div>
        <div>
            <input value="3.การทำร้ายผู้อื่น" onclick="toggleFields6(this, 'riskText4')" type="checkbox" name="risk[]"
                id="checkbox1">
            <label for="risk">3.การทำร้ายผู้อื่น</label>
            <input id="riskText4" style="display: none;" type="text" name="risk_detail[]" id="">
        </div>
        <div>
            <input value="4.การถูกล่วงละเมิด/ก่ออาชญากรรม/การเป็นเหยื่่อการค้ามนุษย์" onclick="toggleFields6(this, 'riskText5')" type="checkbox" name="risk[]"
                id="checkbox1">
            <label for="risk">4.การถูกล่วงละเมิด/ก่ออาชญากรรม/การเป็นเหยื่่อการค้ามนุษย์</label>
            <input id="riskText5" style="display: none;" type="text" name="risk_detail[]" id="">
        </div>
        <div>
            <input value="5.การรับเเละเเพร่เชื้อ HIV" onclick="toggleFields6(this, 'riskText6')" type="checkbox" name="risk[]"
                id="checkbox1">
            <label for="risk">5.การรับเเละเเพร่เชื้อ HIV</label>
            <input id="riskText6" style="display: none;" type="text" name="risk_detail[]" id="">
        </div>
        <div>
            <input value="6.การเกิดปัญหาสุขภาพจิต/จิตเวช" onclick="toggleFields6(this, 'riskText7')" type="checkbox" name="risk[]"
                id="checkbox1">
            <label for="risk">6.การเกิดปัญหาสุขภาพจิต/จิตเวช</label>
            <input id="riskText7" style="display: none;" type="text" name="risk_detail[]" id="">
        </div>
        <div>
            <input value="7.การหลบหนี" onclick="toggleFields6(this, 'riskText8')" type="checkbox" name="risk[]"
                id="checkbox1">
            <label for="risk">7.การหลบหนี</label>
            <input id="riskText8" style="display: none;" type="text" name="risk_detail[]" id="">
        </div>
        <div>
            <input value="8.การมีปัญหาครอบครัว" onclick="toggleFields6(this, 'riskText9')" type="checkbox" name="risk[]"
                id="checkbox1">
            <label for="risk">8.การมีปัญหาครอบครัว</label>
            <input id="riskText9" style="display: none;" type="text" name="risk_detail[]" id="">
        </div>
        <div>
            <input value="9.การติดสารเสพติด/เสพซ้ำ" onclick="toggleFields6(this, 'riskText10')" type="checkbox" name="risk[]"
                id="checkbox1">
            <label for="risk">9.การติดสารเสพติด/เสพซ้ำ</label>
            <input id="riskText10" style="display: none;" type="text" name="risk_detail[]" id="">
        </div>
        <div>
            <input value="10.การฆ่าตัวตาย" onclick="toggleFields6(this, 'riskText11')" type="checkbox" name="risk[]"
                id="checkbox1">
            <label for="risk">10.การฆ่าตัวตาย</label>
            <input id="riskText11" style="display: none;" type="text" name="risk_detail[]" id="">
        </div>
        <div>
            <input value="11.การถูกกีดกัน/ถูกเลือกปฏิบัติจากชุมชนหรือสังคม/ไม่ได้รับความเป็นธรรม" onclick="toggleFields6(this, 'riskText12')" type="checkbox" name="risk[]"
                id="checkbox1">
            <label
                for="risk">11.การถูกกีดกัน/ถูกเลือกปฏิบัติจากชุมชนหรือสังคม/ไม่ได้รับความเป็นธรรม</label>
            <input id="riskText12" style="display: none;" type="text" name="risk_detail[]" id="">
        </div>
        <div>
            <input value="12.การได้รับการเลี้ยงดู/ดูเเลไม่เหมาะสม" onclick="toggleFields6(this, 'riskText13')" type="checkbox" name="risk[]"
                id="checkbox1">
            <label for="risk">12.การได้รับการเลี้ยงดู/ดูเเลไม่เหมาะสม</label>
            <input id="riskText13" style="display: none;" type="text" name="risk_detail[]" id="">
        </div>
        <div>
            <input value="13.การถูกญาติทอดทิ้ง/ไม่ยอมรับ" onclick="toggleFields6(this, 'riskText14')" type="checkbox" name="risk[]"
                id="checkbox1">
            <label for="risk">13.การถูกญาติทอดทิ้ง/ไม่ยอมรับ</label>
            <input id="riskText14" style="display: none;" type="text" name="risk_detail[]" id="">
        </div>
    </div>
</div>
