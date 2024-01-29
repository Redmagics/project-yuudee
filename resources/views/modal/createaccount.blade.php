<!-- <div class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" >
          <h5 class="modal-title">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="background-color: transparent; border: 0;">
              <span aria-hidden="true">&times;</span>
            </button>
              
        </div>
          <div class="center" style="background-color: transparent; border:0;">
            <h1>Create an account</h1>
            <form method="post">
                <div class="txt_field">
                    <input type="text" required>
                    <span></span>
                    <label>Username</label>
                </div>
                <div class="txt_field">
                    <input type="password" required>
                    <span></span>
                    <label>Password</label>
                </div>

                <div class="txt_field">
                    <input type="password" required>
                    <span></span>
                    <label>Confirm Password</label>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="success button-success">Save changes</button>
        </div>
      </div>
    </div>
  </div> -->



  <div class="modal" tabindex="-1" role="dialog" id="exampleModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Create Account</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="background-color: transparent; border: 0;">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="center">

              @csrf
            <div class="form-outline mb-4 text-start  text-left">
              <label class="form-label" for="typeEmailX-2">Email</label>
                  <input type="email" id="Email" name="username" placeholder="Enter Username" class="form-control form-control-lg" required>
            </div>
            <a id="result"></a>

            <div class="form-outline mb-4 text-start  text-left">
              <label class="form-label" for="typePasswordX-2">Password</label>
                  <input type="password" id="password" name="password" placeholder="Enter Password" class="form-control form-control-lg" required>
            </div>
            <a class="message"></a>
            <div class="form-outline mb-4 text-start  text-left">
              <label class="form-label" for="typePasswordX-2">Password</label>
                  <input type="password" id="confirmpassword" name="confirmpassword" placeholder="Enter Password" class="form-control form-control-lg" required>
            </div>
            <a class="message"></a>
            <div id="statusMessage" style="color: red"></div>
            
                <button type="submit" class="fourth1 create" id="submitModalBtn">Submit</button>
  

          </div>
        </div>
      </div>
    </div>
  </div>


<script>
//   $('form').submit(function(event) {
//   // เรียกใช้งานฟังก์ชันตรวจสอบรหัสผ่าน
//   $('#password, #confirmpassword').trigger('input');
//   // เรียกใช้งานฟังก์ชันตรวจสอบอีเมล์
//   validate();
  
//   // ตรวจสอบว่ามีข้อผิดพลาดหรือไม่
//   if ($('#password, #confirmpassword').hasClass('error') || !validateEmail($('#email').val())) {
//     event.preventDefault();
//   }
// });



$('#password, #confirmpassword').on('keyup', function () {
  if ($('#password').val() == $('#confirmpassword').val()) {
    $('.message').html('Password ตรงกัน').css('color', 'green');
  } else 
    $('.message').html('Password ไม่ตรงกัน').css('color', 'red');
});

const validateEmail = (email) => {
  return email.match(
    /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
  );
};

const validate = () => {
  const $result = $('#result');
  const email = $('#email').val();
  $result.text('');

  if(validateEmail(email)){
    $result.text('');
    $result.css('');
  } else{
    $result.text('กรุณากรอกในรูปแบบ Email');
    $result.css('color', 'red');
  }
  return false;
}
$('#email').on('input', validate);


var getUrl = window.location;
  var baseUrl = getUrl .protocol + "//" + getUrl.host + "/";
  var csrf = $("meta[name='csrf-token']").attr("content");  //token 
    $(document).ready(function() {
        // เมื่อคลิกปุ่ม Submit ภายใน Modal
        $('#submitModalBtn').click(function() {
            // รับค่าจากฟอร์มหรือทำอะไรก็ตามที่คุณต้องการ
  
            // ทำการ Ajax Request
            $.ajax({
                type: 'get', // หรือ 'GET' หรือตามที่คุณต้องการ
                url: baseUrl+"lostpassword", // ระบุ URL ที่จะส่ง Request ไป
                data:{"_token":csrf,
                "email":$("#ForgerEmail").val()}, //ส่งตัวแปร
                success: function(response) {
                    // ประมวลผล response ที่ได้จาก server
                    console.log(response);
                    $('#statusMessage').html(response);
                    
                    // ปิด Modal (ตัวอย่าง)
                    // $('#exampleModal').modal('hide');
  
                }
                
            });
        });
    });
  
  // var getUrl = window.location;
  // var baseUrl = getUrl .protocol + "//" + getUrl.host + "/";
  // var csrf = $("meta[name='csrf-token']").attr("content");  //token 
  //     $(document).ready(function() {
  //         // เมื่อคลิกปุ่ม Submit ภายใน Modal
  //         $('#submitModalBtn').click(function() {
  //             // รับค่าจากฟอร์มหรือทำอะไรก็ตามที่คุณต้องการ
  
  //             // ทำการ Ajax Request
  //             $.ajax({
  //                 type: 'post', // หรือ 'GET' หรือตามที่คุณต้องการ
  //                 url: baseUrl+"register", // ระบุ URL ที่จะส่ง Request ไป
  //                 data:{"_token":csrf,
  //                 "username":$("#username").val(),
  //                 "password":$("#password").val(),
  //                 "confirmpassword":$("#confirmpassword").val(),
  
  //                 }, //ส่งตัวแปร
  //                 success: function(response) {
  //                     // ประมวลผล response ที่ได้จาก server
  //                     console.log(response);
  //                     $('#statusMessage').html(response);
                        
  //                 }
                  
  //             });
  //         });
  //     });
  
  </script>

