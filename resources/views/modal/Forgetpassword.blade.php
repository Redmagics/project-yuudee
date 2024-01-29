<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<div class="modal" tabindex="-1" role="dialog" id="exampleModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Lost your password?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="background-color: transparent; border: 0;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="center">

            @csrf

            <div class="form-outline mb-4 text-start  text-left">
              <label class="form-label" for="typeEmailX-2">Email</label>
                  <input type="email" id="ForgerEmail" name="ForgerEmail" placeholder="Enter Username" class="form-control form-control-lg" required>
              <div class="invalid-feedback">
                  <a> กรุณากรอก Email</a>
              </div>
              <div id="statusMessage" style="color: red"></div>

            </div>


            <button type="submit" class="fourth1 create" id="submitModalBtn">Submit</button>


        </div>
      </div>
    </div>
  </div>
</div>


<script>
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
  
  
  </script>

