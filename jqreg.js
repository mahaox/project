$(document).ready(function () {
    $("#name").blur(function () {
              var name = $('#name').val();
               var nameReg = /^[A-Za-z]+$/;
        if (!nameReg.test(name))

        {
            $('#nameu').removeClass('hidden');
            $('#nameu').text("Invalid Name...");
        } else
        {
            $('#nameu').addClass('hidden');
        }
    });
    $("#pwd").blur(function () {
              var password = $('#pwd').val();
               
        if (password =='')

        {
            $('#pwrd').removeClass('hidden');
            $('#pwrd').text("Invalid password...");
        } else
        {
            $('#pwrd').addClass('hidden');
        }
    });

   $("#email").blur(function () {

        var mail = $('#email').val();
              var emailReg = /^[A-Za-z0-9._]*\@[A-Za-z]+\.[A-Za-z]{2,5}$/;
        if (!emailReg.test(mail))
        {
            $('#mail').removeClass('hidden');
            $('#mail').text("Invalid Mail ID");
            return false;
        } else
        {
            $('#mail').addClass('hidden');
        }
    });

    $("#mobile").blur(function () {
        var mobile = $('#mobile').val();

       

        var mobileVal = /^\d{10}$/;

        if (!mobileVal.test($('#mobile').val()))

        {
            $('#mob').removeClass('hidden');

            $('#mob').text("Invalid Mobile Number");
            return false;
        } else
        {
            $('#mob').addClass('hidden');
        }
    });
    $("#date").blur(function () {
        var dat = $('#date').val();
       if (dat =='')

        {
            $('#dob').removeClass('hidden');

            $('#dob').text("Invalid dob");
            return false;
        } else
        {
            $('#dob').addClass('hidden');
        }
    });
    
    $("#address").blur(function () {
        var address= $('#address').val();
        if (address == "")
        {
            $('#add').removeClass('hidden');
            $('#add').text("Please Give Your Address");
            return false;
        } else
        {
            $('#add').addClass('hidden');
        }

    });
    
    
    $('form').submit(function () {
    var gender = $('input[type="radio"]:checked');
     if (gender.length == "")
     {
     $('#gen').removeClass('hidden');
     $('#gen').text("Please Select Your Gender");
     return false;
     }
     else
     {
     $('#gen').addClass('hidden');
     }
     
     
 });
});
  