<script>
    function changePageHandle(pageNumber) {
        // รีเซ็ตการแสดงผลทุกหน้า
        document.getElementById("page-1").classList.remove("active");
        document.getElementById("page-2").classList.remove("active");
        document.getElementById("page-3").classList.remove("active");

        // แสดงหน้าที่เลือก
        if (pageNumber === 1) {
            document.getElementById("page-1").classList.add("active");
        } else if (pageNumber === 2) {
            document.getElementById("page-2").classList.add("active");
        } else if (pageNumber === 3) {
            document.getElementById("page-3").classList.add("active");
        }
    }

    // ซ่อนปุ่ม input ของข้อ 2.1.1
    function toggleFields(selection) {
        const additionalFields = document.getElementById('additionalFields');
        const externalField = document.getElementById('externalField');
        const internalInput = document.getElementById('receive_detail_internal');
        const externalInput = document.getElementById('receive_detail_external');

        if (additionalFields && externalField && internalInput && externalInput) {
            if (selection === 'internal') {
                additionalFields.style.display = 'block';
                externalField.style.display = 'none';
                internalInput.disabled = false;
                externalInput.disabled = true;
            } else if (selection === 'external') {
                additionalFields.style.display = 'none';
                externalField.style.display = 'block';
                internalInput.disabled = true;
                externalInput.disabled = false;
            } else {
                additionalFields.style.display = 'none';
                externalField.style.display = 'none';
                internalInput.disabled = true;
                externalInput.disabled = true;
            }
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        const currentValue = "{{ $general_information->finding_facts->receive }}";
        toggleFields(currentValue === 'หน่วยงานภายใน' ? 'internal' : currentValue === 'หน่วยงานภายนอก' ?
            'external' : 'none');
    });
    // ซ่อนปุ่ม input ของหัวข้อ 2.1.2
    document.addEventListener('DOMContentLoaded', () => {
        const selectedValue = document.querySelector('input[name="facts_target_group"]:checked')?.value;
        const idMap = {
            "ผู้ป่วยทั่วไป": "textField1",
            "ผู้ป่วยเรื้อรัง": "textField2",
            "OSCC": "textField3",
            "ผู้ติดสารเสพติด": "textField4",
            "ผู้ป่วยจิตเวช": "textField5",
            "ผู้พิการ": "textField6",
        };
        if (selectedValue && idMap[selectedValue]) {
            toggleFields2(true, idMap[selectedValue]);
        }
    });

    function hideAllFields2() {
        const textFields = document.querySelectorAll('[id^="textField"]');
        textFields.forEach(field => {
            field.style.display = 'none';
        });
        document.getElementById("hiddenField").value = "";
    }

    function toggleFields2(show, idToShow = null) {
        hideAllFields2();
        if (show && idToShow) {
            const fieldToShow = document.getElementById(idToShow);
            if (fieldToShow) {
                fieldToShow.style.display = 'block';
            }
        }
    }

    function updateHiddenField() {
        const selectedTextField = document.querySelector('[id^="textField"]:not([style*="display: none"]) input');
        const hiddenField = document.getElementById("hiddenField");
        if (selectedTextField && hiddenField) {
            hiddenField.value = selectedTextField.value;
        }
    }

    function updateHiddenField() {
        // คัดลอกค่าจากฟิลด์ที่แสดงอยู่ไปยัง Hidden Field
        const activeInput = document.querySelector(
            'div[id^="textField"][style*="block"] input[name="facts_target_group_detail_temp"]');
        if (activeInput) {
            document.getElementById("hiddenField").value = activeInput.value;
        }
    }

    // ซ่อนปุ่ม input ของข้อ 2.1.3
    document.addEventListener('DOMContentLoaded', () => {
        const informant = document.querySelector('input[name="informant"]:checked')?.value;
        if (informant === 'ผู้อื่น') {
            toggleFields3(true);
        }
    });

    function hideAllFields3() {
        // ซ่อนฟิลด์ทั้งหมด
        document.getElementById('on-3').style.display = 'none';
    }

    function toggleFields3(show) {
        hideAllFields3(); // ซ่อนฟิลด์ทั้งหมดก่อน
        if (show) {
            document.getElementById('on-3').style.display = 'block'; // แสดงฟิลด์ "หน่วยงานภายใน"
        }
    }
    // ซ่อนปุ่ม input ของข้อ 2.1.5
    document.addEventListener('DOMContentLoaded', () => {
        const source_of_income = document.querySelector('input[name="source_of_income"]:checked')?.value;
        if (source_of_income === 'จากผู้อื่น') {
            toggleFields4(true);
        } else {
            hideAllFields4();
        }
    });

    function hideAllFields4() {
        // ซ่อนฟิลด์ทั้งหมด
        document.getElementById('on-4').style.display = 'none';
    }

    function toggleFields4(show) {
        hideAllFields4(); // ซ่อนฟิลด์ทั้งหมดก่อน
        if (show) {
            document.getElementById('on-4').style.display = 'block'; // แสดงฟิลด์ "ระบุ"
        }
    }
    // ซ่อนปุ่ม input ของข้อ 2.1.6
    document.addEventListener('DOMContentLoaded', () => {
        const having_debt = document.querySelector('input[name="having_debt"]:checked')?.value;
        if (having_debt === 'มี') {
            toggleFields5(true);
        } else {
            hideAllFields5();
        }
    });

    function hideAllFields5() {
        // ซ่อนฟิลด์ทั้งหมด
        document.getElementById('on-5').style.display = 'none';
    }

    function toggleFields5(show) {
        hideAllFields5(); // ซ่อนฟิลด์ทั้งหมดก่อน
        if (show) {
            document.getElementById('on-5').style.display = 'block'; // แสดงฟิลด์
        }
    }
    // ซ่อนปุ่ม input ของหัวข้อ ส่วนที่ 5
    function toggleFields6(checkbox, textFieldId) {
        const textField = document.getElementById(textFieldId);
        if (checkbox.checked) {
            textField.style.display = 'block'; // แสดง input text
        } else {
            textField.style.display = 'none'; // ซ่อน input text
            textField.value = ''; // ล้างข้อความใน input text
        }
    }
    // ซ่อนปุ่ม input ของข้อ 2.1.6
    function hideAllFields7() {
        // ซ่อนฟิลด์ทั้งหมด
        document.getElementById('on-6').style.display = 'none';
    }

    function toggleFields7(show) {
        hideAllFields7(); // ซ่อนฟิลด์ทั้งหมดก่อน
        if (show) {
            document.getElementById('on-6').style.display = 'block'; // แสดงฟิลด์ "หน่วยงานภายใน"
        }
    }
    // ซ่อนปุ่ม input ของข้อ 2.1.6
    function hideAllFields8() {
        // ซ่อนฟิลด์ทั้งหมด
        document.getElementById('on-7').style.display = 'none';
    }

    function toggleFields8(show) {
        hideAllFields8(); // ซ่อนฟิลด์ทั้งหมดก่อน
        if (show) {
            document.getElementById('on-7').style.display = 'block'; // แสดงฟิลด์ "หน่วยงานภายใน"
        }
    }
</script>
