<?php $this->load->view("include/header")?>



<div class="container">

<p id="demo">this is gonna change</p>

<button type="button" onclick='document.getElementById("demo").innerHTML="hello world" ' class="btn btn-default">Click me</button>
<button type="button" onclick="myFunction()" class="btn btn-danger">change size</button>
<button type="button" onclick='document.getElementById("demo").style.display="none" ' class="btn btn-danger">hide </button>
<button type="button" onclick='document.getElementById("demo").style.display="block" ' class="btn btn-success">show</button>

    <p id="test"></p>
    <p id="test1">hello</p>

    <button type="button"  class="btn btn-success hideme">hide</button>
    <button type="button"   class="btn btn-success show">show</button>


</div>

<?php $this->load->view("include/footer")?>