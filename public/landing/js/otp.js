

var otp_inputs = document.querySelectorAll(".otp__digit")
var mykey = "0123456789".split("")
otp_inputs.forEach((_) => {
    _.addEventListener("keyup", handle_next_input)
})

function handle_next_input(event) {
    unlock();

    let current = event.target
    let index = parseInt(current.classList[1].split("__")[2])
    // current.value = event.key
    current.value = event.target.value

    // console.log(event)
    // console.log(event.target.value);

    if (event.keyCode == 8 && index > 1) {
      // console.log("SINIII")
        current.previousElementSibling.focus()
    }
    if (index < 6 && mykey.indexOf("" + current.value + "") != -1) {
      // console.log("SINIII1")
        var next = current.nextElementSibling;
        next.focus()
    }
    var _finalKey = ""
    for (let {
            value
        } of otp_inputs) {
        _finalKey += value
    }
    if (_finalKey.length == 6) {
        document.querySelector("#_otp").classList.replace("_notok", "_ok")
        document.querySelector("#_otp").innerText = _finalKey;
        validateOtp(_finalKey);
    } else {
        document.querySelector("#_otp").classList.replace("_ok", "_notok")
        document.querySelector("#_otp").innerText = _finalKey
    }
}

function lock() {
    $('#_otp').attr('hidden', true);
    $('.loading').attr('hidden', false);
    $('.otpModalClose').attr('hidden', true);
    $('.otp__digit').attr('disabled', true);

    // Reset
    // $('.otp__digit').val("");
}

function unlock() {
    $('#_otp').attr('hidden', false);
    $('.loading').attr('hidden', true);
    $('.otpModalClose').attr('hidden', false);
    $('.otp__digit').attr('disabled', false);
}

function requestOtp() {
  const data = $("#registration-form").serialize();

  const phone_number = $('input[name="phone_number"]').val();
  $('#no_otp_forward').text(`${phone_number}`);

  $.ajax({
    method: "POST",
    url: `/otp/request/${phone_number}`,
    success: function(res) {
      console.log(res);
      $('input[name="phone_number"]').val(res.phone_number);
      $('#no_otp_forward').text(`${res.phone_number}`);
    }
  });
}

function validateOtp(number) {
  lock();

  const data = $("#registration-form").serialize();

  const phone_number = $('input[name="phone_number"]').val();
  
  $.ajax({
    method: "POST",
    url: `/otp/validate/${phone_number}/${number}`,
    data: data,
    success : function(res) {
      $("#otpModal").modal('hide');
      $('.otp__digit').val("");
      $('input[name="name"]').val("");
      $('input[name="phone_number"]').val("");
      $('input[name="email"]').val("");
      $('input[name="origin"]').val("");

      Swal.fire(
        'Berhasil',
        'Pendaftaran anda telah berhasil, pantau whatsapp anda untuk info selanjutnya.',
        'success'
      )
      unlock();
    },
    error: function(err) {
      Swal.fire(
        'Gagal',
        'Pendaftaran Gagal, Mungkin OTP anda salah',
        'error'
      )
      unlock();

    }
  });
}
