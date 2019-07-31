<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Comment Box</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel='stylesheet' type='text/css' media='screen' href='sweetalert2.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
   
</head>
<body>
    
    <div id="doc">

        <div class="wrap">

                <form id="box" class="box" method="post" action="#">

                    <div class="box-loader" aria-hidden="true"></div>

                    
                    <div class="box-header text-center">
                        <img src="mail-box.svg" alt="" style="max-width: 100px" />
                        <h1><span>กล่องแสดงความคิดเห็นพนักงาน</span></h1>
                    </div>

                    <div class="box-content">

                        <div class="alert alert-warning">
                            <ul class="mb-0 pl-4">
                                <li>มั่นใจได้เลย! ความคิดเห็นของคุณจะถูกปิดเป็นความลับ  และไม่สามารถระบุตัวตนได้ว่าคุณเป็นใครในการแสดงความคิดเห็นนี้</li>
                                <li>การแสดงความคิดเห็นเชิงสร้างสรรค์จะช่วยผลักดันให้การทำงานมีประสิทธิภาพและภาพรวมมีความสำเร็จสูงขึ้น!</li>
                            </ul>
                        </div>

                        <div class="mb-3 form-textbox-wrap">
                            <input id="input-title" type="text" class="form-control form-textbox form-textbox-text form-icon-left" name="title" autocapitalize="off" autocomplete="off"  required aria-required="true" autocorrect="off"/>
                            <label class="form-label">หัวข้อ</label>

                            <div class="form-icons"><img src="idea.svg" alt="" width="24" height="24" /></div>
                        </div>

                        <div class="mb-3 form-textbox-wrap">
                            <textarea id="input-text" class="form-control form-textbox form-textbox-text form-icon-left" name="text" autocomplete="off" rows="4" required></textarea>
                            <label class="form-label">รายละเอียด</label>
                            <div class="form-icons"><img src="chat.svg" alt="" width="24" height="24" /></div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between box-footer box-content">
                        <div></div>
                        <button class="btn btn-primary btn-lg" type="submit">ส่งความคิดเห็น</button>
                    </div>
            </form>
        </div>
    </div>

    <script src="jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="jquery.autosize.js"></script>
    <script src="main.js"></script>
</body>
</html>