// BASIC DOM MANIPILATION
// HIDE & SHOW element (toggle)
$(document).ready(function(){
  $("#hide-show").click(function(){
    $("#hide-show-target").toggle();
  });
});

// FADE element (toggle)
$(document).ready(function(){
  $("#fade").click(function(){
    $("#fade-target").fadeToggle();
  }); 
});

// SLIDE element (toggle)
$(document).ready(function(){
  $("#slide").click(function(){
    $("#slide-target").slideToggle();
  }); 
});

// ANIMATE element
$(document).ready(function(){
  $("#simple-animate").click(function(){
    var img = $("#simple-animate-target");
    img.animate({height: '300px', opacity: '0.4'}, "slow");
    img.animate({width: '300px', opacity: '0.8'}, "slow");
    img.animate({height: '100px', opacity: '0.4'}, "slow");
    img.animate({width: '100px', opacity: '0.8'}, "slow");
  });
});

// STOP animation on element
$(document).ready(function(){
  $("#start-animation").click(function(){
    $("#start-stop-animation-target").slideUp(3000);
  });
  $("#stop-animation").click(function(){
    $("#start-stop-animation-target").stop();
  });
});

// CALLBACK
$(document).ready(function(){
  $("#callback").click(function(){
    $("#callback-target").hide("slow",function(){
        alert("Image is now hidden!");
    });
  }); 
});

// SIMPLE CHAINING
$(document).ready(function(){
  $("#chain-animation").click(function(){
    $("#chain-animation-target").css("border-radius", "50%")
      .slideUp(2000)
      .slideDown(2000);
  });
});

// BASIC STUFF
// SIMPLE CALCULATION
function pythagorean(a, b){
  var c = (Math.pow(a, 2) + Math.pow(b, 2));
  return c;
}

$(document).ready(function(){
  $("#calculate").click(function(){
    var a = parseInt($("#side-a").val());
    var b = parseInt($("#side-b").val());

    var cPow = pythagorean(a, b);
    var c = Math.sqrt(cPow);

    if (!isFinite(a) || !isFinite(b)){
      alert("You must enter a number!!!"); 
    } else {
      $("#solution-pow").text("The solution of C is : " + cPow);
      $("#solution").text("The length of side C is : " + c);
    }
    
  });
});

// FILLING THE ARRAY
/*  var numbers = new Array();
    $("#add-number").click(function(){  
        var number = prompt("Add a number to the array!");
        if(!isFinite(number)) {
          alert("You must enter a number!");
        }
        numbers.push(number);
    });*/

// SIMPLE ARRAY LISTING
var numbers = [10,60,30,20,40,50];
  $(document).ready(function(){
        $("#show-numbers").click(function(){
          $("#array").text("");  
          $.each(numbers, function(i, val){
              $("#array").append(i + ": " + val + '<br>');
          });    
        });
  });

// ARRAY SUMMING
  $(document).ready(function(){
    var sum = 0;
      for (var i = 0; i < numbers.length; i++) {
        sum += numbers[i] << 0;
      }
      $("#sum-button").click(function(){
        $("#sum").text("");
        $("#sum").text("The sum of the items in the array is: " + sum);
      });
  });

// ARRAY COUNTING
  $(document).ready(function(){
      var num = 0;
      for (var i = 0; i < numbers.length; i++) {
        ++num;
      }
      $("#num-button").click(function(){
        $("#num").text("");
        $("#num").text("Number of items in the array is " + num);
      });
  });
    
// FINDING MAX   
  $(document).ready(function(){
      var max = Math.max.apply(Math, numbers);
      $("#max-button").click(function(){  
        $("#max").text("");
        $("#max").text("The biggest number in the array is " + max);
      });
  });












/*

$(document).ready(function(){
var sum = 0;
  $.each(numbers, function(i, val){
    $("#array").append(i + ": " + val + '<br>');
  }); 
document.write(sum);
}

*/