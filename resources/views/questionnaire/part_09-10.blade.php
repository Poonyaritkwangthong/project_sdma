<div class="mt-[2rem]">
    <label class="text-3xl" for="">ส่วนที่ 9 มีการประเมินครอบครัว
        หรือไม่</label>
    <div class="flex gap-4 items-center pl-16 mt-[1rem]">
        <div>
            <input type="radio" name="result" value="ไม่มี" id="" onclick="hideAllFields8()">
            <label for="result">9.1 ไม่มี</label>
        </div>

        <div class="flex items-center gap-4">
            <input type="radio" name="result" value="มี" id="" onclick="toggleFields8(true)">
            <label for="result">9.2 มี</label>
            <div id="on-7" style="display: none;">
                <label for="total_score">มีผลการประเมิน</label>
                <input type="text" name="total_score" id="">
                <p>คะเเนน</p>
            </div>
        </div>
    </div>
</div>

<div class="mt-[2rem]">
    <label class="text-3xl" for="">ส่วนที่ 10 ผังครอบครัว/เเผนที่บ้าน</label><br>
    <div class="mt-[1rem] pl-16">
        <input type="file" name="family_tree" id=""><br>
        <input type="file" name="house_map" id="">
    </div>
</div>
