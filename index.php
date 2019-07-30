<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Comment Box</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
   
</head>
<body>
    
    <div id="doc">

        <div class="wrap">

                <div class="box">

                    <div class="text-center">
                        <img src="mail-box.svg" alt="" style="max-width: 100px" />
                        <h1><span>กล่องแสดงความคิดเห็นพนักงาน</span></h1>
                    </div>

                    <div class="mb-3 form-textbox-wrap">
                        <input id="input-title" type="text" class="form-control form-textbox form-textbox-text form-icon-left" name="title" autocapitalize="off" autocomplete="off"  required aria-required="true" autocorrect="off"/>
                        <label class="form-label" >หัวข้อ</label>

                        <div class="form-icons"><img src="idea.svg" alt="" width="24" height="24" /></div>
                    </div>

                    <div class="mb-3 form-textbox-wrap">
                        <textarea id="input-text" class="form-control form-textbox form-textbox-text form-icon-left" name="text" autocomplete="off" rows="4"></textarea>
                        <label class="form-label">รายละเอียด</label>
                        <div class="form-icons"><img src="chat.svg" alt="" width="24" height="24" /></div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <div></div>
                        <button class="btn btn-primary btn-lg" type="button">ส่งความคิดเห็น</button>
                    </div>
            </div>
        </div>
    </div>

    <script src="jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="jquery.autosize.js"></script>
    <script src="main.js"></script>
</body>
</html>