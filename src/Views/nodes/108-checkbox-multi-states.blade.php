<!-- generated from /kindguide/views/nodes/108-checkbox-multi-states.blade.php -->
<div id="node{{ $nID }}" class="nodeWrap">
<div class="nodeHalfGap"></div><input name="n{{ $nID }}radioCurr" id="n{{ $nID }}radioCurrID" value="" type="hidden">
<div id="nLabel{{ $nID }}" class="nPrompt"><label for="n{{ $nID }}FldID">{!! $question !!}</label></div>
<div class="nFld" style="margin-top: 20px;">
<label for="n{{ $nID }}fld0" id="n{{ $nID }}fld0lab" class="finger"><div class="disIn mR5"><input id="n{{ $nID }}fld0" value="Yes" name="n{{ $nID }}fld" data-nid="{{ $nID }}" class="nCbox{{ $nID }}  slTab ntrStp n{{ $nID }}fldCls" autocomplete="off" onclick="checkNodeUp('{{ $nID }}', 0, 1);" tabindex="8" type="radio"></div> Yes </label>
<label for="n{{ $nID }}fld1" id="n{{ $nID }}fld1lab" class="finger"><div class="disIn mR5"><input id="n{{ $nID }}fld1" value="No" name="n{{ $nID }}fld" data-nid="{{ $nID }}" class="nCbox{{ $nID }}  slTab ntrStp n{{ $nID }}fldCls" autocomplete="off" onclick="checkNodeUp('{{ $nID }}', 1, 1);" tabindex="9" type="radio"></div> No </label>
</div>
<div class="nodeHalfGap"></div><div id="node{{ $nID }}kids" class="disBlo" style="display: none;"><input name="n108Visible" id="n108VisibleID" value="0" type="hidden"><!-- generated from resources/views/vendor/survloop/inc-block-css.blade.php -->
<div id="blockWrap108" class="w100"><div class="fC"></div><div class="nodeAnchor"><a id="n108" name="n108"></a></div><div id="node108" class="nodeWrap disNon">
<div class="nodeHalfGap"></div><div class="nodeHalfGap"></div>
</div> <!-- end #node108 -->
</div></div> <!-- end #node{{ $nID }}kids -->
</div>