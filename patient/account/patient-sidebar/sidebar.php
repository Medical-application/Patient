<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../side-bar/sidebar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <div class="sidebar">
        <div class="title">
            <div class="logo">
                <i  class="fa-solid fa-house-medical"></i>
            </div>
            <p>عيادة الشفاء</p>
        </div>
        <div class="content">
            <div class="links">
                <i class="fa-solid fa-magnifying-glass-chart"></i>
                <a href="../patient/dashboard-patient.php">لوحة التحكم</a>
            </div>
            <div class="links">
                 <i class="fa-solid fa-calendar-days"></i>
                <a href="../patient/take-appointment.php">حجز موعد</a>
            </div>
            <div class="links">
                 <i class="fa-solid fa-business-time"></i>
                <a href="../patient/my-appointments.php">مواعيدي</a>
            </div>
            <div class="links">
                 <i class="fa-solid fa-user-doctor"></i>
                <a href="../patient/doctors.php">الأطباء</a>
            </div>
            <div class="links">
                 <i class="fa-solid fa-stethoscope"></i>
                <a href="../patient/services.php">الخدمات</a>
            </div>
             <div class="links">
                 <i class="fa-regular fa-circle-user"></i>
                <a href="../patient/my-profile.php">ملفي الشخصي</a>
            </div>
        </div>
        <div class="profile">
            <div class="pro">
                <div class="prologo">
                    <i class="fa-solid fa-user"></i>
                </div>
                <p>اسم</p>
            </div>
            <div class="logout">
                <button type="submit">تسجيل الخروج  <i class="fa-solid fa-arrow-right-from-bracket"></i></button>
            </div>
        </div>  
    </div>
</body>
</html>