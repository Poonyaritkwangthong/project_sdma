<div>
    <canvas id="myChart"></canvas>
</div>
<script>
    const labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'august', 'september', 'october', 'november', 'december']; // ชื่อเดือน
    const data = {
        labels: labels,
        datasets: [{
            label: 'My First Dataset',
            data: [65, 59, 80, 81, 56, 55, 40, 60, 40 , 82, 100, 120], // ข้อมูล
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)', // สีชมพู
                'rgba(54, 162, 235, 0.2)', // สีน้ำเงิน
                'rgba(255, 206, 86, 0.2)', // สีเหลือง
                'rgba(75, 192, 192, 0.2)', // สีเขียวฟ้า
                'rgba(153, 102, 255, 0.2)', // สีม่วง
                'rgba(255, 159, 64, 0.2)', // สีส้ม
                'rgba(201, 203, 207, 0.2)', // สีเทาอ่อน
                'rgba(123, 239, 178, 0.2)', // สีเขียวอ่อน
                'rgba(247, 202, 24, 0.2)', // สีเหลืองทอง
                'rgba(44, 130, 201, 0.2)', // สีฟ้าน้ำทะเล
                'rgba(250, 128, 114, 0.2)', // สีส้มแดง
                'rgba(138, 43, 226, 0.2)', // สีม่วงสด
            ],
            borderColor: [
                'rgb(255, 99, 132)', // สีชมพู
                'rgb(54, 162, 235)', // สีน้ำเงิน
                'rgb(255, 206, 86)', // สีเหลือง
                'rgb(75, 192, 192)', // สีเขียวฟ้า
                'rgb(153, 102, 255)', // สีม่วง
                'rgb(255, 159, 64)', // สีส้ม
                'rgb(201, 203, 207)', // สีเทาอ่อน
                'rgb(123, 239, 178)', // สีเขียวอ่อน
                'rgb(247, 202, 24)', // สีเหลืองทอง
                'rgb(44, 130, 201)', // สีฟ้าน้ำทะเล
                'rgb(250, 128, 114)', // สีส้มแดง
                'rgb(138, 43, 226)', // สีม่วงสด
            ],
            borderWidth: 1
        }]
    };

    const config = {
        type: 'bar', // ประเภทของกราฟ (bar chart)
        data: data,
        options: {
            scales: {
                y: {
                    beginAtZero: true // ให้เริ่มจากศูนย์
                }
            }
        }
    };

    // Render กราฟใน canvas
    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
</script>
