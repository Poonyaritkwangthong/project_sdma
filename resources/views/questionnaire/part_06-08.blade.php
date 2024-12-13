<div class="flex gap-4">
    <h1 class="text-3xl">ส่วนที่ 6 การใช้เเหล่งสนับสนุนทางสังคมของผู้ป่วย/ครอบครัว</h1>
    <div>
        <label for="social_detail">ระบุ</label>
        <input type="text" name="social_detail" id="">
    </div>
</div>

<div class="mt-[2rem]">
    <label class="text-3xl" for="monitor_and_evaluate_detail">ส่วนที่ 7 การติดตามเเละประเมินผล</label><br>
    <div class="pl-16 mt-[1rem]">
        <textarea name="monitor_and_evaluate_detail" id="" cols="30" rows="10"></textarea>
    </div>
</div>
<div class="mt-[2rem]">
    <label class="text-3xl" for="cause">ส่วนที่ 8 ยุติการให้บริการ เพราะ</label>
    <div class="grid grid-rows-2 grid-flow-col gap-4 mt-[1rem] pl-16">
        <div>
            <input type="radio" name="cause" value="8.1 ผู้ใช้บริการสามารถดำรงชีวิตได้อย่างปกติ" id="" onclick="hideAllFields7()">
            <label for="cause">8.1 ผู้ใช้บริการสามารถดำรงชีวิตได้อย่างปกติ</label>
        </div>
        <div class="flex items-center gap-4">
            <input type="radio" name="cause" value="8.2 ส่งต่อไปบริการยังหน่วยงานอื่นๆ" id="" onclick="toggleFields7(true)">
            <label for="cause">8.2 ส่งต่อไปบริการยังหน่วยงานอื่นๆ</label>
            <div id="on-6" style="display: none;">
                <label for="cause_detail">ระบุ</label>
                <input type="text" name="cause_detail" id="">
            </div>
        </div>
        <div>
            <input type="radio" name="cause" value="8.3 ผู้ใช้บริการถึงเเก่กรรม" id="" onclick="hideAllFields7()">
            <label for="cause">8.3 ผู้ใช้บริการถึงเเก่กรรม</label>
        </div>
        <div>
            <input type="radio" name="cause" value="8.4 ผู้ใช้บริการปฏิเสธการบริการ" id="" onclick="hideAllFields7()">
            <label for="cause">8.4 ผู้ใช้บริการปฏิเสธการบริการ</label>
        </div>
        <div>
            <input type="radio" name="cause" value="8.5 ย้ายที่อยู่" id="" onclick="hideAllFields7()">
            <label for="cause">8.5 ย้ายที่อยู่</label>
        </div>
    </div>
