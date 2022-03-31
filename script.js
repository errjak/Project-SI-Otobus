// PENGECEKAN //

// check email
function checkEmail() {
    var patt = /([a-zA-Z0-9_\.])+@+gmail\.com/g;
    var email = document.getElementById("email").value;
    var span = document.getElementById("alertEmail");
    if (email == "") {
        span.style.display = "inline";
        span.innerHTML = "Masukan alamat email google anda";
        document.getElementById("email").focus();
        return false;
    } else if (patt.test(email)) {
        return true;
    } else {
        span.style.display = "inline";
        span.innerHTML = "Masukan sesuai akun google anda";
        document.getElementById("email").focus();
        return false;
    }
}

// check konfirmasi email
function checkConfirmEmail() {
    var span = document.getElementById("alertConfirmEmail");
    if (document.getElementById("confirmEmail").value != document.getElementById("email").value) {
        span.style.display = "inline";
        span.innerHTML = "Email harus sama";
        document.getElementById("confirmEmail").focus();
        return false;
    }
    return true;
}

// check password
function checkPassword() {
    var patt = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/g;
    var pass = document.getElementById("password");
    var span = document.getElementById("alertPassword");
    if (pass.value == "") {
        span.style.display = "inline";
        span.innerHTML = "Masukan password";
        document.getElementById("password").focus();
        return false;
    } else if (patt.test(pass.value)) {
        return true;
    } else {
        span.style.display = "inline";
        span.innerHTML = "Password harus memenuhi setidaknya a-z, A-Z, 0-9, dan minimal 8 karakter";
        document.getElementById("password").focus();
        return false;
    }
}

// check konfirmasi password
function checkConfirmPass() {
    var span = document.getElementById("alertConfirmPass");
    if (document.getElementById("confirmPassword").value != document.getElementById("password").value) {
        span.style.display = "inline";
        span.innerHTML = "Password harus sama";
        document.getElementById("confirmPassword").focus();
        return false;
    }
    return true;
}
// AKHIR DARI PENGECEKAN //

// menyembunyikan alert bagian email
function alertEmail() {
    document.getElementById("alertEmail").style.display = "none";
}
// menyembunyikan alert bagian konfirmasi email
function alertConfirmEmail() {
    document.getElementById("alertConfirmEmail").style.display = "none";
}
// menyembunyikan alert bagian password
function alertPassword() {
    document.getElementById("alertPassword").style.display = "none";
}
// menyembunyikan alert bagian konfirmasi password
function alertConfirmPass() {
    document.getElementById("alertConfirmPass").style.display = "none";
}
// AKHIR DARI ALERT //

// FUNGSI UTAMA VALIDASI
function validasi() {
    var confirmPassword = checkConfirmPass();
    var password = checkPassword();
    var confirmEmail = checkConfirmEmail();
    var email = checkEmail();
    var lomba = checkLomba();
    var pendidikan = checkPendidikan();
    var kelamin = checkKelamin();
    var umur = checkUmur();
    var tanggalLahir = checkDate();
    var alamat = checkAlamat();
    var nama = checkNama();
    if (nama && alamat && tanggalLahir && umur && kelamin && pendidikan && lomba && email && confirmEmail && password && confirmPassword) {
        return true;
    }
    return false;
}

// EVENT TAMBAHAN
// show hide password
function showPass() {
    var password = document.getElementById("password");
    var togglePass = document.getElementById("toggle-pass");
    if (password.type === "password") {
        password.setAttribute("type", "text");
    } else {
        password.setAttribute("type", "password");
    }
    togglePass.classList.toggle("hide");
}

function showPass2() {
    var password2 = document.getElementById("confirmPassword");
    var togglePass2 = document.getElementById("toggle-pass2");
    if (password2.type === "password") {
        password2.setAttribute("type", "text");
    } else {
        password2.setAttribute("type", "password");
    }
    togglePass2.classList.toggle("hide");
}
//Accordion
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
    panel.style.maxHeight = null;
    } else {
    panel.style.maxHeight = panel.scrollHeight + "px";
    } 
});
}

function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
  // Close the dropdown menu if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdownout-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }

