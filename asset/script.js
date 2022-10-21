
  function submitDatalog(){
    var username = document.getElementById('username').value
    $(document).ready(function(){
      var data = {
        name: $("#name").val(),
        username: $("#username").val(),
        password: $("#password").val(),
        action: $("#action").val(),
      };

      $.ajax({
        url: 'function.php',
        type: 'post',
        data: data,
        success:function(response){
          if(response == "Login Successful"){
            Swal.fire({
              icon : "success",
              title : "Hello "+ username + " Selamat bermain",
              timer : 5000,
              showCancelButton: false,
            showConfirmButton: false
            })
            let detik 
            detik = setTimeout(move, 5000)
            function move(){
              location.href = "index.php"
            }
          }else{
            Swal.fire({
              icon : 'error',
              title : 'Oops...',
              text: 'Username & Password Salah',
              timer : 1000,
              showCancelButton: false,
            showConfirmButton: false
            })
          }
        }
      });
    });
  }

  function submitData(){

    var data = {
      name: $("#name2").val(),
      username: $("#username2").val(),
      password: $("#password2").val(),
      action: $("#action2").val(),
    };

    if(data.username==""  && data.password== ""){
      Swal.fire({
        title : "gagal",
        icon : "error",
        text : "Username dan Password harus di isi",
        timer : 2000,
        showCancelButton: false,
        showConfirmButton: false
      })
    }else if(data.username && data.password == ""){

      Swal.fire({
        title : "gagal",
        icon : "error",
        text : "Password harus di isi",
        timer : 2000,
        showCancelButton: false,
        showConfirmButton: false
      })
      
    }else if(data.username == "" && data.password){

      Swal.fire({
        title : "gagal",
        icon : "error",
        text : "Username harus di isi",
        timer : 2000,
        showCancelButton: false,
        showConfirmButton: false
      })

    }else if(data.name = "" && data.username && data.password){
      Swal.fire({
        title : "gagal",
        icon : "error",
        text : "fullname harus di isi",
        timer : 2000,
        showCancelButton: false,
        showConfirmButton: false
      })
  }else{
    Swal.fire({
      icon : "success",
      title : "Selamat bermain",
      timer : 2000,
      showCancelButton: false,
          showConfirmButton: false
    })
      var username = document.getElementById('username').value
    $(document).ready(function(){

      

      $.ajax({
        url: 'function.php',
        type: 'post',
        data: data,
        success:function(response){
          if(response === "Successfull"){
            Swal.fire({
              icon : "success",
              title : "Hello Selamat bergabung",
              timer : 5000,
              showCancelButton: false,
            showConfirmButton: false,
            })
            let detik 
            detik = setTimeout(move, 5000)
            function move(){
              location.href = "index.php"
            }
          }else{
            Swal.fire({
              icon : 'error',
              title : 'Oops...',
              text : 'Username & Password Salah',
              timer : 5000,
              showCancelButton: false,
            showConfirmButton: false
            })
          }
        }
      });
    });
  }

    }
