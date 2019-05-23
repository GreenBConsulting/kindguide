<!-- generated from /kindguide/views/nodes/493-audit-overview-js.blade.php -->
<script type="text/javascript">

function toggleAudItm(fldGrp) {
    if (document.getElementById("audItm"+fldGrp+"")) {
        if (document.getElementById("audItm"+fldGrp+"").style.display!="block") {
            $("#audItm"+fldGrp+"").slideDown("fast");
            $("#audItmOpn"+fldGrp+"").fadeOut(148);
            setTimeout(function() { $("#audItmCls"+fldGrp+"").fadeIn(148); }, 150);
            document.getElementById("audItmWrp"+fldGrp+"").className = 'audItmWrpAct';
        } else {
            $("#audItm"+fldGrp+"").slideUp("fast");
            $("#audItmCls"+fldGrp+"").fadeOut(148);
            setTimeout(function() { $("#audItmOpn"+fldGrp+"").fadeIn(148); }, 150);
            document.getElementById("audItmWrp"+fldGrp+"").className = 'audItmWrp';
        }
    }
    return true;
}
$(document).on("click", ".audItmWrp", function() {
    var fldGrp = $(this).attr("id").replace("audItmWrp", "");
    toggleAudItm(fldGrp);
});
$(document).on("click", ".audItmWrpAct", function() {
    var fldGrp = $(this).attr("id").replace("audItmWrp", "");
    toggleAudItm(fldGrp);
});

</script>