<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard-patient.css">
    <title>patient</title>
</head>
<body>
    <div class="main" id="main">
        <?php  include '../side-bar/sidebar.php' ?>
        <div class="dashboard" id="dashboard">
            <div class="welcome">
                <h2>مرحبا، اسم</h2>
                <p>ألقي نظرة على كل ما يخصك</p>
            </div>
            <div class="stats">
                <div class="mini-container">
                    <p>اجمالي المواعيد</p>
                    <span>12</span>
                    <div class="holder">
                        <i class="fa-solid fa-calendar-plus"></i>
                    </div>
                </div>
                <div class="mini-container">
                     <p> المواعيد القادمة</p>
                    <span>12</span>
                    <div class="holder">
                        <i class="fa-solid fa-business-time"></i>
                    </div>
                </div>
                <div class="mini-container">
                     <p>المواعيد المكتملة </p>
                    <span>12</span>
                    <div class="holder">
                        <i class="fa-solid fa-calendar-check"></i>
                    </div>
                </div>
                <div class="mini-container">
                     <p> المواعيد المرفوضة</p>
                    <span>12</span>
                    <div class="holder">
                        <i class="fa-solid fa-calendar-xmark"></i>
                    </div>
                </div>
            </div>
            <div class="myappointments">
                <div class="recent-appointments">
                    <div class="title">
                        <p>مواعيدك القادمة</p>
                        <div class="more">
                            <button><i class="fa-solid fa-arrow-left-long"></i>عرض المزيد </button>
                        </div>
                    </div>
                    <div class="appointments-infos">
                        <div class="doctor-infos">
                           <div class="doc-logo">
                            <i class="fa-solid fa-user-doctor"></i>
                           </div>
                            <div class="doc-intro">
                                <p>اسم</p>
                                <span>تخصص</span>
                            </div>
                        </div>
                        <div class="time">
                            <span>02-05-2026</span>
                            <span>12:30</span>
                        </div>
                        <div class="app-stat">
                            <div class="app-stat-container">
                                <p>accepted</p>
                            </div>
                        </div>
                    </div>
                    <div class="take-appointment">
                        <button> حجز موعد جديد<i class="fa-solid fa-calendar-plus"></i></button>
                    </div>
                </div>
            </div>
            <div class="others">
                <div class="serv">
                    <div class="serv-logo">
                        <i class="fa-solid fa-calendar-days"></i>
                    </div>
                    <p>حجز موعد</p>
                </div>
                <div class="serv">
                    <div class="serv-logo">
                       <i class="fa-solid fa-user-doctor"></i>
                    </div>
                    <p>الاطباء</p>
                </div>
                <div class="serv">
                    <div class="serv-logo">
                        <i class="fa-solid fa-stethoscope"></i>
                    </div>
                    <p>الخدمات</p>
                </div>
                <div class="serv">
                    <div class="serv-logo">
                        <i class="fa-solid fa-circle-user"></i>
                    </div>
                    <p>الملف الشخصي</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>