<!-- generated from /kindguide/views/nodes/495-cert-skin-js.blade.php -->
<script type="text/javascript">
    
function loadSkin() {
    if (!document.getElementById("slLogoImg")) {
        setTimeout("loadSkin()", 100);
        return false;
    }
    document.getElementById("slLogoImg").src="/kindguide/uploads/logo-TCC-finalB.png";
    return true;
}
setTimeout("loadSkin()", 10);

$(document).ready(function(){
    
    function checkLogoScroll() {
        if (jQuery(this).scrollTop() > 170) $("#slLogoWrap").slideDown("fast");
        else $("#slLogoWrap").slideUp("fast");
    }
    setTimeout(function() { checkLogoScroll(); }, 50);
    jQuery(window).scroll(function () { checkLogoScroll(); });
    
});
</script>