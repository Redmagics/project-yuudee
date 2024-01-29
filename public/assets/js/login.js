

// สมัครสมาชิก
var getUrl = window.location;
var baseUrl = getUrl .protocol + "//" + getUrl.host + "/";
var csrf = $("meta[name='csrf-token']").attr("content");  //token 
$('.registe').click(function(){ //$.register คือชื่อ class ของปุ่มที่เราจะกด ถ้าเป็น ID จะต้อง #register
    console.log(csrf)
    $.ajax({
                url: baseUrl+"createaccount", // กำนหดเส้นทางใน Route เพื่อส่งค่าไปยัง route
                type: 'POST', // ประเภทการส่งข้อมูล
                dataType: "html", // ประเภทการรับข้อมูลกลับมา
                data:{"_token":csrf}, //ส่งตัวแปร
                success: function(data) {
                    // $("#modal-data").html(data);
                    // $("#modal-data").modal('show');
                    console.log(data)
                    $('#modal-data').html(data ); 
                    $('#modal-data .modal').modal({backdrop: 'static',keyboard: true});
                    $('.overlay').hide();
                }
            });
})

// กู้รหัสผ่าน
var getUrl = window.location;
var baseUrl = getUrl .protocol + "//" + getUrl.host + "/";
var csrf = $("meta[name='csrf-token']").attr("content");  //token 
$('.Forgetpassword').click(function(){ //$.register คือชื่อ class ของปุ่มที่เราจะกด ถ้าเป็น ID จะต้อง #register
    console.log(csrf)
    $.ajax({
                url: baseUrl+"Forgetpassword", // กำนหดเส้นทางใน Route เพื่อส่งค่าไปยัง route
                type: 'POST', // ประเภทการส่งข้อมูล
                dataType: "html", // ประเภทการรับข้อมูลกลับมา
                data:{"_token":csrf}, //ส่งตัวแปร
                success: function(data) {
                    console.log(data)
                    $('#modal-data').html(data ); 
                    $('#modal-data .modal').modal({backdrop: 'static',keyboard: true});
                    $('.overlay').hide();
                }
            });
})


// var getUrl = window.location;
// var baseUrl = getUrl .protocol + "//" + getUrl.host + "/";
// var csrf = $("meta[name='csrf-token']").attr("content");  //token 
//     $(document).ready(function() {
//         // เมื่อคลิกปุ่ม Submit ภายใน Modal
//         $('#submitModalBtn').click(function() {
//             // รับค่าจากฟอร์มหรือทำอะไรก็ตามที่คุณต้องการ

//             // ทำการ Ajax Request
//             $.ajax({
//                 type: 'get', // หรือ 'GET' หรือตามที่คุณต้องการ
//                 url: baseUrl+"lostpassword", // ระบุ URL ที่จะส่ง Request ไป
//                 data:{"_token":csrf,"email":$("#ForgerEmail").val()}, //ส่งตัวแปร
//                 success: function(response) {
//                     // ประมวลผล response ที่ได้จาก server
//                     console.log(response);
//                     $('#statusMessage').html(response);
                    
//                     // ปิด Modal (ตัวอย่าง)
//                     // $('#exampleModal').modal('hide');

//                 }
                
//             });
//         });
//     });
    
// $(document).ready(function() {
//     $('#yourFormId').submit(function(e) {
//         e.preventDefault();
        
//         $.ajax({
//             type: 'POST',
//             url: baseUrl+"Forgetpassword", // กำนหดเส้นทางใน Route เพื่อส่งค่าไปยัง route
//             data: $('#yourFormId').serialize(),
//             success: function(data) {
//                 // กรณีที่สำเร็จ
//                 // ทำการปิด Modal หรือทำอย่างอื่นตามต้องการ
//             },
//             error: function(xhr, status, error) {
//                 var errors = xhr.responseJSON.errors;
//                 if (errors) {
//                     // กรณีมี error จากการ validate
//                     // แสดงการแจ้งเตือนหรือทำอื่น ๆ ตามต้องการ
//                     alert(errors.ForgerEmail[0]); // ตัวอย่างการแสดงแจ้งเตือนด้วย alert
//                 }
//             }
//         });
//     });
// });

// var getUrl = window.location;
// var baseUrl = getUrl.protocol + "//" + getUrl.host + "/";
// var csrf = $("meta[name='csrf-token']").attr("content");  // CSRF token

// $('.lost-password').click(function(){ // Handling click on register button
//     $.ajax({
//         url: baseUrl + "test", // Specify the route path to send data
//         type: 'POST', // Type of data transmission
//         dataType: "html", // Type of data expected in response
//         data: {"_token": csrf}, // Sending variables
//         success: function(data) {
//             // Update the content of the modal with the received data
//             $('#modal-data1').html(data); 
//             // Show the modal and configure it
//             var modalElement = $('#modal-data1');
//             modalElement.modal({backdrop: 'static', keyboard: false});
//             // Access elements inside the loaded modal
//             var modalIdElement = modalElement.find('#myModal1'); // Replace 'yourId' with the actual ID you are looking for
//             // Hide the overlay
//             $('.overlay').hide();
//         },
//         // Other callbacks that may be useful
//         complete: function() {
//             console.log('Request completed');
//         },
//         error: function(xhr, textStatus, errorThrown) {
//             console.error('Error:', textStatus, errorThrown);
//         }
//     });
// });




// var getUrl = window.location;
// var baseUrl = getUrl .protocol + "//" + getUrl.host + "/";
// var csrf = $("meta[name='csrf-token']").attr("content");  //token 
// $('.lost-password').click(function(){ //$.register คือชื่อ class ของปุ่มที่เราจะกด ถ้าเป็น ID จะต้อง #register
//     console.log(csrf)
//     $.ajax({
//                 url: baseUrl+"test", // กำนหดเส้นทางใน Route เพื่อส่งค่าไปยัง route
//                 type: 'POST', // ประเภทการส่งข้อมูล
//                 dataType: "html", // ประเภทการรับข้อมูลกลับมา
//                 data:{"_token":csrf}, //ส่งตัวแปร
//                 success: function(data) {
//                     // $('#modal1-data').html(data ); 
//                     // $('#modal1-data .modal1').modal({backdrop: 'static',keyboard: false});
//                     // $('.overlay').hide();
//                     console.log(data)

//                 }
//             });
// })



//   // modal สมัครสมาชิก
//   var modal = document.getElementById("myModal");
//   var btn = document.getElementById("myBtn"); // ปุ่มเปิดโมดัลสร้างบัญชี
//   var span = document.getElementsByClassName("close")[0];
  
//   // เมื่อคลิกที่ปุ่มเปิดโมดัล
//   btn.onclick = function() {
//       modal.style.display = "block";
//   }
  
//   // เมื่อคลิกที่ปุ่มปิด
//   span.onclick = function() {
//       modal.style.display = "none";
//   }
  
//   // เมื่อคลิกนอกโมดัล
//   window.onclick = function(event) {
//       if (event.target == modal) {
//           modal.style.display = "none";
//       }
//   }

//   // modal test
//   var modal = document.getElementById("myModal");
//   var btn = document.getElementById("register"); // ปุ่มเปิดโมดัลสร้างบัญชี
//   var span = document.getElementsByClassName("close")[0];
  
//   // เมื่อคลิกที่ปุ่มเปิดโมดัล
//   btn.onclick = function() {
//       modal.style.display = "block";
//   }
  
//   // เมื่อคลิกที่ปุ่มปิด
//   span.onclick = function() {
//       modal.style.display = "none";
//   }
  
//   // เมื่อคลิกนอกโมดัล
//   window.onclick = function(event) {
//       if (event.target == modal) {
//           modal.style.display = "none";
//       }
//   }



//   // modal ลืมรหัสผ่าน
//   var modal1 = document.getElementById("myModal1");
//   var btn1 = document.getElementById("myBtn1"); // ปุ่มเปิดโมดัลลืมรหัสผ่าน
//   var span1 = document.getElementsByClassName("close")[1];
//   // เมื่อคลิกที่ปุ่มเปิดโมดัลลืมรหัสผ่าน
//   btn1.onclick = function() {
//       modal1.style.display = "block";
//   }
//   // เมื่อคลิกที่ปุ่มปิด
//   span1.onclick = function() {
//       modal1.style.display = "none";
//   }
//   // เมื่อคลิกนอกโมดัล
//   window.onclick = function(event) {
//       if (event.target == modal1) {
//           modal1.style.display = "none";
//       }
//   }
