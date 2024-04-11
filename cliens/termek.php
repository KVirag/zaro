<div class="container termekview">
    <div>cím</div>
    <div>kepek</div>
    <div>ár</div>
    <div>Állapot</div>
    <div>timestamp</div>
    <div>hely</div>
    <div>leírás</div>

</div>

<div id="id"><?=$_GET["id"] ?></div>
<script >
    let id=document.getElementById("id").textContent;
    console.log("termek view", id)
getData("../server/termekviewsql.php?id="+id, renderTermek)

function renderTermek(data){
console.log(data);
}


</script>
