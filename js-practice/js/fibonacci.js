//business logic
var looping = function(n) {
  //a and b represents the first number in the sequence
  var a = 0, b = 1, f = 1;
  //start the index at the 3 index since a and b are defined
  for(var i = 2; i <= n; i++) {
    f = a + b;
    a = b;
    b = f;
  }
  return f;
  // f = fibonacci
};

var recursive = function(n) {
  if(n <= 2) {
    return 1;
  } else {
    return this.recursive(n - 1) + this.recursive(n - 2);
  };
};

//user interface
$(document).ready(function(){
  $("form.fibonacci-form").submit(function(event){
    event.preventDefault();
    var userInput = $("#inputNumber").val();
    var result = "";
    for(var i = 1; i <= userInput; i++) {
      result += recursive(i) + " ";
    }
    $(".output").append("<li>" + result + "</li>");
  });
});
