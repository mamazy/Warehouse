<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-127229782-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-127229782-2');
</script>

<div id='cssmenu'>
<ul>
  <li class='active'><a><span>Welcome <?php echo $_SESSION['username']; ?> !</span></a>
      <ul>
         <li><a href='logout.php'>Logout</a>
         </li>
      </ul>

   <li><a href='index.php'>Home</a></li>
   <li class='active'><a href='#'>WAREHOUSE</a>
      <ul>
         <li><a href='warehouse.php'>Part Number</a>
         <li><a href='wpartname.php'>Part Name</a>
         <li><a href='wmachinetype.php'>Machine Type</a>
         <li><a href='wclms.php'>Column check</a>
         <li><a href='add-data.php'>Add New Entry</a>
         </li>
      </ul>
      
   </li>
      <li><a href='#'>KOMATSU 14</a>
            <ul>
         <li><a href='Kindex.php'>Part Number</a>
         <li><a href='Kpartname.php'>Part Name</a>
         </li>
      </ul>
      
      <li><a href='#'>KME 16</a>
            <ul>
         <li><a href='KMEindex.php'>Part Number</a>
         <li><a href='KMEINTindex.php'>INT Part Number</a>
         <li><a href='KMEpartname.php'>Part Name</a>
         </li>
      </ul>
      
    
      <li><a href='#'>COMPARE</a>
   <ul>
         <li><a href='Compare.php'>Part Number</a>

      </li>
   </ul>
      
   <li><a href='#'>CATERPILLAR</a>
   <ul>
         <li><a href='Cindex.php'>Part Number</a>
         <li><a href='CNindex.php'>Part Name</a>
      </li>
   </ul>
   
   <li><a href='#'>SHOP</a>
      <ul>
         <li><a href='Shop.php'>Part Number</a>
         <li><a href='NShop.php'>Part Name</a>
         <li><a href='Shop-add-data.php'>Add Part to SHOP</a>
      </li>
      </ul>
      
   <li><a href='#'>Bearing</a>
   <ul>
         <li><a href='Bearing.php'>Part Number</a>
         <li><a href='BearingN.php'>Brand</a>
         <li><a href='BearingS.php'>Status</a>
         <li><a href='BearingM.php'>More</a>
         <li><a href='Bearing-add-data.php'>Add New Item</a>
     </li>
      </ul>
        
         <li><a href='#'>DXB</a>
   <ul>
        <li><a href='dxb.php'>Part Number</a>
        <li><a href='dxbNsearch.php'>Part Name</a>
        <li><a href='dxbMsearch.php'>More</a>
        <li><a href='add-dxb.php'>ADD to DXB</a>
      </li>
   </ul>
   
  
</ul>
</div>