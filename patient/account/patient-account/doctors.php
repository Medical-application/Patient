<?php ?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الأطباء</title>
    <link rel="stylesheet" href="doctors.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <div class="main">
        <?php include '../side-bar/sidebar.php' ?>
        <div class="container">
            <div class="page-header">
                <h2>الأطباء</h2>
                <p>تصفح قائمة الأطباء المتاحين واحجز موعدك</p>
            </div>

            <div class="search-filter">
                <div class="search-box">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" placeholder="ابحث عن طبيب...">
                </div>
                <select class="specialty-filter">
                    <option value="">الكل</option>
                    <option value="general">طب عام</option>
                    <option value="dentist">طب الأسنان</option>
                    <option value="cardio">طب القلب</option>
                </select>
            </div>

            <div class="doctors-grid">
                <div class="doctor-card">
                    <div class="card-top">
                        <div class="doc-avatar">
                            <i class="fa-solid fa-user-doctor"></i>
                        </div>
                        <div class="doc-main">
                            <h3>د. سارة أحمد</h3>
                            <p class="specialty">طب عام</p>
                        </div>
                        <span class="available-badge">متاح</span>
                    </div>
                    <a href="../take-appointment/take-appointment.php">
                        <button class="btn-book">
                            <i class="fa-solid fa-calendar-plus"></i> حجز موعد
                        </button>
                    </a>
                </div>
            </div>

        </div>
    </div>
</body>
</html>