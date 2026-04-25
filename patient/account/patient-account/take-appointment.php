<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>take-appointment</title>
    <link rel="stylesheet" href="take-appointment.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <div class="main">
        <?php include '../side-bar/sidebar.php'?>
        <div class="container">
            <div class="informations">
                <div class="form-header">
                    <div class="header-icon">
                        <i class="fa-solid fa-calendar-plus"></i>
                    </div>
                    <div>
                        <h2>حجز موعد جديد</h2>
                        <p>اختر الطبيب والوقت المناسب لك</p>
                    </div>
                </div>
                <form action="#" method="post">
                    <div class="field">
                        <label for="doctor_id">الطبيب</label>
                        <select name="doctor_id" id="doctor_id">
                            <option value="">— اختر الطبيب —</option>
                            <option value="1">aimen</option>
                            <option value="2">naghma</option>
                            <option value="3">alaa</option>
                        </select>
                    </div>
                    <div class="field">
                        <label for="date_app">تاريخ ووقت الموعد</label>
                        <input type="datetime-local" name="date_app" id="date_app">
                    </div>
                    <div class="field">
                        <label for="notes">أعراض / ملاحظات <span class="optional">(اختياري)</span></label>
                        <textarea name="notes" id="notes" placeholder="أكتب شيئاً يقرأه الطبيب..."></textarea>
                    </div>
                    <button type="submit">
                        تأكيد الحجز <i class="fa-solid fa-calendar-check"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>