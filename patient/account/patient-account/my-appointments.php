<?php ?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مواعيدي</title>
    <link rel="stylesheet" href="my-appointments.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <div class="main">
        <?php include '../side-bar/sidebar.php' ?>
        <div class="container">
            <div class="page-header">
                <div class="header-text">
                    <h2>مواعيدي</h2>
                    <p>عرض وإدارة جميع مواعيدك</p>
                </div>
                <a href="../take-appointment/take-appointment.php">
                    <button class="btn-new">
                        <i class="fa-solid fa-calendar-plus"></i> حجز موعد جديد
                    </button>
                </a>
            </div>

            <div class="filters">
                <button class="filter active">الكل</button>
                <button class="filter">مقبول</button>
                <button class="filter">قيد الانتظار</button>
                <button class="filter">مكتمل</button>
                <button class="filter">مرفوض</button>
            </div>

            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>الطبيب</th>
                            <th>الخدمة</th>
                            <th>التاريخ</th>
                            <th>الوقت</th>
                            <th>الحالة</th>
                            <th>الإجراءات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="doctor-cell">
                                    <div class="doc-avatar"><i class="fa-solid fa-user-doctor"></i></div>
                                    <div>
                                        <p>د. سارة أحمد</p>
                                        <span>طب عام</span>
                                    </div>
                                </div>
                            </td>
                            <td>فحص عام</td>
                            <td>2026-04-25</td>
                            <td>10:00 ص</td>
                            <td><span class="badge accepted"><i class="fa-solid fa-circle-check"></i> مقبول</span></td>
                            <td>
                                <div class="actions">
                                    <button class="btn-view"><i class="fa-solid fa-eye"></i></button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>