@extends('layouts.app')
@section('content')
  <div id="card" class="card mx-auto text-lg-center" style="width:18rem; " >
    <div class="card-body mx-auto ">
      <p onmousedown="changepass()" id="rndPass" class="card-text">RandomJelszó.</p>
      <button type="button" onclick = "concealPass()">Conceald Password</button>
  </div>
</div>
<script>
  var card = document.getElementById("card");
  var pass = document.getElementById("rndPass");
  var savepass = pass.innerText;
  var isConceald = false;

  function concealPass()
  {
    if(!isConceald)
    {
      var concealdpass = "";
      for ( var i = 0; i < savepass.length; i++ ) {
        concealdpass += "*"
      }
      pass.innerText = concealdpass;
      isConceald = true;
    }else
    {
      pass.innerText = savepass;
      isConceald = false;
    }
  }

  function changeColor() {
    card.style.backgroundColor = random_rgba();
    
  }

  function random_rgba() {
    var o = Math.round, r = Math.random, s = 255;
    return 'rgba(' + o(r()*s) + ',' + o(r()*s) + ',' + o(r()*s) + ',' + r().toFixed(1) + ')';
  }

  function changepass(){
    var length = Math.floor(Math.random() * 8);
    pass.innerText =  makePassword(length+2);
    savepass = pass.innerText;
    changeColor();
  }
  function makePassword(length) {
    var output           = '';
    var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    var charactersLength = characters.length;
    for ( var i = 0; i < length; i++ ) {
      output += characters.charAt(Math.floor(Math.random() * charactersLength));
   }
   return output;
}
</script> 
@endsection
