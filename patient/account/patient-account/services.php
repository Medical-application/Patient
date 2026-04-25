<?php ?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الخدمات</title>
    <link rel="stylesheet" href="services.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <div class="main">
        <?php include '../side-bar/sidebar.php' ?>
        <div class="container">
            <div class="page-header">
                <h2>الخدمات الطبية</h2>
                <p>تعرف على الخدمات الطبية المتاحة في عيادتنا</p>
            </div>

            <div class="services-grid">
                <div class="service-card">
                    <div class="serv-icon">
                        <i class="fa-solid fa-stethoscope"></i>
                    </div>
                    <h3>فحص عام</h3>
                    <p class="serv-desc">فحص شامل للصحة العامة يشمل قياس الضغط والسكر والفحص السريري</p>
                    <div class="serv-meta">
                        <span><i class="fa-solid fa-clock"></i> 30 دقيقة</span>
                        <span><i class="fa-solid fa-money-bill-wave"></i> 500 دج</span>
                    </div>
                    <a href="../take-appointment/take-appointment.php">
                        <button class="btn-book">
                            <i class="fa-solid fa-calendar-plus"></i> احجز الآن
                        </button>
                    </a>
                </div>
            </div>

        </div>
    </div>
</body>
</html>