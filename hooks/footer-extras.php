<style>
  body{
    background: url("images/background.jpg") no-repeat fixed center center / cover;
       
        
}

</style>

<script>
    new AppGiniLoginView().fix();
    new AppGiniCommon()
    .setIcon("check", "text-danger")
    .setTitle("<b>LF</b><i>Inventario</i>");
    new AppGiniDetailView().compact(true, false, true);
    new AppGiniCommon().navbar.fix(true);
    new AppGiniDetailView().ActionButtons()
    .hideText();
  
    
   
    
	

</script>