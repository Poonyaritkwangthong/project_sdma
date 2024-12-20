<div class="flex gap-4 border-b">
    <h1 class="text-3xl text-[#4846aa]">ส่วนที่ 6 การใช้เเหล่งสนับสนุนทางสังคมของผู้ป่วย/ครอบครัว</h1>
    <div>
        <label class="text-[#525456] text-lg" for="social_detail">ระบุ</label>
        <input class="text-[#525456] text-lg bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg w-[34rem] mb-[2rem] ml-2"
            type="text" name="social_detail" id="">
    </div>
</div>

<div class="mt-[2rem] border-b">
    <label class="text-3xl text-[#4846aa]" for="monitor_and_evaluate_detail">ส่วนที่ 7 การติดตามเเละประเมินผล</label><br>
    <div class="pl-16 mt-[1rem] mb-[2rem]">
        <textarea class="text-[#525456] text-lg bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg w-[34rem] mb-[2rem] w-full pl-2"
            name="monitor_and_evaluate_detail" id="" cols="30" rows="10"></textarea>
    </div>
</div>
<div class="mt-[2rem] border-b">
    <label class="text-3xl text-[#4846aa]" for="cause">ส่วนที่ 8 ยุติการให้บริการ เพราะ</label>
    <div class="flex gap-[2rem] items-center">
        <div class="grid grid-rows-2 grid-flow-col gap-4 mt-[1rem] pl-16 mb-[2rem]">
            <div>
                <input type="radio" name="cause" value="8.1 ผู้ใช้บริการสามารถดำรงชีวิตได้อย่างปกติ" id=""
                    onclick="hideAllFields7()">
                <label class="text-[#525456] text-lg" for="cause">8.1 ผู้ใช้บริการสามารถดำรงชีวิตได้อย่างปกติ</label>
            </div>
            <div class="flex gap-4 items-center">
                <div>
                    <input type="radio" name="cause" value="8.2 ส่งต่อไปบริการยังหน่วยงานอื่นๆ" id=""
                    onclick="toggleFields7(true)">
                <label class="text-[#525456] text-lg" for="cause">8.2 ส่งต่อไปบริการยังหน่วยงานอื่นๆ</label>
                </div>
                <div id="on-6" style="display: none;">
                    <div class="flex items-center gap-2">
                        <label class="text-[#525456] text-lg" for="cause_detail">ระบุ</label>
                        <input class="text-[#525456] text-lg bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg" type="text"
                            name="cause_detail" id="">
                    </div>
                </div>
            </div>
            <div>
                <input type="radio" name="cause" value="8.3 ผู้ใช้บริการถึงเเก่กรรม" id=""
                    onclick="hideAllFields7()">
                <label class="text-[#525456] text-lg" for="cause">8.3 ผู้ใช้บริการถึงเเก่กรรม</label>
            </div>
            <div>
                <input type="radio" name="cause" value="8.4 ผู้ใช้บริการปฏิเสธการบริการ" id=""
                    onclick="hideAllFields7()">
                <label class="text-[#525456] text-lg" for="cause">8.4 ผู้ใช้บริการปฏิเสธการบริการ</label>
            </div>
            <div>
                <input type="radio" name="cause" value="8.5 ย้ายที่อยู่" id="" onclick="hideAllFields7()">
                <label class="text-[#525456] text-lg " for="cause">8.5 ย้ายที่อยู่</label>
            </div>
        </div>
    </div>
</div>
