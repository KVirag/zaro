<div class="container"></div>
<div class="o-block-group alignwide" style="padding-top:5vh;padding-bottom:5vh">
<div class=" o-block-columns termek-view">
    <div class="o-block-column">
        <div class="t-product-name termek-g w-100 "><h2 id="pname">cím</h2></div>
        
        <div class="t-kepek termek-g">
        <img id="t-fookep1" src="" alt="" width="" height=""> <!-- https://i.ibb.co/N3cch6d/c-m-k-p-4.jpg-->

<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01" onclick="change()">
  <div id="caption"></div>
</div>
        </div>
        <div class="t-ar termek-g border-b"> <h3 id="price">ár</h3></div>
        
        <div class="t-state termek-g border-b"> <h4 id="state">Állapot</h4></div>

        <div class="t-cname termek-g border-b"> <h4 id="cname">kategória</h4></div>
        
        <div class="t-descr termek-g   w-100 "><h5 class="w-100 p-3 border-l"  id="descr">>leírás</h5>
        
        <div class="t-time termek-g"><h5 class="p-3 border-l" id="time">timestamp</h5></div>
        
        <div class="t-adress termek-g"><h5 class="p-3 border-l" id="adress">hely</h5></div>
        <div class="t-tel termek-g"><h5 class="p-3 border-l" id="tel">tel.: +36 06/00 000 0000</h5></div>
        </div>
        </div>
</div>
</div>
<div id="id" style="display: none;"><?=$_GET["id"] ?></div>
<script >
    let id=document.getElementById("id").textContent;
    console.log("termek view", id)
    let kepek = [];
    let i=0;
getData("../server/termekviewsql.php?id="+id, renderTermek)

function renderTermek(data){
console.log(data);
    document.getElementById("pname").innerHTML=``;
    document.getElementById("t-fookep1").src=``;
    document.getElementById("price").innerHTML=``;
    document.getElementById("state").innerHTML=``;
    document.getElementById("descr").innerHTML=``;
    document.getElementById("time").innerHTML=``;
    document.getElementById("adress").innerHTML=``;
    document.getElementById("cname").innerHTML=``;
    for(let obj of data){
    
    document.getElementById("pname").innerHTML=`${obj.pname}`
    document.getElementById("price").innerHTML=`${obj.price}Ft`
    document.getElementById("state").innerHTML=`${obj.state}`
    document.getElementById("descr").innerHTML=`${obj.descr}`
    document.getElementById("time").innerHTML=`${obj.time}`
    document.getElementById("adress").innerHTML=`${obj.adress}`
    document.getElementById("cname").innerHTML=`${obj.cname}`
    document.getElementById("t-fookep1").alt=`${obj.pname}`;
        kepek[i]=obj.imgs;
    i=i+1;
    }
    document.getElementById("t-fookep1").src=kepek[0];
    i=0;

}

// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('t-fookep1');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
function change(){
    if(i==(kepek.length-1)){
    document.getElementById("t-fookep1").src=kepek[0];
  modalImg.src = kepek[0];
    i=0;
    }else{
        i=i+1;
    document.getElementById("t-fookep1").src=kepek[i]
    modalImg.src = kepek[i];

    }


}

</script>