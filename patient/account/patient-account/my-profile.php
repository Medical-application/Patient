<?php ?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الملف الشخصي</title>
    <link rel="stylesheet" href="my-profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <div class="main">
        <?php include '../side-bar/sidebar.php' ?>
        <div class="container">
            <div class="page-header">
                <h2>الملف الشخصي</h2>
                <p>عرض وتعديل معلوماتك الشخصية</p>
            </div>

            <div class="profile-card">
                <div class="card-header">
                    <div class="header-right">
                        <div class="avatar">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <span>المعلومات الشخصية</span>
                    </div>
                    <button class="btn-edit" id="btn-edit">
                        <i class="fa-solid fa-pen"></i> تعديل
                    </button>
                </div>

                <form action="#" method="post" class="profile-form">
                    <div class="row">
                        <div class="field">
                            <label>الاسم الأول</label>
                            <input type="text" name="first_name" value="أحمد" disabled>
                        </div>
                        <div class="field">
                            <label>اسم العائلة</label>
                            <input type="text" name="last_name" value="محمد" disabled>
                        </div>
                    </div>

                    <div class="row">
                        <div class="field">
                            <label>اسم المستخدم</label>
                            <input type="text" name="username" value="ahmed.mohamed" disabled>
                        </div>
                        <div class="field">
                            <label>البريد الإلكتروني</label>
                            <input type="email" name="email" value="ahmed.mohamed@email.com" disabled>
                        </div>
                    </div>

                    <div class="row">
                        <div class="field">
                            <label>رقم الهاتف</label>
                            <input type="text" name="phone" value="0555123456" disabled>
                        </div>
                        <div class="field">
                            <label>الدور</label>
                            <input type="text" value="مريض" disabled class="readonly">
                        </div>
                    </div>

                    <div class="form-actions" id="form-actions">
                        <button type="submit" class="btn-save">
                            <i class="fa-solid fa-floppy-disk"></i> حفظ التعديلات
                        </button>
                        <button type="button" class="btn-cancel" id="btn-cancel">
                            إلغاء
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <script>
        const btnEdit = document.getElementById('btn-edit');
        const btnCancel = document.getElementById('btn-cancel');
        const formActions = document.getElementById('form-actions');
        const inputs = document.querySelectorAll('input:not(.readonly)');

        btnEdit.addEventListener('click', () => {
            inputs.forEach(input => input.disabled = false);
            formActions.style.display = 'flex';
            btnEdit.style.display = 'none';
        });

        btnCancel.addEventListener('click', () => {
            inputs.forEach(input => input.disabled = true);
            formActions.style.display = 'none';
            btnEdit.style.display = 'flex';
        });
    </script>
</body>
</html>