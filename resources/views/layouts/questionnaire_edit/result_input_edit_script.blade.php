<script>
    document.getElementById("fetchButton").addEventListener("click", async function(event) {
        event.preventDefault();

        const hn = document.getElementById("searchHN").value.trim();
        if (!hn) {
            alert("กรุณากรอก HN หรือ ID");
            return;
        }

        try {
            // ใช้ POST แทน GET พร้อมส่งข้อมูลใน body
            const response = await fetch(`http://172.16.78.22/ppk11/test/findpat`, {
                method: "POST", // เปลี่ยนเป็น POST
                headers: {
                    "Authorization": "5FBA2F4CA05E39ABDE60217498D0A9B0",
                    "Content-Type": "application/json",
                },
                body: JSON.stringify({
                    "hncid": hn, // ส่งข้อมูล HN ผ่าน body
                }),
            });

            if (!response.ok) {
                throw new Error(`HTTP error! Status: ${response.status}`);
            }

            const result = await response.json();
            console.log(result);

            if (!result || Object.keys(result).length === 0) {
                alert("ไม่พบข้อมูล");
                return;
            }

            const prefix = result.data.prename
            // จัดการข้อมูลวันเกิด
            const birthdatetime = result.data.birthdatetime || ""; // เช่น "1990-05-25 14:30:00"
            const birthDate = birthdatetime.split(" ")[0]; // แยกเอาเฉพาะส่วนวันที่

            // คำนวณอายุจากวันเกิด
            const age = calculateAge(birthDate);

            // อัปเดตค่าลงในฟอร์ม
            document.querySelector("input[name='hn']").value = result.data.hn || "";
            document.querySelector("select[name='prefix']").value = prefix;
            document.querySelector("input[name='full_name']").value =
                `${result.data.firstname} ${result.data.lastname}` || "";
            document.querySelector("input[name='id_card_num']").value = result.data.citizencardno || "";
            document.querySelector("input[name='birth_date']").value = birthDate;
            document.querySelector("input[name='age']").value = age; // ใส่อายุในฟิลด์อายุ
            document.querySelector("input[name='nationality']").value = result.data.raceName || "";
            document.querySelector("input[name='ethnicity']").value = result.data.citizenshipName || "";
            document.querySelector("input[name='religion']").value = result.data.religiousName || "";
            document.querySelector("input[name='marital_status']").value = result.data.marriageName || "";
            document.querySelector("input[name='current_address']").value =
                `บ้านเลขที่ ${result.data.address.house || ''} หมู่ ${result.data.address.moo || ''} ซอย ${result.data.address.soy || ''} ถนน ${result.data.address.road || ''} ตำบล ${result.data.address.tambon || ''} อำเภอ ${result.data.address.amphur || ''} จังหวัด ${result.data.address.province || ''}`;
            document.querySelector("input[name='occupation']").value = result.data.occupationName || "";
            document.querySelector("input[name='phone_num']").value = result.data.address.phone || "";
            document.querySelector("input[name='healthcare_rights']").value = result.data.coverage
                .coveragedesc || "";


            alert("ดึงข้อมูลสำเร็จ");
        } catch (error) {
            console.error("เกิดข้อผิดพลาด:", error);
            alert("เกิดข้อผิดพลาดในการดึงข้อมูล");
        }
    });

    // ฟังก์ชันคำนวณอายุ
    function calculateAge(birthDate) {
        const today = new Date(); // วันที่ปัจจุบัน
        const birth = new Date(birthDate); // แปลงวันเกิดเป็น Date object
        let age = today.getFullYear() - birth.getFullYear(); // คำนวณปี
        const monthDiff = today.getMonth() - birth.getMonth(); // คำนวณเดือน

        // ตรวจสอบว่าเดือนหรือวันที่ยังไม่ถึงวันเกิดปีนี้หรือเปล่า
        if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birth.getDate())) {
            age--; // ถ้ายังไม่ถึงวันเกิดปีนี้ ลดอายุลง 1 ปี
        }
        return age; // คืนค่าอายุ
    }
</script>
