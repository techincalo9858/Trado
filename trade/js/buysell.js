function priceFunction1(input1) {
    var input2 = document.getElementById('pinput2');
    var c_price = '<?php echo"$price"; ?>';
    input2.value = input1.value*c_price;
  }

  function priceFunction2(input2) {
    var input1 = document.getElementById('pinput1');
    var c_price = '<?php echo"$price"; ?>';
    input1.value = input2.value/c_price;
  }