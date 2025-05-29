
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title ?></title>

  <link rel="icon" type="image/png" href="<?= base_url('asset_login') ?>/images/icons/logoc-food.png" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/dist/css/adminlte.min.css?v=3.2.0">

<script data-cfasync="false" nonce="2afae53c-487e-4a91-bc6f-16e116f64b2e">try{(function(w,d){!function(bz,bA,bB,bC){if(bz.zaraz)console.error("zaraz is loaded twice");else{bz[bB]=bz[bB]||{};bz[bB].executed=[];bz.zaraz={deferred:[],listeners:[]};bz.zaraz._v="5853";bz.zaraz._n="2afae53c-487e-4a91-bc6f-16e116f64b2e";bz.zaraz.q=[];bz.zaraz._f=function(bD){return async function(){var bE=Array.prototype.slice.call(arguments);bz.zaraz.q.push({m:bD,a:bE})}};for(const bF of["track","set","debug"])bz.zaraz[bF]=bz.zaraz._f(bF);bz.zaraz.init=()=>{var bG=bA.getElementsByTagName(bC)[0],bH=bA.createElement(bC),bI=bA.getElementsByTagName("title")[0];bI&&(bz[bB].t=bA.getElementsByTagName("title")[0].text);bz[bB].x=Math.random();bz[bB].w=bz.screen.width;bz[bB].h=bz.screen.height;bz[bB].j=bz.innerHeight;bz[bB].e=bz.innerWidth;bz[bB].l=bz.location.href;bz[bB].r=bA.referrer;bz[bB].k=bz.screen.colorDepth;bz[bB].n=bA.characterSet;bz[bB].o=(new Date).getTimezoneOffset();if(bz.dataLayer)for(const bJ of Object.entries(Object.entries(dataLayer).reduce(((bK,bL)=>({...bK[1],...bL[1]})),{})))zaraz.set(bJ[0],bJ[1],{scope:"page"});bz[bB].q=[];for(;bz.zaraz.q.length;){const bM=bz.zaraz.q.shift();bz[bB].q.push(bM)}bH.defer=!0;for(const bN of[localStorage,sessionStorage])Object.keys(bN||{}).filter((bP=>bP.startsWith("_zaraz_"))).forEach((bO=>{try{bz[bB]["z_"+bO.slice(7)]=JSON.parse(bN.getItem(bO))}catch{bz[bB]["z_"+bO.slice(7)]=bN.getItem(bO)}}));bH.referrerPolicy="origin";bH.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(bz[bB])));bG.parentNode.insertBefore(bH,bG)};["complete","interactive"].includes(bA.readyState)?zaraz.init():bz.addEventListener("DOMContentLoaded",zaraz.init)}}(w,d,"zarazData","script");window.zaraz._p=async dq=>new Promise((dr=>{if(dq){dq.e&&dq.e.forEach((ds=>{try{const dt=d.querySelector("script[nonce]"),du=dt?.nonce||dt?.getAttribute("nonce"),dv=d.createElement("script");du&&(dv.nonce=du);dv.innerHTML=ds;dv.onload=()=>{d.head.removeChild(dv)};d.head.appendChild(dv)}catch(dw){console.error(`Error executing script: ${ds}\n`,dw)}}));Promise.allSettled((dq.f||[]).map((dx=>fetch(dx[0],dx[1]))))}dr()}));zaraz._p({"e":["(function(w,d){})(window,document)"]});})(window,document)}catch(e){throw fetch("/cdn-cgi/zaraz/t"),e;};</script></head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-12 text-center">
        <img src="<?= base_url('AdminLTE') ?>/dist/img/logoc-food.png" alt="C-Food Logo" class="brand-image elevation-3"
          style="opacity: 1; width:65px; height: 65px; border-radius: 50%; margin-right: 10px;">
        <span class="brand-text font-weight-bold text-primary" style="font-size: 30px;">
          C-Food 14 <span style="color: #ff6600;">C-ashier</span>
        </span>
        <br>
        <br>
        <address>
          <strong>Jalan Cabe Raya, Pondok Cabe,  15437, </strong><br>
          <strong>Pamulang, Tangerang Selatan</strong><br>
          <strong>Banten - Indonesia</strong>
        </address>
      </div>
      <div class="col-12 text-center">
        <hr>
        <b><h4><?= $title ?></h4></b> </hr>
      </div>
    </div>
    <!-- info row -->

    <!-- Table row -->
    <div class="row">
        <?php if($page){
            echo view($page);
        }
        ?>
    </div>
    <!-- /.row -->

    <div class="row">
     
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
<!-- Page specific script -->

<script>
// window.addEventListener("load", window.print());
</script>

</body>
</html>
